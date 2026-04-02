<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Flash Sale — Find Your Voice in Just One Week | Write Naked</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/authorprenur.css') }}" />
    <meta name="description"
        content="Flash Sale — A private kickstart session + 7 days of hands-on writing support. Find your voice in just one week. Only €97 for 48 hours." />

    <!-- Open Graph -->
    <meta property="og:title" content="Flash Sale — Find Your Voice in Just One Week" />
    <meta property="og:description"
        content="A private kickstart session + 7 days of hands-on writing support. Only €97 for the next 48 hours." />
    <meta property="og:image" content="{{ asset('images/flash_sale_mirav.jpg') }}" />
    <meta property="og:url" content="{{ config('app.url') }}/flash-sale" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Flash Sale — Find Your Voice in Just One Week" />
    <meta name="twitter:description"
        content="A private kickstart session + 7 days of hands-on writing support. Only €97 for the next 48 hours." />
    <meta name="twitter:image" content="{{ asset('images/flash_sale_mirav.jpg') }}" />

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
                        'warm-cream': '#faf6ef',
                    },
                    fontFamily: {
                        'display': ['"Butler"', 'serif'],
                        'body': ['"Manrope"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .fs-price-strike {
            position: relative;
        }

        .fs-price-strike::after {
            content: '';
            position: absolute;
            left: -4px;
            right: -4px;
            top: 50%;
            height: 2px;
            background: #999;
        }

        .fs-timer-digit {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .fs-feature-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid rgba(190, 150, 51, 0.12);
        }

        .fs-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
            border-color: rgba(190, 150, 51, 0.3);
        }

        .fs-checkmark-circle {
            flex-shrink: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(190, 150, 51, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fs-section-divider {
            width: 60px;
            height: 1px;
            background: linear-gradient(90deg, transparent, #be9633, transparent);
        }

        /* Smooth image reveal */
        .fs-img-wrapper {
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .fs-img-wrapper img {
            transition: transform 0.6s ease;
        }

        .fs-img-wrapper:hover img {
            transform: scale(1.03);
        }
    </style>
</head>

<body class="antialiased text-[#2d2d2d] font-body bg-off-white">

    @include('front.partials.common.navbar', ['hideLogoTitle' => true])

    {{-- ==========================================
         FLASH SALE TOP BANNER
         ========================================== --}}
    {{-- Spacer to push content below the fixed navbar on all viewports --}}
    <div style="height: 70px;" class="sm:h-[72px] md:h-[74px]"></div>

    <div class="relative z-40 text-white"
        style="background: linear-gradient(135deg, #7a6020 0%, #96782a 30%, #a8873a 50%, #96782a 70%, #7a6020 100%);">
        <div class="flex items-center justify-center gap-2 sm:gap-4 px-3 sm:px-4 py-3.5 border-b border-white/10">
            <span class="text-white/90 text-base sm:text-lg hidden sm:inline">&#9889;</span>
            <span
                class="text-[11px] sm:text-sm font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase text-white/90 text-center leading-snug">
                Flash Sale &mdash; 48 Hours Only<br class="sm:hidden"> Price Goes Up When the Timer Hits Zero
            </span>
            <span class="text-white/90 text-base sm:text-lg hidden sm:inline">&#9889;</span>
        </div>
    </div>


    {{-- ==========================================
         HERO — White, clean, centered
         ========================================== --}}
    <section class="relative flex items-center justify-center overflow-hidden bg-white"
        style="min-height: calc(100vh - 102px);">
        {{-- Subtle decorative glow --}}
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-gold/[0.04] rounded-full blur-[150px]">
            </div>
        </div>

        <div class="relative z-10 text-center px-6 py-16 sm:py-20 max-w-4xl mx-auto">
            {{-- Kicker --}}
            <p class="text-gold text-xs sm:text-sm font-bold tracking-[0.3em] uppercase mb-6">
                1-on-1 Kickstart + 1 Week Support
            </p>

            {{-- Main heading --}}
            <h1 class="font-display text-dark text-5xl sm:text-6xl md:text-7xl lg:text-8xl leading-[1.05] mb-6">
                Find Your Voice<br>in Just <span class="italic font-normal text-gold">One Week.</span>
            </h1>

            {{-- Subline --}}
            <p class="text-[#555] text-lg sm:text-xl md:text-2xl font-light max-w-2xl mx-auto mb-8 leading-relaxed">
                A private kickstart session + 7 days of hands-on writing support.
            </p>

            {{-- Price --}}
            <div class="flex items-baseline justify-center gap-4 mb-3">
                <span class="fs-price-strike text-2xl sm:text-3xl text-[#aaa] font-display">&euro;197</span>
                <span class="text-5xl sm:text-6xl font-display font-bold text-dark">&euro;97</span>
            </div>
            <p class="text-[#999] text-sm tracking-wider mb-8">
                One payment &middot; Instant access &middot; Spots strictly limited
            </p>

            {{-- Countdown --}}
            <p class="text-gold-dark text-xs sm:text-sm font-bold tracking-[0.3em] uppercase mb-5">Offer Expires In</p>
            <div class="flex items-center justify-center gap-3 sm:gap-4 mb-10">
                <div class="text-center">
                    <div class="rounded-xl px-4 sm:px-6 py-3 sm:py-4 min-w-[70px] sm:min-w-[90px] bg-dark">
                        <span class="text-white text-3xl sm:text-5xl font-bold font-display" id="fsHours">47</span>
                    </div>
                    <span class="text-[#999] text-[11px] sm:text-xs uppercase tracking-[0.2em] mt-2 block">Hours</span>
                </div>
                <span class="text-gold text-2xl sm:text-3xl font-light -mt-5">:</span>
                <div class="text-center">
                    <div class="rounded-xl px-4 sm:px-6 py-3 sm:py-4 min-w-[70px] sm:min-w-[90px] bg-dark">
                        <span class="text-white text-3xl sm:text-5xl font-bold font-display" id="fsMinutes">59</span>
                    </div>
                    <span class="text-[#999] text-[11px] sm:text-xs uppercase tracking-[0.2em] mt-2 block">Min</span>
                </div>
                <span class="text-gold text-2xl sm:text-3xl font-light -mt-5">:</span>
                <div class="text-center">
                    <div class="rounded-xl px-4 sm:px-6 py-3 sm:py-4 min-w-[70px] sm:min-w-[90px] bg-dark">
                        <span class="text-white text-3xl sm:text-5xl font-bold font-display" id="fsSeconds">59</span>
                    </div>
                    <span class="text-[#999] text-[11px] sm:text-xs uppercase tracking-[0.2em] mt-2 block">Sec</span>
                </div>
            </div>

            {{-- CTA --}}
            <a href="mailto:hello@writenakeditaly.com?subject=Flash%20Sale%20Booking&body=Hi!%20I'd%20like%20to%20book%20the%20flash%20sale%20package%20at%20%E2%82%AC97."
                class="inline-block bg-gold hover:bg-gold-dark text-white font-bold text-sm sm:text-base tracking-[0.15em] uppercase px-10 sm:px-14 py-4 sm:py-5 rounded-sm transition-all duration-300 shadow-lg shadow-gold/20 hover:shadow-gold/30">
                Yes &mdash; I Want This for &euro;97 &rarr;
            </a>
            <p class="text-[#999] text-xs sm:text-sm mt-5 tracking-wide">
                Secure checkout &middot; 100% satisfaction or your money back
            </p>
        </div>
    </section>


    {{-- ==========================================
         ONLINE SESSION TO KICK-START YOUR WRITING
         ========================================== --}}
    <div class="relative">
        <img src="{{ asset('images/flash_sale_mirav.jpg') }}"
            alt="Mirav and writers gathered around a rustic Italian kitchen table" loading="lazy"
            class="w-full h-[400px] md:h-[480px] object-cover" />
        <div class="absolute inset-0 bg-gradient-to-r from-dark/75 via-dark/50 to-dark/30"></div>
        <div class="absolute inset-0 flex items-center overflow-hidden">
            <div class="max-w-5xl mx-auto px-6 lg:px-12 w-full">
                <div class="max-w-xl">
                    <div class="w-12 h-[2px] bg-gold mb-6"></div>
                    <h2 class="font-display text-4xl md:text-5xl lg:text-[3.2rem] text-white leading-[1.12] mb-5">
                        Online Session to Kick-Start<br>
                        <span class="italic font-normal text-gold-light">your Writing</span>
                    </h2>
                    <p class="text-gray-300 text-lg md:text-xl font-light leading-relaxed max-w-lg">
                        From your kitchen table to ours &mdash; intimate, focused, transformative.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- ==========================================
         WHAT'S INSIDE — 3 feature cards
         ========================================== --}}
    <section class="py-16 md:py-20 bg-off-white relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-[400px] h-[400px] bg-gold/[0.03] rounded-full blur-[120px]"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-10 ap-fade-in">
                <div class="fs-section-divider mx-auto mb-6"></div>
                <h2 class="font-display text-4xl md:text-5xl text-dark">What's Inside</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-10 ap-stagger">
                @php
                    $features = [
                        [
                            'num' => '01',
                            'title' => '1-on-1 Kickstart Session',
                            'desc' =>
                                'A 60-minute deep dive into your writing — your voice, your goals, your blocks. Together we build your personal writing plan.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />',
                        ],
                        [
                            'num' => '02',
                            'title' => '1 Week Personal Support',
                            'desc' =>
                                '7 days direct access to me. Send drafts, ask questions, get unstuck. Real feedback, real fast — no waiting, no ghosting.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Your Writing Toolkit',
                            'desc' =>
                                'Custom frameworks for your books, articles, captions and posts — so you always know what to write and how to start.',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />',
                        ],
                    ];
                @endphp

                @foreach ($features as $f)
                    <div class="fs-feature-card bg-white rounded-xl p-8 lg:p-10 text-center ap-fade-in">
                        <div
                            class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-gold/10 text-gold mb-5">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5">{!! $f['icon'] !!}</svg>
                        </div>
                        <span
                            class="block text-gold text-xs font-bold tracking-[0.3em] mb-3">{{ $f['num'] }}</span>
                        <h3 class="font-bold text-base uppercase tracking-wider mb-4 text-dark">{{ $f['title'] }}
                        </h3>
                        <p class="text-[#666] font-light text-[15px] leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==========================================
         MEET YOUR WRITING PARTNER
         ========================================== --}}
    <section class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-gold/[0.03] rounded-full blur-[140px] -translate-y-1/2 translate-x-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-warm-cream rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3">
        </div>

        <div class="max-w-4xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center ap-fade-in">
                <div class="fs-section-divider mx-auto mb-6"></div>
                <span class="block text-gold text-xs sm:text-sm font-bold tracking-[0.3em] uppercase mb-5">
                    Meet Your Writing Partner
                </span>
                <p class="text-[#444] text-lg md:text-xl font-light leading-[1.9] max-w-2xl mx-auto mb-8">
                    I'm Mirav &mdash; writing coach, author, and the founder of Write Naked Italy.
                    I've helped hundreds of writers find their voice, finish their manuscripts,
                    and finally write like themselves.
                    <strong class="font-semibold text-dark">I don't teach formulas. I teach you to trust your own
                        words.</strong>
                </p>

                <div
                    class="inline-block bg-accent-bg rounded-xl px-8 py-6 border-l-4 border-gold text-left max-w-lg shadow-sm">
                    <p class="text-dark text-lg md:text-xl font-display italic leading-relaxed">
                        No 6-week programme you'll never finish.<br>
                        <span class="text-gold">Just you, me, and seven days of real work.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         THIS IS FOR YOU IF…
         ========================================== --}}
    <section class="py-16 md:py-20 bg-warm-cream relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-10 ap-fade-in">
                <div class="fs-section-divider mx-auto mb-6"></div>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl text-dark leading-[1.15] mb-6">
                    You have something real to say<br>
                    <span class="italic font-normal text-gold">but the words keep disappearing.</span>
                </h2>
                <p class="text-[#555] text-lg md:text-xl font-light leading-relaxed max-w-2xl mx-auto">
                    You're sitting down to write &mdash; a caption, a chapter opener, a bio &mdash;
                    and it all comes out flat. Stiff. Like someone else.
                </p>
            </div>

            <div class="max-w-2xl mx-auto space-y-4 ap-stagger">
                @foreach (['You\'re writing for social media but nothing feels authentic', 'You have a book or article idea but don\'t know where to start', 'You want your writing to sound like you — not a template', 'You need someone in your corner for a week, not just one hour', 'You want results fast — not a 6-week course you\'ll never finish'] as $item)
                    <div
                        class="flex items-center gap-4 bg-white rounded-lg px-6 py-4 shadow-sm border border-gray-100 ap-fade-in">
                        <div class="fs-checkmark-circle">
                            <svg class="w-4 h-4 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span
                            class="text-[#333] text-base sm:text-lg font-medium leading-snug">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==========================================
         MAJOR DRAMATIC QUESTION
         ========================================== --}}
    <div class="relative">
        <img src="{{ asset('images/what_is_your_story.jpg') }}"
            alt="Open vintage notebook with story notes — what is your major dramatic question?" loading="lazy"
            class="w-full h-[400px] md:h-[480px] object-cover" />
        <div class="absolute inset-0 bg-dark/50"></div>
        <div class="absolute inset-0 flex items-center overflow-hidden">
            <div class="max-w-5xl mx-auto px-6 lg:px-12 w-full">
                <div class="max-w-xl text-left md:ml-auto md:text-right">
                    <div class="w-12 h-[2px] bg-gold-light mb-6 md:ml-auto"></div>
                    <span class="block text-gold-light text-xs sm:text-sm font-bold tracking-[0.3em] uppercase mb-5">
                        The Heart of Your Story
                    </span>
                    <h2 class="font-display text-4xl md:text-5xl lg:text-[3.2rem] text-white leading-[1.12] mb-6">
                        What Is Your Story's<br>
                        <span class="italic font-normal text-gold-light">Major Dramatic Question?</span>
                    </h2>
                    <p class="text-gray-300 text-lg md:text-xl font-light leading-[1.9] max-w-lg md:ml-auto">
                        Every great piece of writing is driven by one burning question.
                        We'll find yours &mdash; and build your writing around it.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- ==========================================
         WHAT PEOPLE SAY
         ========================================== --}}
    <section class="py-16 md:py-20 bg-warm-cream/50 relative overflow-hidden">
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gold/[0.04] rounded-full blur-[120px]">
        </div>

        <div class="max-w-3xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-10 ap-fade-in">
                <div class="fs-section-divider mx-auto mb-6"></div>
                <h2 class="font-display text-4xl md:text-5xl text-dark">What People Say</h2>
            </div>

            <div class="ap-fade-in">
                <div
                    class="relative bg-white rounded-2xl p-10 md:p-14 text-center shadow-lg shadow-black/[0.04] border border-gold/[0.08]">
                    {{-- Decorative quote --}}
                    <div
                        class="absolute -top-5 left-1/2 -translate-x-1/2 w-12 h-12 bg-gold rounded-full flex items-center justify-center shadow-lg shadow-gold/20">
                        <span class="text-white text-2xl font-bold leading-none"
                            style="margin-top: -2px;">&ldquo;</span>
                    </div>

                    <p class="text-dark text-lg md:text-xl lg:text-2xl font-display italic leading-relaxed mb-8 mt-4">
                        &ldquo;After one session I finally understood what my writing was missing.
                        That week of support changed how I write everything &mdash; posts, emails,
                        my whole book proposal.&rdquo;
                    </p>

                    <div class="w-10 h-[1px] bg-gold mx-auto mb-4"></div>
                    <p class="text-gold-dark text-sm font-bold tracking-[0.25em] uppercase">
                        &mdash; Past Client, Amsterdam
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         CTA / GRAB THE DEAL
         ========================================== --}}
    <section class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-[350px] h-[350px] bg-gold/[0.04] rounded-full blur-[120px]"></div>

        <div class="max-w-3xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center ap-fade-in">
                <div class="fs-section-divider mx-auto mb-6"></div>
                <span class="block text-gold text-xs sm:text-sm font-bold tracking-[0.3em] uppercase mb-4">
                    Grab the Deal
                </span>

                <h2 class="font-display text-4xl md:text-5xl text-dark leading-[1.12] mb-5">
                    Your Kickstart<br>
                    <span class="italic font-normal text-gold">starts now.</span>
                </h2>

                <p class="text-[#555] text-lg md:text-xl font-light leading-relaxed max-w-xl mx-auto mb-8">
                    One session. One week of support. Your writing, finally unlocked.<br>
                    <strong class="font-semibold text-dark">Only &euro;97 &mdash; for the next 48 hours.</strong>
                </p>

                {{-- Pricing Card --}}
                <div
                    class="bg-white rounded-2xl p-10 md:p-14 shadow-xl shadow-gold/[0.08] max-w-md mx-auto mb-10 border border-gold/15 relative overflow-hidden">
                    {{-- Subtle gold accent at top --}}
                    <div class="absolute top-0 left-0 right-0 h-1"
                        style="background: linear-gradient(90deg, transparent, #be9633, transparent);"></div>
                    <div class="flex items-baseline justify-center gap-4 mb-3">
                        <span class="fs-price-strike text-2xl text-gray-400 font-display">&euro;197</span>
                        <span class="text-6xl font-display font-bold text-dark">&euro;97</span>
                    </div>
                    <p class="text-[#999] text-sm mb-8">One-time &middot; No subscription &middot; Instant booking</p>

                    <a href="mailto:hello@writenakeditaly.com?subject=Flash%20Sale%20Booking&body=Hi!%20I'd%20like%20to%20book%20the%20flash%20sale%20package%20at%20%E2%82%AC97."
                        class="block w-full bg-gold hover:bg-gold-dark text-white font-bold text-sm tracking-[0.15em] uppercase px-8 py-4 rounded-sm transition-all duration-300 text-center">
                        Book My Spot Now &mdash; &euro;97 &rarr;
                    </a>

                    <p class="text-[#999] text-sm mt-5">
                        Or DM on
                        <a href="https://www.instagram.com/miravtarkka/" target="_blank"
                            class="text-gold hover:text-gold-dark underline">Instagram</a>
                        &middot; Price resets in 48 hours
                    </p>
                </div>

                <p class="text-[#666] text-base font-light leading-relaxed max-w-lg mx-auto">
                    After 48 hours the price goes back to <strong
                        class="font-semibold text-dark">&euro;197</strong>.<br>
                    Your writing project has been waiting long enough.
                </p>
            </div>
        </div>
    </section>


    @include('front.partials.common.footer', ['hideDescription' => true])

