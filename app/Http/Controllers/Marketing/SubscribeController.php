<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeSubscriberMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        // Validate: required, email format, unique in subscribers
        $data = $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:subscribers,email'],
        ]);

        // Create record with basic meta
        $subscriber = Subscriber::create([
            'email'        => $data['email'],
            'status'       => 'subscribed',
            'subscribed_at'=> now(),
            'ip'           => $request->ip(),
            'user_agent'   => (string) $request->userAgent(),
        ]);


        // Queue welcome email
        Mail::to($subscriber->email)->queue(new WelcomeSubscriberMail());

        // Flash success and redirect to form
        return redirect()
            ->route('marketing.subscribe.form')
            ->with('success', 'Thanks! We emailed your welcome guide.');
    }
}
