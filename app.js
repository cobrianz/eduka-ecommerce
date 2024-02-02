(function () {
    const asideSpans = document.querySelectorAll('.aside__span');
    const contentDivs = document.querySelectorAll('.main > div');

    asideSpans.forEach(function (span, index) {
        span.addEventListener('click', function () {
            // Hide all content divs
            contentDivs.forEach(function (div) {
                div.style.display = 'none';
            });

            // Show the corresponding content div
            contentDivs[index].style.display = 'flex';

            // Remove "active-btn" class from all spans
            asideSpans.forEach(function (s) {
                s.classList.remove('active-aside__span');
            });

            // Add "active-aside__span" class to the clicked span
            this.classList.add('active-aside__span');
        });
    });
})();
