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
                    <h1 class="ap-luxury-heading text-4xl md:text-6xl lg:text-[4rem] xl:text-[4.5rem] mb-10 text-dark">
                        Turn your expertise into a <span class="italic font-normal">published</span> book.
                    </h1>
                    <p
                        class="text-[#3a3a3a] text-lg md:text-2xl max-w-2xl mb-14 font-light leading-[1.8] lg:mx-0 mx-auto">
                        Become a recognized authority, and grow your business — all in 6 months.
                    </p>
                    <a href="#investment" class="ap-btn ap-btn--gold">OMG I Am Ready!</a>
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
                @foreach ([['num' => '01', 'title' => '', 'text' => "You're ready to finally write, finish, and publish your book once and for all."], ['num' => '02', 'title' => '', 'text' => 'You want your work to reach more people, and your message to carry undeniable authority.'], ['num' => '03', 'title' => '', 'text' => "You're a coach or entrepreneur looking to leverage a book as a business and legacy asset."]] as $card)
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
                                    {{ $item['quote'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-16 text-center ap-fade-in">
                    <a href="#investment" class="ap-btn ap-btn--gold">Yeah Mamma!</a>
                </div>
            </div>
        </div>
    </section>


    {{-- ==========================================
         YOUR 4-STEP GAME PLAN
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-7xl">
            <div class="text-center mb-28 ap-fade-in">
                <span class="text-gold-dark text-[20px] font-extrabold uppercase tracking-[0.25em] mb-4 block">
                    Introducing Authorpreneur
                </span>
                <div class="mt-8 mb-16 text-center ap-fade-in">
                    <div
                        class="inline-block p-8 border-l-4 border-gold bg-gold/5 text-lg text-dark shadow-sm max-w-5xl">
                        <p class="mb-8"> A 6-month high-touch container that guides you from idea to published
                            book—and
                            positions it as a strategic business asset.</p>
                        <strong>Exclusive Bonus:</strong>
                        <span class="font-light italic"> Early sign-ups receive 1 extra week of personalized launch
                            support.</span>
                    </div>
                </div>
            </div>

            <h2 class="ap-luxury-heading text-5xl italic text-dark text-center mb-10">Your 4-Step Game Plan</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 ap-stagger">
                @foreach ([['step' => 'Step 1', 'title' => 'Become the Author', 'text' => 'Step fully into your author identity.'], ['step' => 'Step 2', 'title' => 'Write Your Book', 'text' => 'One page a day, supported by a structured, and accountable.'], ['step' => 'Step 3', 'title' => 'Publish Strategically', 'text' => 'Editing, publishing pathway, and review strategy.'], ['step' => 'Step 4', 'title' => 'Turn Your Book Into a Business Asset', 'text' => 'Authority, visibility, and monetization.']] as $step)
                    <div class="ap-step-card p-10 border border-gray-100 bg-white ap-fade-in">
                        <h3 class="font-extrabold text-[15px] uppercase tracking-[0.2em] mb-6 text-gold">
                            {{ $step['step'] }}</h3>
                        <h4 class="ap-luxury-heading text-2xl mb-4 text-dark">{{ $step['title'] }}</h4>
                        <p class="text-[#3a3a3a] text-base font-light leading-relaxed">{{ $step['text'] }}</p>
                    </div>
                @endforeach
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
                @foreach ([
        [
            'period' => 'Months 1–3',
            'title' => 'Author + Writing',
            'bullets' => ['Book vision + positioning', 'Structure + chapter mapping', 'Daily writing system (1 page/day)', 'Writing sprints + feedback loops', 'Identity & embodiment work'],
            'outcome' => 'First draft complete',
        ],
        [
            'period' => 'Month 4',
            'title' => 'Production & Pre-Launch',
            'bullets' => ['Editing + proofreading guidance', 'Title + concept refinement', 'Publishing pathway', 'Review strategy'],
            'outcome' => 'Ready to publish',
        ],
        [
            'period' => 'Month 5',
            'title' => 'Launch',
            'bullets' => ['Content strategy from your book', 'Visibility plan', 'Silent launch + bestseller strategy'],
            'outcome' => 'Book published',
        ],
        [
            'period' => 'Month 6',
            'title' => 'Authority & Business',
            'bullets' => ['Turn readers into clients', 'Scale visibility (podcasts, PR, speaking)', 'Business integration'],
            'outcome' => 'Book becomes a growth engine',
        ],
    ] as $item)
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
                                <ul
                                    class="ap-bullet-gold space-y-2 text-[#3a3a3a] font-light text-base leading-relaxed mb-4">
                                    @foreach ($item['bullets'] as $bullet)
                                        <li>{{ $bullet }}</li>
                                    @endforeach
                                </ul>
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
                        <li><strong class="font-semibold">Bonus Week:</strong>
                            Early sign-ups get an extra week of personalized launch support

                        </li>
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
                            <a href="#investment" class="ap-btn ap-btn--gold w-full text-center">Gimmi Gimmi
                                Gimmi!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         ABOUT MIRAV
         ========================================== --}}
    <section class="py-28 bg-white">
        <div class="container mx-auto px-8 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16 xl:gap-24">

                {{-- Left: Image --}}
                <div class="w-full lg:w-5/12 ap-fade-in-left">
                    <div class="relative">
                        <div class="absolute top-6 left-6 right-0 bottom-0 bg-gold/15 rounded-lg blur-[2px]"></div>
                        <img src="{{ asset('images/image.jpg') }}" alt="Mirav Tarkka — 11-Time Bestselling Author"
                            class="relative w-full h-auto rounded-lg shadow-2xl border border-gold/10 object-cover">
                    </div>
                </div>

                {{-- Right: Bio --}}
                <div class="w-full lg:w-7/12 ap-fade-in-right">
                    <span class="ap-separator mb-6"></span>
                    <h2 class="ap-luxury-heading text-4xl md:text-5xl mb-10 italic text-dark">About Mirav Tarkka</h2>

                    <div class="space-y-6 text-[#3a3a3a] font-light leading-[1.85] text-lg">
                        <p>
                            Mirav Tarkka is an <strong class="font-semibold text-dark">11-time bestselling
                                author</strong>, publisher, and creator of the <strong
                                class="font-semibold text-dark">Write Naked Method</strong>. Her <strong
                                class="font-semibold text-dark">coaching successes</strong> include guiding over
                            <strong class="font-semibold text-dark">100 authors</strong> to #1 international bestseller
                            status — with <strong class="font-semibold text-dark">100% success</strong>.
                        </p>
                        <p>
                            With a <strong class="font-semibold text-dark">global reach</strong> spanning Europe, the
                            Americas, Asia, and beyond, Mirav's work is rooted in her unique <strong
                                class="font-semibold text-dark">integration of mind-body-soul energy into book
                                creation</strong> — drawing on her background as an <strong
                                class="font-semibold text-dark">IDF Operational Sergeant</strong> and international
                            self-defense instructor to bring focus, structure, and emotional intelligence into the
                            creative process.
                        </p>
                        <p class="text-dark font-semibold text-[17px] border-l-2 border-gold pl-6">
                            A leading expert in self-publishing, Mirav supports authors in retaining <strong>full
                                ownership</strong> of their work while achieving international recognition — combining
                            luxury, creativity, and results.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ==========================================
         TESTIMONIALS
         ========================================== --}}
    <section class="py-28 bg-accent-bg">
        <div class="container mx-auto px-8 max-w-6xl">
            <div class="text-center mb-20 ap-fade-in">
                <span class="ap-separator mx-auto mb-6"></span>
                <h2 class="ap-luxury-heading text-4xl md:text-5xl italic text-dark">What Our Authors Say</h2>
            </div>

            {{-- Featured testimonial — Alina (full width) --}}
            <div class="mb-12 ap-fade-in">
                <div class="relative bg-white rounded-xl p-12 md:p-16 border border-gold/15 shadow-lg overflow-hidden">
                    {{-- Decorative quote mark --}}
                    <div
                        class="absolute top-6 left-8 text-[8rem] leading-none font-display text-gold/10 pointer-events-none select-none">
                        &ldquo;</div>
                    <div class="relative z-10">
                        <p class="text-[#3a3a3a] text-base md:text-lg font-light italic leading-[1.9] mb-8 max-w-4xl">
                            "If you want to hold your book in your hands, the person you should choose is Mirav and her
                            bestselling program. Mirav and her team work hard to bring your book to life. The entire
                            process is a transformational experience, from writing your book to committing to getting
                            published, to designing your vision on the book cover, and finally seeing it on Amazon as a
                            #1 bestseller. It's a wonderful feeling of accomplishment and gratitude for all the people
                            who made this book happen. Mirav is successful because she has made 80 authors bestsellers
                            before me, and now I am one of those authors. She is going to bring many more authors and
                            books to life. Remember to be yourself during this process and enjoy it. Stay true to your
                            dreams and keep shining!"
                        </p>
                        <div class="flex items-center gap-4">
                            <span class="w-10 h-[2px] bg-gold block"></span>
                            <span class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Alina</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Two-column testimonials --}}
            <div class="grid md:grid-cols-2 gap-10 ap-stagger">

                {{-- Renato --}}
                <div class="ap-fade-in">
                    <div
                        class="relative bg-white rounded-xl p-10 border border-gold/10 shadow-sm hover:shadow-lg hover:border-gold/20 transition-all duration-500 h-full overflow-hidden">
                        <div
                            class="absolute top-4 left-6 text-[5rem] leading-none font-display text-gold/10 pointer-events-none select-none">
                            &ldquo;</div>
                        <div class="relative z-10">
                            <p class="text-[#3a3a3a] text-sm md:text-base font-light italic leading-[1.85] mb-8">
                                "You are such a professional and inspiration and by taking care of every detail you made
                                me feel like home and honored. Sharing with other authors was really nice, because of
                                this you let me discover a new me as writer and have a vision about how far I can go.
                                I'm looking forward to repeat this deep experience with you and other writers because
                                the magic, the sparkling comes from you."
                            </p>
                            <div class="flex items-center gap-4">
                                <span class="w-8 h-[2px] bg-gold block"></span>
                                <span
                                    class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Renato</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Wendy Panther --}}
                <div class="ap-fade-in">
                    <div
                        class="relative bg-white rounded-xl p-10 border border-gold/10 shadow-sm hover:shadow-lg hover:border-gold/20 transition-all duration-500 h-full overflow-hidden">
                        <div
                            class="absolute top-4 left-6 text-[5rem] leading-none font-display text-gold/10 pointer-events-none select-none">
                            &ldquo;</div>
                        <div class="relative z-10">
                            <p class="text-[#3a3a3a] text-sm md:text-base font-light italic leading-[1.85] mb-8">
                                "I joined a five day challenge with Mirav and discovered the perfect formula for me. Her
                                power shots set me up for the day, emotionally and physically. The format of the session
                                is what I love the most. I am never bored. I never know what Mirav will come up with
                                next to keep us stimulated and physically fit. My face and body have both toned up and I
                                feel physically stronger. I have met some lovely people, and found a way to keep fit
                                that suits me. I would recommend Mirav's power shots for anyone looking for a fun and
                                flexible way to keep fit with a bunch of spiritual and likeminded people."
                            </p>
                            <div class="flex items-center gap-4">
                                <span class="w-8 h-[2px] bg-gold block"></span>
                                <span class="text-[13px] font-extrabold uppercase tracking-[0.25em] text-gold">Wendy
                                    Panther</span>
                            </div>
                        </div>
                    </div>
                </div>

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
                {{-- <p class="text-gold text-[13px] font-extrabold uppercase tracking-[0.3em] mt-4">Founding Round Pricing
                </p> --}}
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">

                {{-- Paid in Full --}}
                <div
                    class="ap-pricing-card p-16 bg-accent-bg text-center rounded-lg relative overflow-hidden ap-fade-in border border-gold/20 shadow-md">
                    <div
                        class="absolute top-0 right-0 bg-gold text-white text-[11px] font-extrabold uppercase tracking-wider px-4 py-2 rounded-bl-lg">
                        Best Value
                    </div>
                    <span
                        class="text-gold-dark text-[13px] font-extrabold uppercase tracking-[0.2em] mb-6 block">Founding
                        Round</span>
                    <h3 class="ap-luxury-heading text-6xl  text-dark">&euro;2,665 </h3>
                    <p class="text-xl font-medium my-2">or</p>
                    <h3 class="ap-luxury-heading text-2xl mb-6 text-dark">&euro;555/6 mo</h3>



                    <a href="#" class="ap-btn ap-btn--gold ap-btn--gold-outline w-full text-center">Secure My
                        Spot</a>
                </div>

                {{-- Installment Plan --}}
                <div
                    class="ap-pricing-card p-16 border border-gray-200 text-center rounded-lg ap-fade-in bg-white shadow-sm">
                    <span
                        class="text-[#5a5a5a] text-[13px] font-extrabold uppercase tracking-[0.2em] mb-6 block">Regular
                        Price
                    </span>
                    <h3 class="ap-luxury-heading text-6xl mb-6 text-dark">
                        &euro;4,444
                    </h3>

                    <div class="h-20 hidden md:block"></div>
                    <a href="#" class="ap-btn ap-btn--gold w-full text-center">Apply &amp; Join Now</a>

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
            <a href="#investment" class="ap-btn ap-btn--gold">Gimmi Gimmi Gimmi!</a>
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
