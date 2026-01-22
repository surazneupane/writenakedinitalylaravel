<section id="contact">
    <div class="container">
        <div class="kicker">✉️ Reach Out to Me</div>
        <h2 class="section-title">
            Have a <span class="text-color">Question?</span> Let’s Connect
        </h2>

        <div class="card contact-card">
            <p class="contact-text">
                Drop me a line with your name, email, and questions — I’ll get back to you personally.
            </p>

            <form class="contact-form" onsubmit="event.preventDefault(); sendContactForm(event);">
                @csrf
                <div class="input-row">
                    <input type="text" required placeholder="Full Name" aria-label="Full Name" name="name" />
                    <input type="email" required placeholder="Email" aria-label="Email" name="email" />
                </div>
                <textarea rows="6" placeholder="Your Questions." aria-label="Message" name="question"></textarea>
                <span class="error" id="contactformerror"> </span>
                <span class="success" id="contactformsuccess"> </span>
                <button type="submit" id="contactformsend">Send Inquiry</button>
            </form>
        </div>
    </div>
</section>
