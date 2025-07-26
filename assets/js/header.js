
const headerBurgerButton = document.getElementById('header__content-menu-burger-button');
const headerMenu = document.getElementById('header__menu');
let isHeaderMenuOpen = false;



const openHeaderMenu = () => {
    isHeaderMenuOpen = true;

    headerBurgerButton.classList.add('is-open');

    document.body.style.overflow = 'hidden';
    gsap.set(headerMenu, { display: 'block' });
    gsap.to(headerMenu, { opacity: 1, duration: 0.3 });

    gsap.to('.header__menu-list li', {
        opacity: 1,
        y: 0,
        duration: 0.2,
        stagger: 0.1,
        delay: 0.3,
        onComplete: () => {
            gsap.to('.header__menu-content .lang-item', {
                opacity: 1,
                y: 0,
                duration: 0.2,
            });
        }
    });
}

const closeHeaderMenu = () => {
    isHeaderMenuOpen = false;
    
    headerBurgerButton.classList.remove('is-open');

    document.body.style.overflow = '';
    gsap.to(headerMenu, { opacity: 0, duration: 0.3, onComplete: () => {
        gsap.set(headerMenu, { display: 'none' });
    }});

    gsap.to('.header__menu-list li', {
        opacity: 0,
        y: 20,
        duration: 0,
        delay: 0.3,
    });
    gsap.to('.header__menu-content .lang-item', {
        opacity: 0,
        y: 20,
        duration: 0,
        delay: 0.3,
            });
}

const toggleHeaderMenu = (e) => {
    e.preventDefault();
    isHeaderMenuOpen ? closeHeaderMenu() : openHeaderMenu();
}

headerBurgerButton.addEventListener('click', toggleHeaderMenu);