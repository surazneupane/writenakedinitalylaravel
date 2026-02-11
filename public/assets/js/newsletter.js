const emailInput = document.getElementById("emailInput");
const downloadBtn = document.getElementById("downloadBtn");
const emailError = document.getElementById("emailError");
const form = document.getElementById("subscriptionForm");
const newsLetterModal = document.getElementById("newsletterModal");

// Email Validation
const validateEmail = (email) => {
    return String(email)
        .toLowerCase()
        .match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
};

emailInput.addEventListener("input", (e) => {
    const value = e.target.value.trim();

    if (value === "") {
        downloadBtn.disabled = true;
        emailError.style.display = "none";
        return;
    }

    if (validateEmail(value)) {
        downloadBtn.disabled = false;
        emailError.style.display = "none";
    } else {
        downloadBtn.disabled = true;
        emailError.style.display = "block";
    }
});

// Submit Action
form.addEventListener("submit", (e) => {
    e.preventDefault();

    downloadBtn.innerText = "Processing...";
    downloadBtn.disabled = true;

    fetch(activationDownloadUrl, {
        method: "POST",
        body: new FormData(form),
    })
        .then((response) => response.json())
        .then((response) => {
            if (response.status == "success") {
                downloadBtn.innerText = response.message;
                setTimeout(function () {
                    downloadFiles(response.files);
                    setTimeout(function () {
                        newsLetterModal.style.visibility = "hidden";
                        if (scrollToDiv != undefined) {
                            document
                                .getElementById(scrollToDiv)
                                .scrollIntoView({
                                    behavior: "smooth",
                                    block: "start",
                                });
                        }
                        history.replaceState({}, "", "/");
                    }, 2000);
                }, 2000);
            } else {
                downloadBtn.innerText = response.message;
            }
        })
        .catch((error) => {
            downloadBtn.innerText = error.message;
        })
        .finally(() => {
            setTimeout(function () {
                form.reset();
                downloadBtn.disabled = true;
                downloadBtn.innerText = "Download";
            }, 4000);
        });
});

function downloadFiles(files) {
    files.forEach((url, index) => {
        const a = document.createElement("a");
        a.href = url;
        a.download = ""; // lets browser decide filename
        a.target = "_blank"; // helps Safari
        document.body.appendChild(a);

        // small delay to avoid popup blockers
        setTimeout(() => {
            a.click();
            a.remove();
        }, index * 300);
    });
}
