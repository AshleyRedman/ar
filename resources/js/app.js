require("./bootstrap");

import SmoothScroll from "smooth-scroll";
import LazyLoad from "vanilla-lazyload";

const scroll = new SmoothScroll('a[href*="#');
const ll = new LazyLoad({
    elements_selector: ".lazy",
    callback_loaded: el => {
        el.classList.remove("blur");
    }
});

window.onscroll = function() {
    scroller();
};

function scroller() {
    let winScroll =
        document.body.scrollTop || document.documentElement.scrollTop;
    let height =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    document.getElementById("scrollBar").style.width = scrolled + "%";
}
