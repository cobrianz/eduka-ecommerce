











// account section js
document.addEventListener("DOMContentLoaded", function () {
    const asideSpans = document.querySelectorAll('.aside__span');
    const mainSections = document.querySelectorAll('.main');
    const viewOrderLinks = document.querySelectorAll('.my__orders a');

    // Function to remove 'active-aside__span' class from all spans
    const removeActiveClass = () => {
        asideSpans.forEach(s => s.classList.remove('active-aside__span'));
    };

    asideSpans.forEach((span, index) => {
        span.addEventListener('click', () => {
            removeActiveClass();
            span.classList.add('active-aside__span');
            mainSections.forEach(section => section.style.display = 'none');
            mainSections[index].style.display = 'block';
        });
    });

    viewOrderLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            removeActiveClass();
            mainSections.forEach(section => section.style.display = 'none');
            const orderDetailsIndex = mainSections.length - 1; // Assuming order details is the last section
            mainSections[orderDetailsIndex].style.display = 'block';
        });
    });

    // Set default open section (Personal Information)
    const defaultSectionIndex = 0;
    asideSpans[defaultSectionIndex].classList.add('active-aside__span');
    mainSections.forEach((section, index) => {
        section.style.display = index === defaultSectionIndex ? 'block' : 'none';
    });
});


