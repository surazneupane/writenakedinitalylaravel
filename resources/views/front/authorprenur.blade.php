<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Authorpreneur — Turn Your Expertise Into a Published Book | Write Naked Method</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/authorprenur.css') }}" />
    <meta name="description"
        content="Authorpreneur is a 6-month high-touch program by Mirav Tarkka that guides you from idea to published book — and positions it as a strategic business asset. 100+ authors, 100% bestseller success." />

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Authorpreneur — Turn Your Expertise Into a Published Book" />
    <meta property="og:description"
        content="Become a recognized authority and grow your business with a published book. A 6-month program by 11-time bestselling author Mirav Tarkka. 100% bestseller success rate." />
    <meta property="og:image" content="{{ asset('images/authorpreneur.jpeg') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card (for Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Authorpreneur — Turn Your Expertise Into a Published Book" />
    <meta name="twitter:description"
        content="A 6-month high-touch program to write, publish, and position your book as a business asset. Guided by Mirav Tarkka, 11-time bestselling author." />
    <meta name="twitter:image" content="{{ asset('images/authorpreneur.jpeg') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Butler:wght@400;700;900&family=Manrope:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#be9633',
                        'gold-dark': '#8e6f24',
                        'gold-light': '#d4b761',
                        'dark': '#121212',
                        'off-white': '#fdfdfb',
                        'accent-bg': '#f7f7f2',
                    },
                    fontFamily: {
                        'display': ['"Butler"', 'serif'],
                        'body': ['"Manrope"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    @include('front.partials.common.google_analytics')

</head>

<body>

    @include('front.partials.common.navbar', ['hideLogoTitle' => true])
    @include('front.partials.authorprenur.authorprenurcontent')
    @include('front.partials.common.footer', ['hideDescription' => true])


</body>
<script src="{{ asset('assets/js/index.js') }}"></script>

</html>
