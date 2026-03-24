{{-- ============================================
     MASTERCLASS — Main Content Sections
     Parent: front.masterclass
     ============================================ --}}

<div class="antialiased text-[#2d2d2d]">

    {{-- ==========================================
         HERO
         ========================================== --}}
    <section class="relative mt-20 sm:mt-0 pt-40 pb-24 md:pt-32 md:pb-32 px-6 overflow-hidden bg-off-white">
        {{-- Soft decorative glows --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gold/[0.04] rounded-full blur-[100px]"></div>
            <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gold/[0.04] rounded-full blur-[100px]"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 xl:gap-20">

                {{-- Left: Text --}}
                <div class="w-full lg:w-7/12 text-center lg:text-left ap-fade-in-left">
                    <span class="ap-separator mb-8 ap-fade-in lg:mx-0 mx-auto"></span>
                    <span class="inline-block text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.4em] mb-8">
                        LFG Publish!
                    </span>
                    <h1 class="ap-luxury-heading text-4xl md:text-5xl lg:text-[4rem] xl:text-[4.5rem] mb-6 text-dark">
                        Go From Idea to <span class="italic font-normal">Published</span> Book
                        {{-- <span class="text-gold">(Fast)</span> --}}
                    </h1>
                    <p
                        class="text-[#3a3a3a] text-xl md:text-2xl max-w-2xl mb-14 font-light leading-[1.8] lg:mx-0 mx-auto font-display italic">
                        "Free Masterclass for Those Who Are Ready to Become Bestselling Authors"
                    </p>

                    {{-- Bullet points --}}
                    <ul class="mc-checklist space-y-5 mb-14 text-left max-w-xl lg:mx-0 mx-auto">
                        @foreach (['Step into the identity of a bestselling author — Activation meditation you take home!', 'Experience the Write Naked method', 'Write your first raw, powerful page', 'Understand how to go from idea to publishing on Amazon', 'Learn what actually creates a bestselling book'] as $item)
                            <li class="flex items-start gap-4 ap-fade-in">
                                <span
                                    class="flex-shrink-0 w-6 h-6 rounded-full bg-gold/10 flex items-center justify-center mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-gold" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="text-[#3a3a3a] text-base font-medium leading-relaxed">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('front.home.page', 'authorprenur') }}" class="ap-btn ap-btn--gold">LFG Publish
                        Now!
                        &rarr;</a>
                </div>

                {{-- Right: Image --}}
                <div class="w-full lg:w-[50%] ap-fade-in-right">
                    <div class="relative mx-auto max-w-sm lg:max-w-lg">
                        {{-- Gold shadow behind --}}
                        <div class="absolute top-6 left-6 right-0 bottom-0 bg-gold/15 rounded-lg blur-[2px]"></div>
                        <img src="{{ asset('images/LFG.png') }}" alt="LFG Publish Masterclass"
                            class="relative w-full h-auto rounded-lg shadow-2xl border border-gold/10">
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         ZERO BS METHOD
         ========================================== --}}
    <section class="py-36 overflow-hidden relative"
        style="background: linear-gradient(135deg, #fdfdfb 0%, #f7f0e0 40%, #f5edd6 70%, #f7f7f2 100%);">
        {{-- Decorative background --}}
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-[0.07] pointer-events-none select-none overflow-hidden">
            <span class="text-[18rem] font-display italic text-gold leading-none block -mt-10">BS!</span>
        </div>
        <div class="absolute -top-20 -left-20 w-[400px] h-[400px] bg-gold/[0.06] rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-20 -right-20 w-[300px] h-[300px] bg-gold/[0.04] rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center ap-fade-in">
                <span class="ap-separator mx-auto mb-8"></span>
                <h2 class="ap-luxury-heading text-2xl md:text-3xl lg:text-5xl mb-8 text-dark leading-normal">
                    A Zero BS Method to Become a<br>
                    <span class="text-gold italic font-normal">BS (BestSeller!)</span> Author
                </h2>
                <p class="text-[#3a3a3a] text-md md:text-xl font-light leading-relaxed max-w-2xl mx-auto mb-14">
                    This is EXACTLY how I guided over 100 authors to become #1 bestsellers — fast, soul-led, and the fun
                    way :D
                </p>
                <a href="{{ route('front.home.page', 'authorprenur') }}" class="ap-btn ap-btn--gold">LFG Publish Now!
                    &rarr;</a>
            </div>
        </div>
    </section>


    {{-- ==========================================
         BONUSES
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-5xl">
            <div class="text-center mb-16 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl italic text-dark">Bonuses</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-10 max-w-3xl mx-auto ap-stagger">

                {{-- Bonus 1 --}}
                <div
                    class="text-center p-10 bg-accent-bg rounded-lg ap-fade-in hover:shadow-lg transition-all duration-500">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gold/10 text-gold mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                        </svg>
                    </div>
                    <h4 class="font-extrabold text-[13px] uppercase tracking-[0.2em] mb-4 text-dark">Active Walking
                        Meditation</h4>
                    <p class="text-[#3a3a3a] font-light text-base leading-relaxed">Audio sent after the masterclass</p>
                </div>

                {{-- Bonus 2 --}}
                <div
                    class="text-center p-10 bg-accent-bg rounded-lg ap-fade-in hover:shadow-lg transition-all duration-500">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gold/10 text-gold mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                        </svg>
                    </div>
                    <h4 class="font-extrabold text-[13px] uppercase tracking-[0.2em] mb-4 text-dark">24h Ask Me Anything
                    </h4>
                    <p class="text-[#3a3a3a] font-light text-base leading-relaxed">24h access to ask me anything &mdash;
                        answered live</p>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         CTA — LFG PUBLISH NOW
         ========================================== --}}
    {{-- <section id="signup" class="py-36 bg-accent-bg text-center overflow-hidden relative">
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gold/[0.03] rounded-full blur-[120px]">
            </div>
        </div>
        <div class="container mx-auto px-8 relative z-10 ap-fade-in">
            <span class="ap-separator mx-auto mb-8"></span>
            <h2 class="ap-luxury-heading text-5xl md:text-7xl mb-8 text-dark leading-tight">
                Ready to Become a<br>
                <span class="italic font-normal text-gold">Bestselling Author?</span>
            </h2>
            <p class="text-[#5a5a5a] text-lg font-light mb-14 max-w-xl mx-auto">
                Join the free masterclass and go from idea to published book — fast.
            </p>
            <a href="#" class="ap-btn ap-btn--gold">LFG Publish Now! &rarr;</a>
        </div>
    </section> --}}

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
