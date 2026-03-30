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
</head>

<body class="antialiased font-body text-[#2d2d2d]">

    @include('front.partials.common.navbar', ['hideLogoTitle' => true])

    {{-- ==========================================
         HERO SECTION
         ========================================== --}}
    <section class="mt-16 stories-hero pt-40 pb-24 md:pt-48 md:pb-32 px-6">
        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="text-center">
                {{-- Floating decorative elements --}}
                <div
                    class="absolute top-0 left-10 w-20 h-20 border border-gold/10 rounded-full st-float hidden lg:block">
                </div>
                <div
                    class="absolute bottom-10 right-20 w-14 h-14 border border-gold/10 rounded-full st-float-delay hidden lg:block">
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

                {{-- Stats row --}}
                <div class="flex flex-wrap justify-center gap-8 md:gap-16 mt-16">
                    <div class="text-center">
                        <div class="st-stat-number font-display">100+</div>
                        <div class="text-white/50 text-sm uppercase tracking-[0.2em] mt-2">Authors Guided</div>
                    </div>
                    <div class="text-center">
                        <div class="st-stat-number font-display">100%</div>
                        <div class="text-white/50 text-sm uppercase tracking-[0.2em] mt-2">Bestseller Rate</div>
                    </div>
                    <div class="text-center">
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
    <section class="py-24 md:py-32 bg-off-white px-6">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
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
    <section class="py-24 md:py-32 bg-accent-bg px-6">
        <div class="container mx-auto max-w-5xl">
            <div class="st-fade-in">
                <div class="st-featured-quote">
                    <div class="relative z-10">
                        <span
                            class="inline-block text-gold-dark text-[12px] font-extrabold uppercase tracking-[0.3em] mb-6">Featured
                            Story</span>

                        <h3 class="font-display text-3xl md:text-4xl italic text-dark mb-8 leading-snug">
                            "Her power shots set me up for the day, emotionally and physically."
                        </h3>

                        <div class="space-y-5 text-[#3a3a3a] text-base md:text-[17px] font-light leading-[1.9]">
                            <p>
                                As a spiritual worker I was well aware that I was not keeping myself as physically fit
                                as I would like. I had become aware of general aches and pains and how I was finding it
                                difficult to get up off the floor when I had been sat playing with my grandchildren.
                            </p>
                            <p>
                                I joined a five day challenge with Mirav and discovered the <strong
                                    class="font-semibold text-dark">perfect formula for me</strong>. Her power shots set
                                me up for the day, emotionally and physically. I use the session to check in with my
                                alignment.
                            </p>
                            <p>
                                The format of the session is what I love the most. I am never bored. I never know what
                                Mirav will come up with next to keep us stimulated and physically fit. I've learnt face
                                yoga, eye yoga, Krav Maga, toned my arms, butt and other places, and now look forward to
                                the famous 45 second wiggle.
                            </p>
                            <p>
                                My face and body have both toned up and I feel <strong
                                    class="font-semibold text-dark">physically stronger</strong>. I have met some lovely
                                people, and found a way to keep fit that suits me.
                            </p>
                            <p>
                                I would recommend Mirav's power shots for anyone like myself looking for a <strong
                                    class="font-semibold text-dark">fun and flexible way to keep fit</strong> with a
                                bunch of spiritual and likeminded people.
                            </p>
                        </div>

                        {{-- Author --}}
                        <div class="flex items-center gap-4 mt-10">
                            <span class="w-10 h-[2px] bg-gold block"></span>
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Wendy
                                Panther</span>
                        </div>
                    </div>
                </div>
            </div>
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
         TESTIMONIAL GALLERY — Written Testimonials
         ========================================== --}}
    <section class="py-24 md:py-32 bg-off-white px-6">
        <div class="container mx-auto max-w-7xl">
            <div class="text-center mb-16 st-fade-in">
                <span class="st-separator mx-auto mb-6"></span>
                <h2 class="font-display st-section-heading text-4xl md:text-5xl italic text-dark mb-4">In Their Own
                    Words</h2>
                <p class="text-[#666] text-lg font-light max-w-xl mx-auto">Unfiltered testimonials from our authors —
                    screenshots, messages, and heartfelt notes.</p>
            </div>

            {{-- Filter Tabs --}}
            <div class="flex flex-wrap justify-center gap-3 mb-12 st-fade-in">
                <button class="st-tab active" data-filter="all">All</button>
                <button class="st-tab" data-filter="written">Written</button>
                <button class="st-tab" data-filter="message">Messages</button>
                <button class="st-tab" data-filter="author">Authors</button>
            </div>

            {{-- Masonry Gallery --}}
            <div class="st-masonry st-stagger" id="testimonialGallery">

                {{-- Written testimonial screenshots --}}
                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Carlo-eng.jpg') }}" alt="Carlo's Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Aubrey.jpg') }}" alt="Aubrey" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Aubrey</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Nicola-eng.jpg') }}" alt="Nicola's Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Beverley.jpg') }}" alt="Beverley" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Beverley</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Vince-eng.jpg') }}" alt="Vince's Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Eva.jpg') }}" alt="Eva" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Eva</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Elena (1).jpg') }}" alt="Elena's Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Heidi.jpg') }}" alt="Heidi" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Heidi</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Cristina (1).jpg') }}" alt="Cristina's Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/James.jpg') }}" alt="James" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">James</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/17.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Jane.jpg') }}" alt="Jane" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Jane</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/18.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Jasjit.jpg') }}" alt="Jasjit" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Jasjit</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/19.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Jola.jpg') }}" alt="Jola" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Jola</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/46.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Martina (1).jpg') }}" alt="Martina"
                            loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Martina</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/47.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Martine.jpg') }}" alt="Martine" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Martine</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/48.jpg') }}" alt="Author Testimonial"
                            loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Natalia.jpg') }}" alt="Natalia" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Natalia</span>
                        </div>
                    </div>
                </div>

                {{-- Messages / WhatsApp --}}
                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-24 at 12.00.53.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Nicole.jpg') }}" alt="Nicole" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Nicole</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-24 at 12.00.54.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Nina.jpg') }}" alt="Nina" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Nina</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-24 at 12.00.53 (1).jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Pauline.jpg') }}" alt="Pauline" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Pauline</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-25 at 12.16.18.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Shalini.jpg') }}" alt="Shalini" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Shalini</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-26 at 12.18.57.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Emelle.jpg') }}" alt="Emelle" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Emelle</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2024-02-24 at 12.41.15.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Sarah.jpg') }}" alt="Sarah" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Sarah</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2023-11-20 at 17.04.09.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Yoel.jpg') }}" alt="Yoel" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Yoel</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2023-11-20 at 17.04.09 (1).jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/jana.jpg') }}" alt="Jana" loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Jana</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="message">
                    <div class="st-whatsapp-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/WhatsApp Image 2023-11-21 at 17.48.31.jpeg') }}"
                            alt="WhatsApp Testimonial" loading="lazy" />
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="written">
                    <div class="st-testimonial-img" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/331136248_527223442861998_8458549661641420274_n.jpg') }}"
                            alt="Testimonial" loading="lazy" />
                    </div>
                </div>

                {{-- Remaining authors --}}
                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Sarah-Fast.jpg') }}" alt="Sarah Fast"
                            loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Sarah Fast</span>
                        </div>
                    </div>
                </div>

                <div class="st-gallery-item st-fade-in" data-category="author">
                    <div class="st-author-card" onclick="openLightbox(this)">
                        <img src="{{ asset('images/testimonials/Sarah-Lines.jpg') }}" alt="Sarah Lines"
                            loading="lazy" />
                        <div class="st-author-overlay">
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.2em]">Sarah Lines</span>
                        </div>
                    </div>
                </div>

            </div>{{-- end masonry --}}
        </div>
    </section>


    {{-- ==========================================
         CALL TO ACTION
         ========================================== --}}
    <section class="py-24 md:py-32 bg-dark px-6 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gold/[0.04] rounded-full blur-[100px]"></div>
            <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gold/[0.04] rounded-full blur-[100px]">
            </div>
        </div>

        <div class="container mx-auto max-w-4xl relative z-10 text-center st-fade-in">
            <span class="st-separator mx-auto mb-8"></span>
            <h2 class="font-display st-section-heading text-4xl md:text-5xl lg:text-6xl italic text-white mb-8">
                Your Story Could Be <span class="text-gold-light">Next</span>
            </h2>
            <p class="text-white/60 text-lg md:text-xl font-light max-w-2xl mx-auto mb-12 leading-relaxed">
                Join 100+ authors who turned their expertise into bestselling books.
                The only missing piece is <strong class="text-gold-light font-semibold">you</strong>.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('front.home.page', 'masterclass') }}"
                    class="inline-block px-10 py-4 bg-gold text-white font-bold text-sm uppercase tracking-[0.15em] rounded-[2px] border-2 border-gold transition-all duration-400 hover:bg-transparent hover:text-gold-light">
                    Start Your Journey
                </a>
                <a href="https://calendly.com/peppercoaching/your-book-my-priority" target="_blank"
                    class="inline-block px-10 py-4 bg-transparent text-white font-bold text-sm uppercase tracking-[0.15em] rounded-[2px] border-2 border-white/30 transition-all duration-400 hover:bg-white hover:text-dark hover:border-white">
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
        });

        // Filter tabs
        document.querySelectorAll('.st-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Update active tab
                document.querySelectorAll('.st-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;
                const items = document.querySelectorAll('.st-gallery-item');

                items.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
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
