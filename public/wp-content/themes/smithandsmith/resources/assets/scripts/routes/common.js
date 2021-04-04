export default {
  init() {
    // JavaScript to be fired on all pages

    const hamburger = document.querySelector('#hamburger');
    const close = document.querySelector('#close');
    const slideOutMenu = document.querySelector('.slide-out-menu');
    hamburger.addEventListener('pointerdown', () => {
      slideOutMenu.classList.add('active');
    })

    close.addEventListener('pointerdown', () => {
      slideOutMenu.classList.remove('active');
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
