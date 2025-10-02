<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeSubscriberMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function create()
    {
        return view('marketing.subscribe');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:rfc,dns|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
            'email' => $data['email'],
            'status' => 'subscribed',
            'subscribed_at' => now(),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // send welcome mail
        Mail::to($subscriber->email)->send(new WelcomeSubscriberMail(route('home')));

        return back()->with('success', 'Thanks! Please check your email.');
    }
}
