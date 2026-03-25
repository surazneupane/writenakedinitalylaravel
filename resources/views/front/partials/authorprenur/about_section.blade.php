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

                 <a href="#"
                     class="inline-flex items-center gap-2 mt-8 text-gold font-semibold text-base tracking-wide group transition-all duration-300 hover:gap-3">
                     Read More
                     <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                     </svg>
                 </a>
             </div>

         </div>
     </div>
 </section>
