

//script to hide and display the content on click on about us page 

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".content-item");
    const links = document.querySelectorAll(".content-link");

    // Hide all items except the first one
    items.forEach((item, index) => {
        item.style.display = index === 0 ? "block" : "none"; //show only first item others display none
        item.style.opacity = index === 0 ? "1" : "0"; // add opacity on first item other display none
        item.style.transition = "opacity 0.5s ease"; // add transition on all item
    });

    // Add click event to each link
    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); //prevent defualt behavoiur of a tag

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

//script to add on click funtionality on quality section about us last section

document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.quality-link');
    const sections = document.querySelectorAll('.quality_right');

    links.forEach(link => {
        link.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');

            sections.forEach(section => {
                if (section.id === targetId) {
                    section.style.display = 'block';
                    setTimeout(() => section.style.opacity = '1', 10);
                } else {
                    section.style.opacity = '0';
                    setTimeout(() => section.style.display = 'none');
                }
            });

            // Update active link border
            links.forEach(l => l.querySelector('.active_link').classList.remove('border-l-4', 'border-black'));
            this.querySelector('.active_link').classList.add('border-l-4', 'border-[#4C782B]');
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".policy_items");
    const links = document.querySelectorAll(".privacy_links");

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
