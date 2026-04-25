<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Stories — Real Authors, Real Results | Write Naked Method</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/stories.css') }}" />
    <meta name="description"
        content="Hear from 100+ authors who turned their expertise into bestselling books with Write Naked Method by Mirav Tarkka. 100% bestseller success rate — read their stories." />

    <!-- Open Graph -->
    <meta property="og:title" content="Stories — Real Authors, Real Results | Write Naked Method" />
    <meta property="og:description"
        content="100+ authors. 100% bestseller success. Read the stories of authors who transformed their lives with Write Naked Method by Mirav Tarkka." />
    <meta property="og:image" content="{{ asset('images/authorpreneur.jpeg') }}" />
    <meta property="og:url" content="{{ config('app.url') }}/stories" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Stories — Real Authors, Real Results | Write Naked Method" />
    <meta name="twitter:description"
        content="100+ authors. 100% bestseller success. Read the stories of authors who transformed their lives." />
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
    @include('front.partials.common.google_analytics')

</head>

<body class="antialiased font-body text-[#2d2d2d]">

    @include('front.partials.common.navbar', ['hideLogoTitle' => true])

    {{-- ==========================================
    HERO SECTION
    ========================================== --}}
    <section class="mt-16 stories-hero pt-40 pb-24 md:pt-48 md:pb-32 px-6">
        {{-- Sparkle particles --}}
        <div class="st-sparkle hidden lg:block"></div>
        <div class="st-sparkle hidden lg:block"></div>
        <div class="st-sparkle hidden lg:block"></div>
        <div class="st-sparkle hidden lg:block"></div>
        <div class="st-sparkle hidden lg:block"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center">
                {{-- Floating decorative elements --}}
                <div
                    class="absolute top-0 left-10 w-24 h-24 border border-gold/10 rounded-full st-float hidden lg:block">
                </div>
                <div
                    class="absolute bottom-10 right-20 w-16 h-16 border border-gold/10 rounded-full st-float-delay hidden lg:block">
                </div>
                <div
                    class="absolute top-1/2 right-10 w-10 h-10 border border-gold/5 rounded-full st-float hidden lg:block">
                </div>

                <span class="st-separator mx-auto mb-8"></span>
                <span class="inline-block text-gold-light text-[13px] font-extrabold uppercase tracking-[0.4em] mb-8">
                    Testimonials
                </span>
                <h1
                    class="font-display text-5xl md:text-7xl lg:text-[5.5rem] text-white mb-8 tracking-tight leading-[1.05]">
                    Stories That <span class="italic font-normal text-gold-light">Inspire</span>
                </h1>
                <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed mb-12">
                    Every author started exactly where you are now.
                    Here are the voices of those who took the leap — and landed as <strong
                        class="text-gold-light font-semibold">bestsellers</strong>.
                </p>

                {{-- Stats row with glass boxes --}}
                <div class="flex flex-wrap justify-center gap-6 md:gap-10 mt-16">
                    <div class="st-stat-box text-center">
                        <div class="st-stat-number font-display">100+</div>
                        <div class="text-white/50 text-sm uppercase tracking-[0.2em] mt-2">Authors Guided</div>
                    </div>
                    <div class="st-stat-box text-center">
                        <div class="st-stat-number font-display">100%</div>
                        <div class="text-white/50 text-sm uppercase tracking-[0.2em] mt-2">Bestseller Rate</div>
                    </div>
                    <div class="st-stat-box text-center">
                        <div class="st-stat-number font-display">11</div>
                        <div class="text-white/50 text-sm uppercase tracking-[0.2em] mt-2">Mirav's Bestsellers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
    VIDEO STORIES
    ========================================== --}}
    <section class="py-24 md:py-32 bg-off-white px-6 relative">
        <div class="st-section-divider absolute top-0 left-0 right-0"></div>
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-20 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
                <span class="inline-block text-gold text-[12px] font-extrabold uppercase tracking-[0.35em] mb-4">Video
                    Testimonials</span>
                <h2 class="font-display st-section-heading text-4xl md:text-5xl italic text-dark mb-4">Watch Their
                    Stories</h2>
                <p class="text-[#666] text-lg font-light max-w-xl mx-auto">Hear firsthand from authors who transformed
                    their expertise into published bestsellers.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                {{-- Video 1 --}}
                <div class="st-fade-in-left">
                    <div class="st-video-card">
                        <video controls playsinline preload="metadata" poster="">
                            <source src="{{ asset('images/testimonials/BF Bundle STORIES.mp4') }}" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                {{-- Video 2 --}}
                <div class="st-fade-in-right">
                    <div class="st-video-card">
                        <video controls playsinline preload="metadata" poster="">
                            <source src="{{ asset('images/testimonials/BF Bundle STORIES (1).mp4') }}"
                                type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
    FEATURED WRITTEN TESTIMONIAL
    ========================================== --}}
    <section class="py-24 md:py-32 bg-accent-bg px-6 relative">
        <div class="st-section-divider absolute top-0 left-0 right-0"></div>
        <div class="container mx-auto max-w-5xl">

            <div class="text-center mb-20 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
                <span class="inline-block text-gold text-[12px] font-extrabold uppercase tracking-[0.35em] mb-4">In
                    Their Words</span>
                <h2 class="font-display st-section-heading text-4xl md:text-5xl italic text-dark mb-4">Featured Stories
                </h2>
                <p class="text-[#666] text-lg font-light max-w-xl mx-auto">Heartfelt words from authors who experienced
                    the transformation firsthand.</p>
            </div>

            <div class="space-y-10">

                {{-- Testimonial 1 — Wendy --}}
                <div class="st-fade-in">
                    <div class="st-featured-quote">
                        <div class="relative z-10">
                            <h3 class="font-display text-3xl md:text-4xl italic text-dark mb-8 leading-snug">
                                "Her power shots set me up for the day, emotionally and physically."
                            </h3>

                            <div class="space-y-5 text-[#3a3a3a] text-base md:text-[17px] font-light leading-[1.9]">
                                <p>
                                    As a spiritual worker I was well aware that I was not keeping myself as physically
                                    fit
                                    as I would like. I had become aware of general aches and pains and how I was finding
                                    it
                                    difficult to get up off the floor when I had been sat playing with my grandchildren.
                                </p>
                                <p>
                                    I joined a five day challenge with Mirav and discovered the <strong
                                        class="font-semibold text-dark">perfect formula for me</strong>. Her power
                                    shots
                                    set
                                    me up for the day, emotionally and physically. I use the session to check in with my
                                    alignment.
                                </p>
                                <p>
                                    The format of the session is what I love the most. I am never bored. I never know
                                    what
                                    Mirav will come up with next to keep us stimulated and physically fit. I've learnt
                                    face
                                    yoga, eye yoga, Krav Maga, toned my arms, butt and other places, and now look
                                    forward to
                                    the famous 45 second wiggle.
                                </p>
                                <p>
                                    My face and body have both toned up and I feel <strong
                                        class="font-semibold text-dark">physically stronger</strong>. I have met some
                                    lovely
                                    people, and found a way to keep fit that suits me.
                                </p>
                                <p>
                                    I would recommend Mirav's power shots for anyone like myself looking for a <strong
                                        class="font-semibold text-dark">fun and flexible way to keep fit</strong> with
                                    a
                                    bunch of spiritual and likeminded people.
                                </p>
                            </div>

                            <div class="flex items-center gap-4 mt-10">
                                <span class="w-10 h-[2px] bg-gold block"></span>
                                <span class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Wendy
                                    Panther</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Renato & Alina — side by side --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    {{-- Testimonial 2 — Renato --}}
                    <div class="st-fade-in">
                        <div class="st-featured-quote h-full">
                            <div class="relative z-10">
                                <h3 class="font-display text-2xl md:text-3xl italic text-dark mb-6 leading-snug">
                                    "The magic, the sparkling comes from you."
                                </h3>

                                <div
                                    class="space-y-4 text-[#3a3a3a] text-[15px] md:text-base font-light leading-[1.85]">
                                    <p class="font-medium text-dark">Dear Mirav,</p>
                                    <p>
                                        I want to express my gratitude for this beautiful event. The place, food, wine,
                                        moments, everything was beautiful, because Lecce is overwhelming. Italy all it
                                        is. You are such a
                                        <strong class="font-semibold text-dark">professional and inspiration</strong>
                                        and by taking care of every detail you made me feel like home and honored.
                                    </p>
                                    <p>
                                        Sharing with other authors was really nice, because of this you let me discover
                                        a <strong class="font-semibold text-dark">new me as a writer</strong> and have
                                        a vision about how far I can go. I'm looking forward to repeat this deep
                                        experience with you and other writers because the magic, the sparkling comes
                                        from you.
                                    </p>
                                </div>

                                <div class="flex items-center gap-4 mt-8">
                                    <span class="w-10 h-[2px] bg-gold block"></span>
                                    <span
                                        class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Renato</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Testimonial 3 — Alina --}}
                    <div class="st-fade-in">
                        <div class="st-featured-quote h-full">
                            <div class="relative z-10">
                                <h3 class="font-display text-2xl md:text-3xl italic text-dark mb-6 leading-snug">
                                    "The entire process is a transformational experience."
                                </h3>

                                <div
                                    class="space-y-4 text-[#3a3a3a] text-[15px] md:text-base font-light leading-[1.85]">
                                    <p>
                                        If you want to hold your book in your hands, the person you should choose is
                                        <strong class="font-semibold text-dark">Mirav and her bestselling
                                            program</strong>.
                                        Mirav and her team work hard to bring your book to life.
                                    </p>
                                    <p>
                                        The entire process is a transformational experience, from writing your book to
                                        committing to getting published, to designing your vision on the book cover, and
                                        finally seeing it on Amazon as a <strong class="font-semibold text-dark">#1
                                            bestseller</strong>. It's a wonderful feeling of accomplishment and
                                        gratitude for all the people who made this book happen.
                                    </p>
                                    <p>
                                        I've had a lot of help, support and I'm grateful for that. Mirav is successful
                                        because she has made 80 authors bestsellers before me, and now I am one of
                                        those authors. She is going to bring many more authors and books to life.
                                        Remember to <strong class="font-semibold text-dark">be yourself</strong> during
                                        this process and enjoy it. Stay true to your dreams and keep shining!
                                    </p>
                                </div>

                                <div class="flex items-center gap-4 mt-8">
                                    <span class="w-10 h-[2px] bg-gold block"></span>
                                    <span
                                        class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Alina</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>{{-- end grid --}}

            </div>{{-- end space-y --}}
        </div>
    </section>


    {{-- ==========================================
    ACHIEVEMENTS & RECOGNITION
    ========================================== --}}
    <section class="py-24 md:py-32 bg-dark px-6">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
                <h2 class="font-display st-section-heading text-4xl md:text-5xl italic text-white mb-4">Recognition &
                    Achievements</h2>
                <p class="text-white/50 text-lg font-light max-w-xl mx-auto">Awards and milestones from our journey
                    together.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="st-fade-in-left">
                    <div class="st-achievement-card">
                        <img src="{{ asset('images/testimonials/Certificate Mirav.jpg') }}"
                            alt="Certificate of Achievement" loading="lazy" />
                    </div>
                </div>
                <div class="st-fade-in-right">
                    <div class="st-achievement-card">
                        <img src="{{ asset('images/testimonials/Mirav with a medal.jpg') }}" alt="Mirav with a Medal"
                            loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
    TESTIMONIAL GALLERY
    ========================================== --}}
    <section class="st-gallery-section py-24 md:py-32 px-6 relative overflow-hidden">
        <div class="st-section-divider absolute top-0 left-0 right-0"></div>

        {{-- Ambient background glows --}}
        <div
            class="absolute top-0 right-0 w-[700px] h-[700px] bg-gold/[0.04] rounded-full blur-[140px] pointer-events-none -translate-y-1/2 translate-x-1/4">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gold/[0.03] rounded-full blur-[120px] pointer-events-none translate-y-1/3 -translate-x-1/4">
        </div>

        <div class="container mx-auto max-w-[1400px] relative z-10">

            {{-- Section header --}}
            <div class="text-center mb-20 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
                <span class="inline-block text-gold text-[12px] font-extrabold uppercase tracking-[0.35em] mb-5">In
                    Their Own Words</span>
                <h2 class="font-display text-4xl md:text-5xl lg:text-[3.75rem] italic text-dark mb-6 leading-[1.1]">
                    Stories of <em class="st-heading-outline">Transformation</em>
                </h2>
                <p class="text-[#666] text-lg font-light max-w-2xl mx-auto leading-relaxed mb-10">
                    Unfiltered voices from 100+ authors who believed, wrote, and became bestsellers —
                    in their own words, screenshots, and heartfelt messages.
                </p>
                <div
                    class="inline-flex items-center gap-3 px-7 py-3 rounded-full bg-gradient-to-r from-gold/[0.08] to-gold-light/[0.12] border border-gold/20 backdrop-blur-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-gold animate-pulse inline-block"></span>
                    <span class="text-[11px] font-extrabold uppercase tracking-[0.3em] text-gold-dark">40 Author
                        Stories</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gold animate-pulse inline-block"
                        style="animation-delay:.5s"></span>
                </div>
            </div>

            {{-- Masonry Gallery --}}
            <div class="st-masonry-grid" id="testimonialGallery">
                @foreach (range(1, 40) as $i)
                    <div class="st-gallery-item st-fade-in">
                        <div class="st-masonry-card" onclick="openLightbox(this)">
                            <div class="st-masonry-card-inner">
                                <img src="{{ asset('images/testimonials/svg/testimonial-' . $i . '.svg') }}"
                                    alt="Author Testimonial {{ $i }}" loading="lazy" />
                            </div>
                            <div class="st-masonry-zoom-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                    <line x1="11" y1="8" x2="11" y2="14" />
                                    <line x1="8" y1="11" x2="14" y2="11" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>{{-- end masonry grid --}}

        </div>
    </section>


    {{-- ==========================================
    CALL TO ACTION
    ========================================== --}}
    <section class="py-28 md:py-36 bg-dark px-6 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gold/[0.05] rounded-full blur-[120px]"></div>
            <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gold/[0.05] rounded-full blur-[120px]">
            </div>
        </div>

        <div class="container mx-auto max-w-4xl relative z-10 text-center st-fade-in st-cta-glow">
            <span class="st-separator mx-auto mb-8"></span>
            <span class="inline-block text-gold-light text-[12px] font-extrabold uppercase tracking-[0.4em] mb-6">
                Ready to Begin?
            </span>
            <h2 class="font-display st-section-heading text-4xl md:text-5xl lg:text-6xl italic text-white mb-8">
                Your Story Could Be <span class="text-gold-light">Next</span>
            </h2>
            <p class="text-white/60 text-lg md:text-xl font-light max-w-2xl mx-auto mb-14 leading-relaxed">
                Join 100+ authors who turned their expertise into bestselling books.
                The only missing piece is <strong class="text-gold-light font-semibold">you</strong>.
            </p>
            <div class="flex flex-wrap justify-center gap-5">
                <a href="{{ route('front.home.page', 'masterclass') }}"
                    class="inline-block px-12 py-4 bg-gradient-to-r from-gold to-gold-light text-white font-bold text-sm uppercase tracking-[0.15em] rounded-full border-2 border-transparent transition-all duration-500 hover:shadow-[0_8px_30px_rgba(190,150,51,0.4)] hover:scale-105">
                    Start Your Journey
                </a>
                <a href="https://calendly.com/peppercoaching/your-book-my-priority" target="_blank"
                    class="inline-block px-12 py-4 bg-transparent text-white font-bold text-sm uppercase tracking-[0.15em] rounded-full border-2 border-white/20 transition-all duration-500 hover:bg-white hover:text-dark hover:border-white hover:scale-105">
                    Book a Call
                </a>
            </div>
        </div>
    </section>


    @include('front.partials.common.footer', ['hideDescription' => true])


    {{-- ==========================================
    LIGHTBOX
    ========================================== --}}
    <div class="st-lightbox" id="lightbox" onclick="closeLightbox(event)">
        <button class="st-lightbox-close" onclick="closeLightbox(event)">&times;</button>
        <img id="lightboxImg" src="" alt="Testimonial" />
    </div>


    {{-- ==========================================
    SCRIPTS
    ========================================== --}}
    <script>
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const animElements = document.querySelectorAll('.st-fade-in, .st-fade-in-left, .st-fade-in-right');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('st-visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -40px 0px'
            });

            animElements.forEach(el => observer.observe(el));

            // Also observe scale-up elements
            document.querySelectorAll('.st-scale-up').forEach(el => observer.observe(el));
        });

        // Lightbox
        function openLightbox(el) {
            const img = el.querySelector('img');
            if (img) {
                document.getElementById('lightboxImg').src = img.src;
                document.getElementById('lightbox').classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeLightbox(event) {
            if (event.target === document.getElementById('lightbox') ||
                event.target.classList.contains('st-lightbox-close') ||
                event.target.parentElement.classList.contains('st-lightbox-close')) {
                document.getElementById('lightbox').classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.getElementById('lightbox').classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    </script>

</body>
<script src="{{ asset('assets/js/index.js') }}"></script>

</html>
