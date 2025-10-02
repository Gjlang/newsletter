<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="x-apple-disable-message-reformatting">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KL The Guide</title>
<style>
  /* Mobile tweaks */
  @media (max-width:600px){ .container{width:100%!important} .stack{display:block!important;width:100%!important} .p16{padding:16px!important} .center{text-align:center!important} .btn{display:block!important;width:100%!important} }
  /* Buttons & text */
  .btn{background:#22255b;color:#fff;text-decoration:none;border-radius:8px;padding:14px 22px;display:inline-block;font-weight:700}
  .muted{color:#6b6f82}
</style>
</head>
<body style="margin:0;padding:0;background:#f3f4f7;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f3f4f7;">
    <tr>
      <td align="center" style="padding:24px;">
        <table role="presentation" class="container" width="640" cellpadding="0" cellspacing="0" style="width:640px;background:#ffffff;border-radius:16px;overflow:hidden">
          <!-- hero -->
          <tr>
            <td>
              <img src="{{ $hero ?? 'https://via.placeholder.com/1280x380?text=KL+The+Guide' }}" alt="KL The Guide" width="640" style="width:100%;display:block;border:0">
            </td>
          </tr>

          <!-- headline block -->
          <tr>
            <td class="p16" style="padding:32px 32px 8px 32px;">
              <h1 style="margin:0 0 8px 0;font-size:32px;line-height:1.2;color:#22255b;font-weight:800;">
                Nobody cares about KL anymore…
              </h1>
              <p style="margin:0 0 16px 0;font-size:16px;line-height:1.6;color:#6b6f82;">
                said no one who's actually paying attention.
              </p>
              <p style="margin:0 0 24px 0;font-size:16px;line-height:1.7;color:#1f2430;">
                Sure, the headlines are full of the usual, traffic jams, heatwaves, and café trends that come and go.
                <strong>But look closer</strong>, and you’ll see:
                <strong>KL isn’t fading. It’s flourishing.</strong>
              </p>

              <div class="center" style="text-align:left;">
                <a href="{{ $cta_url ?? '#' }}" class="btn" target="_blank" rel="noopener">
                  {{ $cta_text ?? 'Discover KL The Guide' }}
                </a>
              </div>
            </td>
          </tr>

          <!-- two columns intro -->
          <tr>
            <td class="p16" style="padding:8px 32px 24px 32px;">
              <p style="margin:0 0 12px 0;font-size:16px;line-height:1.7;color:#1f2430;">
                Every week, <strong>something new is blooming</strong> in this city:
                <strong>pop-ups</strong>, murals, <strong>markets</strong>, underground gigs,
                <strong>rooftop cafes</strong>, indie bookstores.
                And guess what? <strong>KL The Guide</strong> is your all-access pass to it all.
              </p>
            </td>
          </tr>

          <!-- Feature columns -->
          <tr>
            <td class="p16" style="padding:0 32px 24px 32px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="stack" width="50%" valign="top" style="padding-right:12px;">
                    <h3 style="margin:0 0 8px 0;color:#22255b">Fresh blogs, every week</h3>
                    <p class="muted" style="margin:0 0 12px 0;line-height:1.7;">
                      Head over to our <a href="{{ $blog_url ?? '#' }}">blog page</a> for fresh drops <strong>every week</strong>.
                      Think local tips, stories, secrets, and everything in between.
                    </p>
                    <img src="{{ $left_img ?? 'https://via.placeholder.com/560x560?text=Left+Image' }}" alt="" width="100%" style="display:block;border-radius:12px;border:0">
                  </td>

                  <td class="stack" width="50%" valign="top" style="padding-left:12px;">
                    <h3 style="margin:0 0 8px 0;color:#22255b">Stay in the loop</h3>
                    <p class="muted" style="margin:0 0 12px 0;line-height:1.7;">
                      We spill the tea on what’s happening in KL through
                      <a href="{{ $tiktok ?? '#' }}">TikTok</a>,
                      <a href="{{ $instagram ?? '#' }}">Instagram</a>, and
                      <a href="{{ $facebook ?? '#' }}">Facebook</a>.
                      Events, pop-ups, festivals, <strong>foodie trails and more</strong>.
                    </p>
                    <img src="{{ $right_img ?? 'https://via.placeholder.com/560x560?text=Right+Image' }}" alt="" width="100%" style="display:block;border-radius:12px;border:0">
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- CTA block -->
          <tr>
            <td class="p16 center" style="padding:8px 32px 16px 32px;text-align:center">
              <h3 style="margin:0 0 8px 0;color:#22255b">Want your business or event featured — for FREE?</h3>
              <p class="muted" style="margin:0 0 16px 0">We’re opening our pages (and hearts) to local brands and happenings. Slots fill up fast.</p>
              <a href="{{ $contact_url ?? '#' }}" class="btn">Get Featured</a>
            </td>
          </tr>

          <!-- banner -->
          <tr>
            <td style="padding:8px 0 0 0;">
              <img src="{{ $footer_banner ?? 'https://via.placeholder.com/1280x220?text=Footer+Banner' }}" alt="" width="640" style="width:100%;display:block;border:0">
            </td>
          </tr>

          <!-- footer -->
          <tr>
            <td class="p16" style="padding:16px 32px 32px 32px;color:#6b6f82;font-size:13px;line-height:1.6">
              KL isn’t yesterday’s news. It’s right now’s adventure.<br>
              <strong>And we’re here to show you where to look.</strong>
              <div style="height:12px"></div>
              <div>
                Follow us:
                <a href="{{ $site ?? '#' }}">Website</a> ·
                <a href="{{ $facebook ?? '#' }}">Facebook</a> ·
                <a href="{{ $instagram ?? '#' }}">Instagram</a> ·
                <a href="{{ $tiktok ?? '#' }}">TikTok</a> ·
                <a href="{{ $youtube ?? '#' }}">YouTube</a>
              </div>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
