<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Mirav Tarkka — The Bestseller Maker | Write Naked Method</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/authorprenur.css') }}" />
    <meta name="description"
        content="Meet Mirav Tarkka — 11-time international bestselling author, elite book producer, and The Bestseller Maker. Creator of the Write Naked Method with a 100% bestseller success rate guiding 100+ authors worldwide." />

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="About Mirav Tarkka — The Bestseller Maker" />
    <meta property="og:description"
        content="11-time bestselling author and creator of the Write Naked Method. Mirav has guided 100+ authors to #1 bestseller status with a 100% success rate." />
    <meta property="og:image" content="{{ asset('images/mirav_about.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card (for Twitter/X) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Mirav Tarkka — The Bestseller Maker" />
    <meta name="twitter:description"
        content="11-time bestselling author, elite book producer, and creator of the Write Naked Method. 100+ authors guided to #1 bestseller status." />
    <meta name="twitter:image" content="{{ asset('images/mirav_about.jpg') }}" />

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
    @include('front.partials.about.content')
    @include('front.partials.common.footer', ['hideDescription' => true])

</body>


</html>
