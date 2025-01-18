document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = document.querySelectorAll('.custom-dropdown');

    dropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('.dropdown-button');
        const menu = dropdown.querySelector('.dropdown-menu');
        const options = dropdown.querySelectorAll('.dropdown-option');

        button.addEventListener('click', function (event) {
            event.stopPropagation();
            dropdowns.forEach(d => { 
                d.querySelector('.dropdown-menu').style.display = 'none';
                d.querySelector('.dropdown-button').classList.remove('dropdown-open');
            });
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';

            button.classList.add('dropdown-open');
        });

        options.forEach(option => {
            option.addEventListener('click', function () {
                options.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');

                button.textContent = option.textContent;

                button.classList.remove('dropdown-open');
                menu.style.display = 'none';
                filterProjects()
            });
        });
    });

    document.addEventListener('click', function () {
        dropdowns.forEach(dropdown => {
            dropdown.querySelector('.dropdown-menu').style.display = 'none';
            dropdown.querySelector('.dropdown-button').classList.remove('dropdown-open');
        });
    });
});
