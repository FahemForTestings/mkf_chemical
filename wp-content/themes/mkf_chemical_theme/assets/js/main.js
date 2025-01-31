/*
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".wp-block-group");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add("animate");
                    }, index * 150); // Adds a small delay for a cascading effect
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );

    elements.forEach((element) => observer.observe(element));
});
*/

document.getElementById('current-year').textContent = new Date().getFullYear();