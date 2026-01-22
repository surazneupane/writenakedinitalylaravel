<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        VIP Day | The Published Author Experience | Italy 22.02.2026 - Write Naked in Italy
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vipday.css') }}" />
    <meta name="description"
        content="A world-first luxury visibility experience for published authors. Press, prestige, and Italian luxury await on 22.02.2026. Limited spaces available." />


    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="VIP Day | The Published Author Experience" />
    <meta property="og:description"
        content="Luxury visibility, press &amp; prestige for published authors. Italy, 22.02.2026.." />
    <meta property="og:image" content="{{ asset('images/share_image.jpg') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card (for Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="VIP Day | The Published Author Experience" />
    <meta name="twitter:description"
        content="Luxury visibility, press &amp; prestige for published authors. Italy, 22.02.2026." />
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
    @include('front.partials.vipday.vipbodycontent')

    <script>
        const siteUrl = "{{ config('app.url') }}";
    </script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

</body>

</html>
