
document.addEventListener("DOMContentLoaded", function () {
    const headings = document.querySelectorAll("#cartHeading");

    headings.forEach((heading, index) => {
        const cartBody = heading.nextElementSibling;

        if (index === 0) {
            // Show only the first cart body by default
            cartBody.style.maxWidth = "749px";
            cartBody.style.padding = "1.75rem";
            cartBody.style.opacity = "1";
            cartBody.classList.remove("hidden");
        } else {
            // Hide all other cart bodies
            cartBody.style.maxWidth = "0";
            cartBody.style.padding = "0";
            cartBody.style.opacity = "0";
            cartBody.classList.add("hidden");
        }

        heading.addEventListener("click", function () {
            // Close all other cart bodies
            document.querySelectorAll("#cartBody").forEach((body) => {
                if (body !== cartBody) {
                    body.style.maxWidth = "0";
                    body.style.padding = "0";
                    body.style.opacity = "0";
                    body.classList.add("hidden");
                }
            });

            // Toggle the clicked cart body
            if (cartBody.classList.contains("hidden")) {
                cartBody.classList.remove("hidden");
                setTimeout(() => {
                    cartBody.style.maxWidth = "749px";
                    cartBody.style.padding = "1.75rem";
                    cartBody.style.opacity = "1";
                }, 10);
            }
        });
    });
});


// counter section
        // Counter animation function
        function animateCounter(id, target) {
            const counter = document.getElementById(id);
            let start = 0;
            const speed = Math.ceil(target / 100); // Adjust speed by dividing target value

            const updateCounter = () => {
                if (start < target) {
                    start += speed;
                    counter.textContent = start + "K+";
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + "K+"; // Ensure the final value is displayed
                }
            };

            updateCounter();
        }

        // Start counters when page loads
        window.addEventListener('DOMContentLoaded', () => {
            animateCounter('counter1', parseInt(document.getElementById('counter1').dataset.target));
            animateCounter('counter2', parseInt(document.getElementById('counter2').dataset.target));
            animateCounter('counter3', parseInt(document.getElementById('counter3').dataset.target));
        });


        // home course slider

        document.addEventListener("DOMContentLoaded", function () {
            const items = document.querySelectorAll(".term_item");
            const links = document.querySelectorAll(".term_links");
    
            // Hide all items except the first one
            items.forEach((item, index) => {
                item.style.display = index === 0 ? "block" : "none";
                item.style.opacity = index === 0 ? "1" : "0";
                item.style.transition = "opacity 0.5s ease";
            });
    
            // Add click event to each link
            links.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
    
                    // Get target ID from href
                    const targetId = this.getAttribute("href").substring(1);
    
                    // Hide all items and show the clicked one with transition
                    items.forEach(item => {
                        if (item.id === targetId) {
                            item.style.display = "block";
                            setTimeout(() => item.style.opacity = "1", 5);
                        } else {
                            item.style.opacity = "0";
                            setTimeout(() => item.style.display = "none");
                        }
                    });
                });
            });
        });
    