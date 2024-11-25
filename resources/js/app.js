import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const menuIcon = document.getElementById('menu')
const menu = document.getElementById('navbar')
const searchIcon = document.getElementById('search-icon')
const search = document.getElementById('search')
const backToTopButton = document.querySelector('.back-to-top-btn')

// Add a click event listener to show the menu options
menuIcon.addEventListener('click', () => {
  menu.classList.toggle('nav-active')

  const iconFileName = menuIcon.src
  const lastFiveCharacter = iconFileName.substr(-11)

  // Diable the search
  if ((searchIcon.src = '../images/svg/cancel-icon.svg')) {
    search.classList.remove('search-active')
    searchIcon.src = '../images/svg/search-icon.svg'
  }

  lastFiveCharacter === 'nu-icon.svg'
    ? (menuIcon.src = '../images/svg/cancel-icon.svg')
    : (menuIcon.src = '../images/svg/menu-icon.svg')

  window.scrollTo
})

// Add a click event listener to show the search bar
searchIcon.addEventListener('click', () => {
  search.classList.toggle('search-active')

  const iconFileName = searchIcon.src
  const lastFiveCharacter = iconFileName.substr(-11)

  // Diable the menu
  if ((menuIcon.src = '../images/svg/cancel-icon.svg')) {
    menu.classList.remove('nav-active')
    menuIcon.src = '../images/svg/menu-icon.svg'
  }

  lastFiveCharacter === 'ch-icon.svg'
    ? (searchIcon.src = '../images/svg/cancel-icon.svg')
    : (searchIcon.src = '../images/svg/search-icon.svg')
})

// Add a scroll event listener to the window object
window.addEventListener('scroll', () => {
  const scrollTrigger = 100

  const scroolTop = window.pageYOffset || document.documentElement.scrollTop

  scroolTop > scrollTrigger
    ? backToTopButton.classList.add('show')
    : backToTopButton.classList.remove('show')
})

// Add a click event listener to the button element
backToTopButton.addEventListener('click', () => {
  // Scroll the window to the top of the page
  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  })
})

// Auto close the menu and search bar
  window.addEventListener('scroll', () => {
    const scrollTrigger = 10

    const scroolTop = window.pageYOffset || document.documentElement.scrollTop

    if (scroolTop > scrollTrigger) {
       menu.classList.remove('nav-active')
       menuIcon.src = '../images/svg/menu-icon.svg'
       search.classList.remove('search-active')
       searchIcon.src = '../images/svg/search-icon.svg'
    }
  })