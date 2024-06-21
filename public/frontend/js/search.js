
const drops = document.querySelectorAll('.dropdown');

drops.forEach(element => {
    const select = element.querySelector('.select');
    const caret = element.querySelector('.caret');
    const menu = element.querySelector('.menu');
    const options = element.querySelectorAll('.menu li');
    const selected = element.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });

    options.forEach((option) => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            selected.classList.add("text-fade-in");
            setTimeout(() => {
                selected.classList.remove("text-fade-in");
            }, 300);
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            options.forEach(option => {
                option.classList.remove('active');
            })
            option.classList.add('active');
        })
    })

    window.addEventListener('click', e => {
        const size = element.getBoundingClientRect();
        if (e.clientX < size.left || e.clientX > size.right || e.clientY < size.top || e.clientY > size.bottom) {
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
        }
    })

});
