import SmoothScroll from 'smooth-scroll';
import LazyLoad from 'vanilla-lazyload';

const loader = document.querySelector('.loader');
const tagName = document.querySelector('.tag-name');
window.addEventListener('DOMContentLoaded', (e) => {
    setTimeout(() => {
        loader.classList.add('opacity-0');
    }, 1000);
    if (tagName) {
        setTimeout(() => {
            tagName.classList.add('w-auto', 'pl-2', 'pr-2');
        }, 2000);
    }
});

const scroll = new SmoothScroll('a[href*="#');
const ll = new LazyLoad({
    elements_selector: '.lazy',
    callback_loaded: (el) => {
        el.classList.remove('blur');
    },
});

window.onscroll = function () {
    scroller();
};

function scroller() {
    let winScroll =
        document.body.scrollTop || document.documentElement.scrollTop;
    let height =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    document.getElementById('scrollBar').style.width = scrolled + '%';
}

const nav = document.querySelector('.mobile');
const burger = document.querySelector('.burger');
const navItem = document.querySelectorAll('.mobile-item');

function toggleMenu(e) {
    nav.classList.toggle('translate-x-full');
}

burger.addEventListener('click', (e) => toggleMenu(e));

navItem.forEach((i) => i.addEventListener('click', (e) => toggleMenu(e)));
