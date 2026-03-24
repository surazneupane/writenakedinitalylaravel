{{-- ============================================
     AUTHORPRENEUR — Main Content Sections
     Parent: front.authorprenur
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
                        Write The Book That Positions You
                    </span>
                    <h1 class="ap-luxury-heading text-5xl md:text-7xl lg:text-[5rem] xl:text-[5.5rem] mb-10 text-dark">
                        Turn your expertise into a <span class="italic font-normal">published</span> book.
                    </h1>
                    <p
                        class="text-[#3a3a3a] text-lg md:text-xl max-w-2xl mb-14 font-light leading-[1.8] lg:mx-0 mx-auto">
                        Become a recognized authority, and grow your business — all in 6 months.
                    </p>
                    <a href="#investment" class="ap-btn ap-btn--gold">Apply / Join Now</a>
                </div>

                {{-- Right: Book Cover Image --}}
                <div class="w-full lg:w-5/12 ap-fade-in-right">
                    <div class="relative mx-auto max-w-sm lg:max-w-md">
                        {{-- Gold shadow behind --}}
                        <div class="absolute top-6 left-6 right-0 bottom-0 bg-gold/15 rounded-lg blur-[2px]"></div>
                        <img src="{{ asset('images/authorpreneur.jpeg') }}" alt="Authorpreneur — Create by Mirav Tarkka"
                            class="relative w-full h-auto rounded-lg shadow-2xl border border-gold/10">
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         PERSONAL NOTE FROM MIRAV
         ========================================== --}}
    <section id="about" class="py-28 bg-accent-bg">
        <div class="container mx-auto max-w-7xl px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 xl:gap-24">

                {{-- Video --}}
                <div class="w-full lg:w-5/12 ap-fade-in-left">
                    <div class="ap-video-wrapper relative z-10">
                        <div class="overflow-hidden rounded-sm shadow-2xl bg-dark">
                            <img src="{{ asset('images/AM015465.jpg') }}" alt="Mirav Tarkka Video"
                                class="w-full h-auto block">
                            {{-- <video autoplay playsinline loop muted controls class="w-full h-auto block">
                                <source src="{{ asset('images/client_video.mp4') }}" type="video/mp4" />
                            </video> --}}
                        </div>
                    </div>
                </div>

                {{-- Message --}}
                <div class="w-full lg:w-7/12 ap-fade-in-right">
                    <span class="text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.25em] mb-4 block">
                        A Personal Message from Mirav
                    </span>
                    <h2 class="ap-luxury-heading text-4xl md:text-5xl mb-8 italic text-dark">Dear badass author,</h2>

                    <div class="space-y-6 text-[#3a3a3a] text-lg font-light leading-[1.8]">
                        <p>
                            In a world that moves way too fast, we need to anchor ourselves in two essential principles:
                            <strong class="font-semibold text-dark">The long game</strong> and
                            <strong class="font-semibold text-dark">Staying one step ahead of the pace.</strong>
                        </p>
                        <p>
                            In other words: create something "fast" that lasts — not something that fades the moment the
                            next trend comes along.
                        </p>
                        <p>
                            Wise leaders throughout history understood this well:
                            <span class="text-gold-dark italic font-display text-2xl">"Verba volant, scripta
                                manent"</span>
                            — spoken words fly away, written words remain.
                        </p>
                        <p>
                            You're here to create a legacy from your work, your lessons, your teachings — just like the
                            greats who came before you. Your words are a physical expression of your thoughts and lived
                            wisdom. You're not just building a name — you're creating something lasting for yourself,
                            for
                            your family, for generations to come.
                            <strong class="font-semibold text-dark">You're done chasing.</strong>
                        </p>
                        <p class="text-dark font-semibold text-[17px] border-l-2 border-gold pl-6">
                            Your book can do all of that — and more. But only if you write it right, position it right,
                            and stop waiting for the "perfect" moment.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         WHO THIS IS FOR
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-6xl">
            <div class="text-center mb-16 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl italic text-dark">Who This Is For</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-10 ap-stagger">
                @foreach ([['num' => '01', 'title' => 'The Ready', 'text' => "You're ready to finally write, finish, and publish your book once and for all."], ['num' => '02', 'title' => 'The Impactful', 'text' => 'You want your work to reach more people, and your message to carry undeniable authority.'], ['num' => '03', 'title' => 'The Leader', 'text' => "You're a coach or entrepreneur looking to leverage a book as a business and legacy asset."]] as $card)
                    <div
                        class="text-center p-10 bg-accent-bg rounded-lg ap-fade-in hover:shadow-lg transition-all duration-500">
                        <div class="text-gold text-4xl mb-5 italic font-display font-bold">{{ $card['num'] }}</div>
                        <h4 class="font-extrabold text-[13px] uppercase tracking-[0.2em] mb-4 text-dark">
                            {{ $card['title'] }}</h4>
                        <p class="text-[#3a3a3a] font-light text-base leading-relaxed">{{ $card['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==========================================
         IMAGINE THIS
         ========================================== --}}
    <section class="py-36 overflow-hidden relative"
        style="background: linear-gradient(135deg, #fdfdfb 0%, #f7f0e0 40%, #f5edd6 70%, #f7f7f2 100%);">
        {{-- Decorative background elements --}}
        <div class="absolute top-0 right-0 w-1/3 h-full opacity-[0.07] pointer-events-none select-none overflow-hidden">
            <span class="text-[20rem] font-display italic text-gold leading-none block -mt-10">Impact</span>
        </div>
        <div class="absolute -top-20 -left-20 w-[400px] h-[400px] bg-gold/[0.06] rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-20 -right-20 w-[300px] h-[300px] bg-gold/[0.04] rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-8 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-16 ap-fade-in">
                    <span class="ap-separator mx-auto mb-6"></span>
                    <h2 class="ap-luxury-heading text-5xl md:text-7xl mb-4 text-dark">Imagine This...</h2>
                    <p class="text-[#5a5a5a] text-lg font-light mt-6 max-w-xl mx-auto">Close your eyes for a moment.
                        This is your life, 6 months from now.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 ap-stagger">
                    @foreach ([['icon' => '', 'quote' => 'You wake up knowing exactly what to write each day.'], ['icon' => '', 'quote' => 'Your book is finished, polished, and ready for the world.'], ['icon' => '', 'quote' => 'People reference your work. Clients reach out convinced by your authority.'], ['icon' => '', 'quote' => 'Opportunities open without chasing. Your book is an asset.']] as $item)
                        <div class="ap-fade-in group">
                            <div
                                class="bg-white/80 backdrop-blur-sm rounded-lg p-8 border border-gold/10 shadow-sm hover:shadow-lg hover:border-gold/30 transition-all duration-500 h-full">
                                <div class="text-3xl mb-4">{!! $item['icon'] !!}</div>
                                <p class="text-lg font-light italic text-[#3a3a3a] leading-relaxed">
                                    "{{ $item['quote'] }}"</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-16 text-center ap-fade-in">
                    <a href="#investment" class="ap-btn ap-btn--gold">Apply Now</a>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         YOUR 4-STEP GAME PLAN
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-7xl">
            <div class="text-center mb-20 ap-fade-in">
                <span class="text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.25em] mb-4 block">
                    Introducing Authorpreneur
                </span>
                <h2 class="ap-luxury-heading text-5xl italic text-dark">Your 4-Step Game Plan</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 ap-stagger">
                @foreach ([['step' => 'Step 1', 'title' => 'Become the Author', 'text' => 'Step fully into your author identity and lead your audience with conviction.'], ['step' => 'Step 2', 'title' => 'Write Your Book', 'text' => 'One page a day, supported by a structured, accountable system.'], ['step' => 'Step 3', 'title' => 'Publish Strategically', 'text' => 'Professional editing, publishing pathways, and review systems.'], ['step' => 'Step 4', 'title' => 'Business Asset', 'text' => 'Leverage your book for authority, visibility, and long-term monetization.']] as $step)
                    <div class="ap-step-card p-10 border border-gray-100 bg-white ap-fade-in">
                        <h3 class="font-extrabold text-[13px] uppercase tracking-[0.2em] mb-6 text-gold">
                            {{ $step['step'] }}</h3>
                        <h4 class="ap-luxury-heading text-2xl mb-4 text-dark">{{ $step['title'] }}</h4>
                        <p class="text-[#3a3a3a] text-base font-light leading-relaxed">{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 text-center ap-fade-in">
                <div class="inline-block p-8 border-l-4 border-gold bg-gold/5 text-lg text-dark shadow-sm max-w-2xl">
                    <strong>Exclusive Bonus:</strong>
                    <span class="font-light italic"> Early sign-ups receive 1 extra week of personalized launch
                        support.</span>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         INSIDE THE PROGRAM
         ========================================== --}}
    <section class="py-28 bg-accent-bg">
        <div class="container mx-auto px-8 max-w-5xl">
            <div class="text-center mb-20 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-5xl text-dark">Inside the Program</h2>
            </div>

            <div class="space-y-0">
                @foreach ([['period' => 'Months 1–3', 'title' => 'Author + Writing', 'desc' => 'Book vision, positioning, chapter mapping, daily writing systems, and identity work.', 'outcome' => 'First draft complete'], ['period' => 'Month 4', 'title' => 'Production', 'desc' => 'Professional editing, proofreading, title refinement, and choosing your publishing pathway.', 'outcome' => 'Ready to publish'], ['period' => 'Month 5', 'title' => 'Launch', 'desc' => 'Visibility plans, content strategy from your book, and our signature silent launch method.', 'outcome' => 'Book published'], ['period' => 'Month 6', 'title' => 'Authority', 'desc' => 'Scale visibility through podcasts and PR. Turn readers into high-ticket clients.', 'outcome' => 'Book becomes a growth engine']] as $item)
                    <div class="ap-timeline-card-light group ap-fade-in">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
                            <div class="md:w-1/3">
                                <span
                                    class="text-gold text-[13px] font-extrabold uppercase tracking-[0.2em]">{{ $item['period'] }}</span>
                                <h3
                                    class="ap-luxury-heading text-3xl mt-2 text-dark group-hover:text-gold transition-colors duration-300">
                                    {{ $item['title'] }}
                                </h3>
                            </div>
                            <div class="md:w-2/3">
                                <p class="text-[#3a3a3a] font-light text-base mb-4 leading-relaxed">{{ $item['desc'] }}
                                </p>
                                <span class="ap-outcome-badge">&#10004; Outcome: {{ $item['outcome'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==========================================
         WHAT YOU RECEIVE + RESULTS
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-16 xl:gap-20">

                {{-- Left: What You Receive --}}
                <div class="ap-fade-in-left">
                    <span class="ap-separator mb-6"></span>
                    <h2 class="ap-luxury-heading text-4xl mb-12 italic text-dark">What You Receive</h2>
                    <ul class="ap-bullet-gold space-y-4 text-[#3a3a3a] font-light text-lg">
                        <li><strong class="font-semibold">6 months</strong> in a private, high-touch container</li>
                        <li><strong class="font-semibold">2 group sessions/month</strong> (strategy + hot seats)</li>
                        <li><strong class="font-semibold">1 private 1:1 session</strong> per month</li>
                        <li>Direct feedback on your manuscript &amp; messaging</li>
                        <li>Daily writing system &amp; accountability</li>
                        <li>Private, focused community of peers</li>
                        <li>Guest expert sessions (publishing, PR, positioning)</li>
                        <li>Weekly recorded teachings + Q&amp;A</li>
                    </ul>
                </div>

                {{-- Right: Results --}}
                <div class="ap-fade-in-right">
                    <div class="bg-white p-12 border border-gray-200 shadow-xl rounded-sm h-full flex flex-col">
                        <span class="ap-separator mb-6"></span>
                        <h2 class="ap-luxury-heading text-4xl mb-12 italic text-dark">Results To Expect</h2>
                        <ul class="ap-bullet-gold space-y-4 text-[#3a3a3a] font-medium flex-grow">
                            <li>A finished, polished book ready for publication</li>
                            <li>Clear, aligned message and positioning</li>
                            <li>A strategic publishing and launch plan</li>
                            <li>Your book becomes a business and authority asset</li>
                            <li>Long-term visibility, credibility, and growth</li>
                        </ul>
                        <div class="mt-12 pt-8 border-t border-gray-100">
                            <a href="#investment" class="ap-btn ap-btn--gold w-full text-center">Join Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         ABOUT MIRAV + TESTIMONIALS
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-5xl">

            {{-- Bio --}}
            <div class="text-center mb-24 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl mb-10 italic text-dark">About Mirav Tarkka</h2>
                <div class="space-y-6 text-[#3a3a3a] font-light leading-relaxed max-w-3xl mx-auto text-lg">
                    <p>
                        This is the first course of its kind to integrate
                        <strong class="font-semibold">body, mind, and soul</strong> into the business of book creation.
                        Writing a book is no longer enough — you must also hold the energy behind it.
                    </p>
                    <p>
                        As an 11-time bestselling author and mentor, Mirav has guided authors across genres and
                        countries
                        to reach #1 status with a <strong class="font-semibold">100% success rate</strong>. Her
                        approach
                        combines strategic business precision with deep embodiment work.
                    </p>
                </div>
            </div>

            {{-- Testimonials --}}
            <div class="grid md:grid-cols-3 gap-10 ap-stagger">
                @foreach ([['quote' => "Mirav is a queen in the Bestseller world \u{2013} a true motivational diva who sees the gold in every story.", 'name' => 'Sofia Halter'], ['quote' => 'She leads with love and fire. Working with her is a bulletproof path to becoming an unstoppable authority.', 'name' => 'Jane Doe'], ['quote' => "Her words ignite revolutions. She doesn\u{2019}t just teach publishing, she teaches power.", 'name' => 'Zara Monroe']] as $testimonial)
                    <div class="ap-testimonial p-10 italic text-dark bg-accent-bg rounded-lg ap-fade-in">
                        <p class="mb-8 relative z-10 leading-relaxed text-base">"{{ $testimonial['quote'] }}"</p>
                        <span class="text-[13px] font-extrabold not-italic uppercase tracking-[0.2em] text-gold">
                            — {{ $testimonial['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    {{-- ==========================================
         THE INVESTMENT
         ========================================== --}}
    <section id="investment" class="py-36 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-20 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-5xl mb-4 italic text-dark">The Investment</h2>
                <p class="text-gold text-[13px] font-extrabold uppercase tracking-[0.3em] mt-4">Founding Round Pricing
                </p>
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">

                {{-- Paid in Full --}}
                <div
                    class="ap-pricing-card p-16 bg-accent-bg text-center rounded-lg relative overflow-hidden ap-fade-in border border-gold/20 shadow-md">
                    <div
                        class="absolute top-0 right-0 bg-gold text-white text-[11px] font-extrabold uppercase tracking-wider px-4 py-2 rounded-bl-lg">
                        Best Value
                    </div>
                    <span class="text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.2em] mb-6 block">Paid
                        In Full</span>
                    <h3 class="ap-luxury-heading text-6xl mb-6 text-dark">&euro;2,665</h3>
                    <p class="text-[#3a3a3a] font-light text-base mb-6 leading-relaxed">
                        The most efficient investment for your business legacy.
                    </p>
                    <p class="text-gray-400 text-sm line-through mb-10">Regular Price: &euro;4,444</p>
                    <a href="#" class="ap-btn ap-btn--gold w-full text-center">Apply &amp; Join Now</a>
                </div>

                {{-- Installment Plan --}}
                <div
                    class="ap-pricing-card p-16 border border-gray-200 text-center rounded-lg ap-fade-in bg-white shadow-sm">
                    <span
                        class="text-[#5a5a5a] text-[13px] font-extrabold uppercase tracking-[0.2em] mb-6 block">Installment
                        Plan</span>
                    <h3 class="ap-luxury-heading text-6xl mb-6 text-dark">
                        &euro;555 <span class="text-xl font-light text-[#5a5a5a]">/mo</span>
                    </h3>
                    <p class="text-[#3a3a3a] font-light text-base mb-10 leading-relaxed">
                        Spread the investment over 6 months of growth.
                    </p>
                    <div class="h-12 hidden md:block"></div>
                    <a href="#" class="ap-btn ap-btn--gold ap-btn--gold-outline w-full text-center">Secure My
                        Spot</a>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         FINAL CTA
         ========================================== --}}
    <section class="py-36 bg-white text-center overflow-hidden relative">
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gold/[0.03] rounded-full blur-[120px]">
            </div>
        </div>
        <div class="container mx-auto px-8 relative z-10 ap-fade-in">
            <h2 class="ap-luxury-heading text-5xl md:text-7xl mb-12 text-dark leading-tight">
                Ready to turn expertise into<br>
                <span class="italic font-normal">published authority?</span>
            </h2>
            <a href="#investment" class="ap-btn ap-btn--gold">Apply Now</a>
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
