    <div id="newsletterModal" class="modal-overlay">
        <div class="modal-content">

            <div class="file-icon-container">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="12" y1="18" x2="12" y2="12"></line>
                    <polyline points="9 15 12 18 15 15"></polyline>
                </svg>
            </div>

            <h1>Download Activation</h1>

            <form id="subscriptionForm">
                @csrf
                <div class="form-group">
                    <label for="emailInput">Email Address</label>
                    <input type="email" id="emailInput" name="email" class="input-field"
                        placeholder="hello@example.com" required>
                    <p id="emailError" class="error-text">Please enter a valid email address.</p>
                </div>

                <div class="file-card">
                    <div class="file-thumb">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                    </div>

                    <div class="file-details">
                        <p>Activation I.mpeg</p>
                        <p>Audio File • 18.3 MB</p>
                    </div>
                </div>


                <div class="file-card">
                    <div class="file-thumb">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                    </div>

                    <div class="file-details">
                        <p>Activation II.mpeg</p>
                        <p>Audio File • 5.3 MB</p>
                    </div>
                </div>

                <button type="submit" id="downloadBtn" class="download-btn" disabled>
                    Download
                </button>
            </form>
        </div>
    </div>

    <div id="successMessage">
        Thank you! Your download is starting...
    </div>
