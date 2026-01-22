const emailInput = document.getElementById("emailInput");
const downloadBtn = document.getElementById("downloadBtn");
const emailError = document.getElementById("emailError");
const form = document.getElementById("subscriptionForm");

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
                downloadFiles(response.files, () => {
                    window.location.href = siteUrl;
                });
                form.reset();
            } else {
                downloadBtn.innerText = response.message;
            }
        })
        .catch((error) => {
            downloadBtn.innerText = error.message;
        })
        .finally(() => {
            setTimeout(function () {
                downloadBtn.disabled = false;
                downloadBtn.innerText = "Download";
            }, 4000);
        });
});

function downloadFiles(files, onDone) {
    files.forEach((url, index) => {
        const a = document.createElement("a");
        a.href = url;
        a.download = "";
        a.target = "_blank";
        document.body.appendChild(a);

        setTimeout(() => {
            a.click();
            a.remove();

            // after last file is triggered
            if (index === files.length - 1 && onDone) {
                setTimeout(onDone, 500);
            }
        }, index * 300);
    });
}
