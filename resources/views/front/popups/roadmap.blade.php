<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap"
    rel="stylesheet">

<div id="newsletterModal" class="modal-overlay">
    <div class="modal-content">


        <div class="modal-header">
            <div class="logo-container">
                <img src="{{ asset('images/logos/logo_gold.png') }}" alt="Author Logo">
            </div>
            <h1>Plan Your Path to Bestselling Authorship</h1>
            <p class="subtitle">Enter your email to download the Write Naked Author Roadmap and start building your
                publishing success.</p>
        </div>

        <!-- Form Section -->
        <div class="modal-body">
            <form id="subscriptionForm">
                @csrf
                <div class="file-card">
                    <div class="file-thumb">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <path d="M21 15l-5-5L5 21"></path>
                        </svg>
                    </div>
                    <div class="file-details">
                        <span class="file-name">Write Naked Bestselling Author Roadmap</span>
                        <span class="file-meta">Image JPEG • 120 KB</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailInput">Email Address</label>
                    <input type="email" id="emailInput" name="email" class="input-field"
                        placeholder="hello@example.com" required>
                    <p id="emailError" class="error-text">Please enter a valid email address.</p>
                </div>



                <button type="submit" id="downloadBtn" class="download-btn" disabled>
                    <span>Download</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>
