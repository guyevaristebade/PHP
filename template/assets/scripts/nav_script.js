const search_btn = document.querySelector('.search-btn');
const close_search_btn = document.querySelector('.close-search-btn');
const burger_toggle_btn = document.querySelector('.burger-toggle-btn');
const close_toggle_btn = document.querySelector('close-toggle-btn');

const search_box = document.querySelector('.search-box');
const menu_list = document.querySelector('.menu_list');
const icons = document.querySelector('.icons');


// évènement sur les boutons d'ouverture et de fermeture de la recherche
search_btn.addEventListener('click', () => {
    search_box.classList.add('active');
    icons.classList.add('active');
});

close_search_btn.addEventListener('click', () => {
    search_box.classList.remove('active');
    icons.classList.remove('active');
});