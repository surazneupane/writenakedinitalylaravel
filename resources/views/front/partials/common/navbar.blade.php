
 <!-- NAV -->
 <nav class="nav">
     <div class="nav-inner">
         <a href="{{ route('front.home') }}" class="brand" aria-label="Write Naked in Italy">
             <div>
                 <img src="{{ asset('images/logos/logo.png') }}" alt="Write Naked in Italy logo" style="height: 40px" />
                 <span>Write Naked in Italy</span>
             </div>
         </a>

         <!-- Hamburger button -->
         <button class="nav-toggle" aria-label="Toggle menu">☰</button>

         <div class="nav-links">
             <a href="{{ route('front.home') }}#become">Become</a>
             <!-- <a href="{{ route('front.home') }}#experience">Experience</a> -->
             <a href="{{ route('front.home') }}#included">Included</a>
             <a href="{{ route('front.home') }}#about">About</a>
             <a href="{{ route('front.home') }}#daily">Daily Flow</a>
             <a href="{{ route('front.home') }}#contact">Contact</a>
             <a class="btn primary vip" href="{{ route('front.home.page', 'vipday') }}">VIP DAY</a>
             <a class="btn primary" href="{{ route('front.home') }}#reserve">Reserve Your Spot</a>
             <a class="btn ghost" target="_blank" href="https://calendly.com/peppercoaching/your-book-my-priority">Book
                 a Call</a>
         </div>
     </div>
 </nav>
