const gymWordPress = () => {
  // BURGER MENU
  const burger = document.querySelector(".burger-menu svg");

  const handleClick = () => {
    const menuContainer = document.querySelector(".menu-container");
    menuContainer.classList.toggle("show");
  };

  burger.addEventListener("click", handleClick);

  // HERO LETTERS ANIMATION
  // Wrap every letter in a span
  const textWrapper = document.querySelector(".ml2");

  if (textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(
      /\S/g,
      "<span class='letter'>$&</span>"
    );

    anime
      .timeline({ loop: true })
      .add({
        targets: ".ml2 .letter",
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70 * i
      })
      .add({
        targets: ".ml2",
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 10000
      });
  }

  if (document.querySelector(".swiper")) {
    const options = {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 3000
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    };
    const swiper = new Swiper(".swiper", options);
    return swiper;
  }
};

document.addEventListener("DOMContentLoaded", gymWordPress);

// SCROLL WATCHER
window.onscroll = () => {
  const scroll = window.scrollY;
  const navBar = document.querySelector(".nav-bar");

  if (scroll > 100) {
    navBar.classList.add("fixed-top");
  } else {
    navBar.classList.remove("fixed-top");
  }
};
