const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown =>{
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });
    options.forEach(option => {
        option.addEventListener('click', () => {
            select.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            options.forEach(option => {
                option.classList.remove('active');
            });
            option.classList.add('active');
        });
    });
});



const dropdowns1 = document.querySelectorAll('.dropdown1');

dropdowns1.forEach(dropdown =>{
    const select = dropdown.querySelector('.select1');
    const caret = dropdown.querySelector('.caret1');
    const menu = dropdown.querySelector('.menu1');
    const options = dropdown.querySelectorAll('.menu1 li');
    const selected = dropdown.querySelector('.selected1');

    select.addEventListener('click', () => {
        select.classList.toggle('select1-clicked');
        caret.classList.toggle('caret1-rotate');
        menu.classList.toggle('menu1-open');
    });
    options.forEach(option => {
        option.addEventListener('click', () => {
            select.innerText = option.innerText;
            select.classList.remove('select1-clicked');
            caret.classList.remove('caret1-rotate');
            menu.classList.remove('menu1-open');
            options.forEach(option => {
                option.classList.remove('active1');
            });
            option.classList.add('active1');
        });
    });
});


const dropdowns2 = document.querySelectorAll('.dropdown2');

dropdowns2.forEach(dropdown =>{
    const select = dropdown.querySelector('.select2');
    const caret = dropdown.querySelector('.caret2');
    const menu = dropdown.querySelector('.menu2');
    const options = dropdown.querySelectorAll('.menu2 li');
    const selected = dropdown.querySelector('.selected2');

    select.addEventListener('click', () => {
        select.classList.toggle('select2-clicked');
        caret.classList.toggle('caret2-rotate');
        menu.classList.toggle('menu2-open');
    });
    options.forEach(option => {
        option.addEventListener('click', () => {
            select.innerText = option.innerText;
            select.classList.remove('select2-clicked');
            caret.classList.remove('caret2-rotate');
            menu.classList.remove('menu2-open');
            options.forEach(option => {
                option.classList.remove('active2');
            });
            option.classList.add('active2');
        });
    });
});

const dropdowns3 = document.querySelectorAll('.dropdown3');

dropdowns3.forEach(dropdown =>{
    const select = dropdown.querySelector('.select3');
    const caret = dropdown.querySelector('.caret3');
    const menu = dropdown.querySelector('.menu3');
    const options = dropdown.querySelectorAll('.menu3 li');
    const selected = dropdown.querySelector('.selected3');

    select.addEventListener('click', () => {
        select.classList.toggle('select3-clicked');
        caret.classList.toggle('caret3-rotate');
        menu.classList.toggle('menu3-open');
    });
    options.forEach(option => {
        option.addEventListener('click', () => {
            select.innerText = option.innerText;
            select.classList.remove('select3-clicked');
            caret.classList.remove('caret3-rotate');
            menu.classList.remove('menu3-open');
            options.forEach(option => {
                option.classList.remove('active3');
            });
            option.classList.add('active3');
        });
    });
});

const dropdowns4 = document.querySelectorAll('.dropdown4');

dropdowns4.forEach(dropdown =>{
    const select = dropdown.querySelector('.select4');
    const caret = dropdown.querySelector('.caret4');
    const menu = dropdown.querySelector('.menu4');
    const options = dropdown.querySelectorAll('.menu4 li');
    const selected = dropdown.querySelector('.selected4');

    select.addEventListener('click', () => {
        select.classList.toggle('select4-clicked');
        caret.classList.toggle('caret4-rotate');
        menu.classList.toggle('menu4-open');
    });
    options.forEach(option => {
        option.addEventListener('click', () => {
            select.innerText = option.innerText;
            select.classList.remove('select4-clicked');
            caret.classList.remove('caret4-rotate');
            menu.classList.remove('menu4-open');
            options.forEach(option => {
                option.classList.remove('active4');
            });
            option.classList.add('active4');
        });
    });
});