</body>

{{-- Countdown Timer --}}
<script>
    (function() {
        const FS_KEY = 'fs_countdown_end';
        let endTime = localStorage.getItem(FS_KEY);

        if (!endTime) {
            endTime = Date.now() + 48 * 60 * 60 * 1000;
            localStorage.setItem(FS_KEY, endTime);
        } else {
            endTime = parseInt(endTime, 10);
        }

        function pad(n) {
            return n < 10 ? '0' + n : n;
        }

        function tick() {
            const now = Date.now();
            let diff = Math.max(0, endTime - now);
            const h = Math.floor(diff / 3600000);
            diff -= h * 3600000;
            const m = Math.floor(diff / 60000);
            diff -= m * 60000;
            const s = Math.floor(diff / 1000);
            document.getElementById('fsHours').textContent = pad(h);
            document.getElementById('fsMinutes').textContent = pad(m);
            document.getElementById('fsSeconds').textContent = pad(s);
        }

        tick();
        setInterval(tick, 1000);
    })();
</script>

{{-- Scroll animations --}}
<script src="{{ asset('assets/js/index.js') }}"></script>
<script>
    (function() {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('ap-visible');
                    obs.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.ap-fade-in, .ap-fade-in-left, .ap-fade-in-right').forEach(el => obs.observe(
            el));
    })();
</script>

</html>
