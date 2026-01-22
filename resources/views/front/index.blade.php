<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        Write Naked in Italy — A 5-Day Romantic Bestseller Retreat | Feb 17–21, 2026
    </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <meta name="description"
        content="WRITE NAKED IN ITALY — a 5-day romantic bestseller retreat in Italy (Feb 17–21, 2026). Write your love-frequency book, receive a publishing deal, bestseller campaign, and elite brand photoshoot." />

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Write Naked in Italy — A 5-Day Romantic Bestseller Retreat | Feb 17–21, 2026" />
    <meta property="og:description"
        content="WRITE NAKED IN ITALY is a 5-day romantic writing retreat in Italy (Feb 17–21, 2026). Write your love-frequency book, receive a publishing deal, a guaranteed bestseller campaign, and an elite brand photoshoot." />

    <meta property="og:image" content="{{ asset('images/share_image.jpg') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card (for Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Write Naked in Italy — A 5-Day Romantic Bestseller Retreat | Feb 17–21, 2026" />
    <meta name="twitter:description"
        content="WRITE NAKED IN ITALY is a 5-day romantic writing retreat in Italy (Feb 17–21, 2026). Write your love-frequency book, receive a publishing deal, a guaranteed bestseller campaign, and an elite brand photoshoot." />
    <meta name="twitter:image" content="{{ asset('images/share_image.jpg') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Butler:wght@400;700;900&family=Manrope:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>

<body>
    @include('front.partials.common.navbar')
    @include('front.partials.home.herosection')
    @include('front.partials.home.bodycontent')
    @include('front.partials.common.question')
    @include('front.partials.common.footer')

    <script>
        const siteUrl = "{{config('app.url')}}";
    </script>

    <script src="{{ asset('assets/js/index.js') }}"></script>

</body>

</html>
