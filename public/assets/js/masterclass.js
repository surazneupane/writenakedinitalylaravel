document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("ap-visible");
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: "0px 0px -40px 0px",
        },
    );

    document
        .querySelectorAll(".ap-fade-in, .ap-fade-in-left, .ap-fade-in-right")
        .forEach(function (el) {
            observer.observe(el);
        });
});

function openLfgModal() {
    var modal = document.getElementById("lfgModal");
    var card = document.getElementById("lfgModalCard");
    // Reset to form state
    document.getElementById("lfgFormState").classList.remove("hidden");
    document.getElementById("lfgSuccessState").classList.add("hidden");
    document.getElementById("lfgEmailInput").value = "";
    document.getElementById("lfgEmailError").classList.add("hidden");
    document.getElementById("lfgSubmitBtn").disabled = false;
    document.getElementById("lfgSubmitBtn").innerHTML =
        "Send Me the Details &rarr;";

    modal.classList.remove("hidden");
    modal.classList.add("flex");
    // Trigger enter animation
    setTimeout(function () {
        card.classList.remove("scale-95", "opacity-0");
        card.classList.add("scale-100", "opacity-100");
    }, 10);
}

function closeLfgModal() {
    var modal = document.getElementById("lfgModal");
    var card = document.getElementById("lfgModalCard");
    card.classList.remove("scale-100", "opacity-100");
    card.classList.add("scale-95", "opacity-0");
    setTimeout(function () {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
    }, 300);
}

function submitLfgEmail(e) {
    e.preventDefault();
    var email = document.getElementById("lfgEmailInput").value.trim();
    var errorEl = document.getElementById("lfgEmailError");
    var submitBtn = document.getElementById("lfgSubmitBtn");
    var csrfToken = document.getElementById("lfgCsrfToken").value;

    if (!email) {
        errorEl.textContent = "Please enter your email address.";
        errorEl.classList.remove("hidden");
        return;
    }

    errorEl.classList.add("hidden");
    submitBtn.disabled = true;
    submitBtn.innerHTML =
        '<span class="inline-block animate-pulse">Submitting...</span>';

    // Placeholder backend URL — replace with actual route
    var backendUrl = "/download/masterclass";

    fetch(backendUrl, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
            Accept: "application/json",
        },
        body: JSON.stringify({
            email: email,
        }),
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            if (data.status === "success") {
                showLfgSuccess(data.redirectRoute);
            } else {
                errorEl.textContent = data.message || "Something went wrong. Please try again.";
                errorEl.classList.remove("hidden");
                submitBtn.disabled = false;
                submitBtn.innerHTML = "Send Me the Details &rarr;";
            }
        })
        .catch(function (err) {
            errorEl.textContent = "Something went wrong. Please try again.";
            errorEl.classList.remove("hidden");
            submitBtn.disabled = false;
            submitBtn.innerHTML = "Send Me the Details &rarr;";
        });
}

function showLfgSuccess(redirectUrl) {
    document.getElementById("lfgFormState").classList.add("hidden");
    document.getElementById("lfgSuccessState").classList.remove("hidden");

    var count = 7;
    var countdownEl = document.getElementById("lfgCountdown");
    countdownEl.textContent = count;

    var timer = setInterval(function () {
        count--;
        countdownEl.textContent = count;
        if (count <= 0) {
            clearInterval(timer);
            window.location.href = redirectUrl;
        }
    }, 1000);
}

// Close modal on Escape key
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeLfgModal();
});
