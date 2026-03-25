{{-- ============================================
     ABOUT — Mirav Tarkka
     Parent: front.about
     ============================================ --}}

<div class="antialiased text-[#2d2d2d]">

    {{-- ==========================================
         HERO
         ========================================== --}}
    <section class="relative mt-16 sm:mt-0 pt-40 pb-28 md:pt-32 md:pb-36 px-6 overflow-hidden bg-off-white">
        {{-- Decorative glows --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gold/[0.04] rounded-full blur-[100px]"></div>
            <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gold/[0.04] rounded-full blur-[100px]"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10 mt-0 md:mt-[70px] xl:mt-0">
            <div class="flex flex-col lg:flex-row items-center gap-14 xl:gap-24">

                {{-- Left: Image --}}
                <div class="w-full lg:w-5/12 ap-fade-in-left">
                    <div class="relative">
                        <div class="absolute top-6 left-6 right-0 bottom-0 bg-gold/15 rounded-lg blur-[2px]"></div>
                        <img src="{{ asset('images/mirav_about.jpg') }}"
                            alt="Mirav Tarkka — 11-Time Bestselling Author & The Bestseller Maker"
                            class="relative w-full h-auto rounded-lg shadow-2xl border border-gold/10 object-cover">
                    </div>

                    {{-- Social Links --}}
                    <div class="flex items-center justify-center gap-5 mt-8">
                        {{-- Facebook --}}
                        <a href="https://www.facebook.com/mirav.tarkka" target="_blank" rel="noopener noreferrer"
                            aria-label="Facebook"
                            class="w-11 h-11 rounded-full border border-gold/20 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/miravtarkka" target="_blank" rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="w-11 h-11 rounded-full border border-gold/20 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/in/miravtarkkabestsellermaker/" target="_blank"
                            rel="noopener noreferrer" aria-label="LinkedIn"
                            class="w-11 h-11 rounded-full border border-gold/20 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        {{-- Amazon Author --}}
                        <a href="https://www.amazon.com/author/miravtarkka" target="_blank" rel="noopener noreferrer"
                            aria-label="Amazon Author Page"
                            class="w-11 h-11 rounded-full border border-gold/20 flex items-center justify-center text-gold hover:bg-gold hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Right: Intro --}}
                <div class="w-full lg:w-7/12 text-center lg:text-left ap-fade-in-right">
                    <span class="ap-separator mb-8 lg:mx-0 mx-auto"></span>
                    <span
                        class="inline-block text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.4em] mb-6">
                        The Bestseller Maker
                    </span>
                    <h1 class="ap-luxury-heading text-4xl md:text-5xl lg:text-[4rem] xl:text-[4.5rem] mb-10 text-dark">
                        About <span class="italic font-normal">Mirav Tarkka</span>
                    </h1>
                    <p class="text-[#3a3a3a] text-lg md:text-xl max-w-2xl font-light leading-[1.85] lg:mx-0 mx-auto">
                        Mirav Tarkka is an <strong class="font-semibold text-dark">11 times international bestselling
                            author</strong>
                        and publisher, elite book producer, book project manager and publisher, widely known as
                        <strong class="font-semibold text-dark">The Bestseller Maker</strong>.

                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         THE JOURNEY
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-5xl">
            <div class="ap-fade-in">
                <span class="ap-separator mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl mb-12 italic text-dark">A Journey of Resilience</h2>

                <div class="space-y-8 text-[#3a3a3a] font-light leading-[1.85] text-lg">
                    <p>
                        Her work is shaped by a <strong class="font-semibold text-dark">profound personal journey of
                            resilience
                            and transformation</strong>. After navigating significant life challenges that required her
                        to break
                        down in order to break through, Mirav turned her lived experience into purpose. Her first book
                        emerged
                        from this journey, and within a single year she went on to write and publish
                        <strong class="font-semibold text-dark">6 bestselling books</strong>, inspiring readers
                        worldwide with
                        messages of wellness, love, self-care, empowerment, and determination.
                    </p>
                    <p>
                        Drawing on her background as an <strong class="font-semibold text-dark">IDF Operational
                            Sergeant</strong>
                        and her international career in self-defense instruction, Mirav developed unique, results-driven
                        methods
                        that allow authors to write their books rapidly while staying deeply connected to body, mind,
                        and soul.
                        Her approach combines <strong class="font-semibold text-dark">focus, energy, structure, and
                            emotional
                            truth</strong>, creating an environment where powerful stories are written efficiently and
                        authentically.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         100+ AUTHORS — STATS HIGHLIGHT
         ========================================== --}}
    <section class="py-28 overflow-hidden relative"
        style="background: linear-gradient(135deg, #fdfdfb 0%, #f7f0e0 40%, #f5edd6 70%, #f7f7f2 100%);">
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-[0.07] pointer-events-none select-none overflow-hidden">
            <span class="text-[16rem] font-display italic text-gold leading-none block -mt-10">100+</span>
        </div>
        <div class="absolute -top-20 -left-20 w-[400px] h-[400px] bg-gold/[0.06] rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-20 -right-20 w-[300px] h-[300px] bg-gold/[0.04] rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-8 max-w-5xl relative z-10">
            <div class="ap-fade-in">
                <div class="text-center mb-16">
                    <span class="ap-separator mx-auto mb-6"></span>
                    <h2 class="ap-luxury-heading text-4xl md:text-5xl mb-6 text-dark">
                        100% <span class="italic font-normal">Bestseller</span> Success Rate
                    </h2>
                </div>

                <div class="space-y-8 text-[#3a3a3a] font-light leading-[1.85] text-lg max-w-4xl mx-auto">
                    <p>
                        Mirav has guided over <strong class="font-semibold text-dark">100 authors</strong> from around
                        the world,
                        across all genres and multiple languages. Her clients include celebrities, successful
                        entrepreneurs, leaders
                        and first-time authors alike. With a commitment to simplicity, speed, and excitement, she has
                        achieved a
                        <strong class="font-semibold text-dark">100% success rate</strong> in guiding her authors to
                        number one
                        international bestseller status, many of them multiple times, in multiple markets.
                    </p>
                </div>

                {{-- Stats grid --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 ap-stagger">
                    @foreach ([['num' => '100+', 'label' => 'Authors Guided'], ['num' => '100%', 'label' => 'Bestseller Rate'], ['num' => '11x', 'label' => 'Bestselling Author'], ['num' => '4', 'label' => 'Languages Proficient']] as $stat)
                        <div
                            class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-lg border border-gold/10 shadow-sm ap-fade-in">
                            <div class="text-gold ap-luxury-heading text-4xl md:text-5xl mb-2">{{ $stat['num'] }}</div>
                            <div class="text-[#5a5a5a] text-sm font-medium uppercase tracking-[0.15em]">
                                {{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         THE WRITE NAKED METHOD
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-5xl">
            <div class="ap-fade-in">
                <span class="ap-separator mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl mb-12 italic text-dark">
                    The Write Naked Method&trade;
                </h2>

                <div class="space-y-8 text-[#3a3a3a] font-light leading-[1.85] text-lg">
                    <p>
                        At the core of her work is the <strong class="font-semibold text-dark">Write Naked
                            Method&trade;</strong>,
                        founded on the value of authenticity. Through this approach, authors are supported in writing
                        <strong class="font-semibold text-dark">soul-led, raw, and bold books</strong> that tell their
                        truth,
                        whether in fiction, business, or self-help. The result is distinctive voice-driven work that
                        creates
                        powerful impact, visibility, and long-term personal branding.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         RECOGNITION & ACHIEVEMENTS
         ========================================== --}}
    <section class="py-28 bg-accent-bg">
        <div class="container mx-auto px-8 max-w-6xl">
            <div class="text-center mb-16 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl italic text-dark">Recognition &amp; Achievements</h2>
            </div>

            <div class="ap-fade-in max-w-4xl mx-auto mb-16">
                <p class="text-[#3a3a3a] font-light leading-[1.85] text-lg text-center">
                    Many of Mirav's personal books and her clients' books have received
                    <strong class="font-semibold text-dark">national and international awards</strong>, including
                    <strong class="font-semibold text-dark">two world records</strong> for her multi-author projects.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 ap-stagger">
                @foreach ([
        [
            'icon' =>
                '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25c0 .621.504 1.125 1.125 1.125M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" /></svg>',
            'text' => 'Netflix adaptations',
        ],
        ['icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" /></svg>', 'text' => 'TV appearances alongside Jack Canfield'],
        ['icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0016.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a6.003 6.003 0 01-5.54 0" /></svg>', 'text' => 'Hollywood Oscar-related recognition'],
        ['icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" /></svg>', 'text' => 'Parliamentary awards'],
        ['icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" /></svg>', 'text' => 'TEDx talks &amp; international stages'],
        ['icon' => '<svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>', 'text' => 'Two world records'],
    ] as $item)
                    <div class="ap-fade-in group">
                        <div
                            class="bg-white rounded-lg p-8 border border-gold/10 shadow-sm hover:shadow-lg hover:border-gold/25 transition-all duration-500 h-full flex items-start gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-full bg-gold/10 text-gold flex items-center justify-center group-hover:bg-gold/20 transition-colors duration-300">
                                {!! $item['icon'] !!}
                            </div>
                            <p class="text-dark font-medium text-lg leading-relaxed pt-3">{!! $item['text'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==========================================
         SELF-PUBLISHING & PASSION
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-5xl">
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-20">

                {{-- Left: Self-Publishing --}}
                <div class="ap-fade-in-left">
                    <span class="ap-separator mb-6"></span>
                    <h2 class="ap-luxury-heading text-3xl md:text-4xl mb-8 italic text-dark">Self-Publishing Expert
                    </h2>
                    <div class="space-y-6 text-[#3a3a3a] font-light leading-[1.85] text-lg">
                        <p>
                            Recognized as a <strong class="font-semibold text-dark">leading expert in
                                self-publishing</strong>,
                            Mirav guides her authors to retain full control of their intellectual property while earning
                            <strong class="font-semibold text-dark">one hundred percent royalties</strong>. She speaks
                            four
                            languages and works with clients globally.
                        </p>
                    </div>
                </div>

                {{-- Right: Passion --}}
                <div class="ap-fade-in-right">
                    <span class="ap-separator mb-6"></span>
                    <h2 class="ap-luxury-heading text-3xl md:text-4xl mb-8 italic text-dark">Her Greatest Passion</h2>
                    <div class="space-y-6 text-[#3a3a3a] font-light leading-[1.85] text-lg">
                        <p>
                            Her greatest passion lies in <strong class="font-semibold text-dark">one-on-one retreats
                                and
                                in-person events</strong>, where presence and live energy play a fundamental role in
                            refining
                            a message that resonates deeply and connects with hearts around the world.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         MOTTO / CLOSING CTA
         ========================================== --}}
    <section class="py-36 text-center overflow-hidden relative"
        style="background: linear-gradient(135deg, #fdfdfb 0%, #f7f0e0 40%, #f5edd6 70%, #f7f7f2 100%);">
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gold/[0.05] rounded-full blur-[120px]">
            </div>
        </div>
        <div class="container mx-auto px-8 relative z-10 ap-fade-in">
            <span class="ap-separator mx-auto mb-8"></span>
            <span class="text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.3em] mb-8 block">Her
                Motto</span>
            <h2 class="ap-luxury-heading text-4xl md:text-6xl lg:text-7xl mb-6 text-dark leading-tight">
                Own your story.<br>
                Own your voice.<br>
                <span class="italic font-normal text-gold">Own your power.</span>
            </h2>
        </div>
    </section>

</div>


{{-- ==========================================
     Scroll Animation Observer
     ========================================== --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ap-visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('.ap-fade-in, .ap-fade-in-left, .ap-fade-in-right').forEach(function(el) {
            observer.observe(el);
        });
    });
</script>
