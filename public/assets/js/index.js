
const yearDiv = document.getElementById("y");
if (yearDiv) {
    yearDiv.textContent = new Date().getFullYear();
}

const typedEl = document.getElementById("typed");

if (typedEl) {
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Start Typed.js only when visible
                    new Typed("#typed", {
                        strings: [
                            "Your <span class='text-color'>Love</span> Story Becomes a Bestseller",
                        ],
                        typeSpeed: 50,
                        backSpeed: 50,
                        backDelay: 1000,
                        showCursor: false,
                        loop: false,
                        contentType: "html",
                    });
                    observer.unobserve(entry.target); // Stop observing after triggered
                }
            });
        },
        { threshold: 0.5 },
    ); // Trigger when 50% of element is visible

    observer.observe(typedEl);
}

// var typed = new Typed('#typed', {
//     strings: ["<span class='text-color'>Who</span> You'll Become"],   // The text to type
//     typeSpeed: 100,     // Typing speed in milliseconds
//     backSpeed: 50,
//     backDelay: 1000,
//     showCursor: false,
//     // Backspace speed
//     loop: false        // Set to true to loop typing
// });
document.addEventListener(
    "click",
    function () {
        const video = document.getElementById("heroVideo");
        video.muted = true;
        video.play();
    },
    { once: true },
);

document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".nav-toggle");
    const navLinks = document.querySelector(".nav-links");

    const menuItems = document.querySelectorAll(".nav-links a");

    toggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });

    menuItems.forEach((item) => {
        item.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    });
});

function sendContactForm(event) {
    event.preventDefault();

    const errorSpan = document.getElementById("contactformerror");
    const successSpan = document.getElementById("contactformsuccess");
    const sendButton = document.getElementById("contactformsend");

    sendButton.disabled = true;
    sendButton.innerText = "Sending...";

    successSpan.style.display = "none";
    errorSpan.style.display = "none";

    errorSpan.innerText = "";
    successSpan.innerText = "";

    const form = event.target;
    const formData = new FormData(form);

    fetch(`${siteUrl}/contact`, {
        method: "POST",
        body: formData,
    })
        .then((response) => response.json())
        .then((response) => {
            if (response.status == "success") {
                successSpan.innerText = response.message;
                successSpan.style.display = "block";
                form.reset();
            } else {
                errorSpan.innerText = response.message;
                errorSpan.style.display = "block";
            }
        })
        .catch((error) => {
            errorSpan.innerText = error.message;
            errorSpan.style.display = "block";
        })
        .finally(() => {
            sendButton.disabled = false;
            sendButton.innerText = "Send Inquiry";
        });
}
