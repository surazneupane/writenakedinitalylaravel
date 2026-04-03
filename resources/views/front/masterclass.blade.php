<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LFG Publish — Free Masterclass | From Idea to Published Book</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/authorprenur.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/masterclass.css') }}" />
    <meta name="description"
        content="Free Masterclass — From Idea to Published Book. Step into the identity of a bestselling author with the Write Naked method by Mirav Tarkka." />

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="LFG Publish — Free Masterclass | From Idea to Published Book" />
    <meta property="og:description"
        content="Free Masterclass for those ready to become bestselling authors. Experience the Write Naked method, write your first raw page, and learn the path from idea to Amazon." />
    <meta property="og:image" content="{{ asset('images/LFG.png') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card (for Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="LFG Publish — Free Masterclass | From Idea to Published Book" />
    <meta name="twitter:description"
        content="Free Masterclass for those ready to become bestselling authors. Experience the Write Naked method and learn the path from idea to Amazon." />
    <meta name="twitter:image" content="{{ asset('images/LFG.png') }}" />

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
    @include('front.partials.masterclass.home')
    @include('front.partials.common.footer', ['hideDescription' => true])

</body>

<script src="{{ asset('assets/js/index.js') }}"></script>

</html>
