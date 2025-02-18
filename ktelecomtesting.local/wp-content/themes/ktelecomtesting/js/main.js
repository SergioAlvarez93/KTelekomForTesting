const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 1.5,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 2.5,
      spaceBetween: 28,
    },
  },
});

function handleButtonClick(event) {
  const buttons = document.querySelectorAll(".pricing-card__btn");

  buttons.forEach((button) => {
    button.classList.remove("active-btn");
  });

  event.target.classList.add("active-btn");
}

function initButtons() {
  const buttons = document.querySelectorAll(".pricing-card__btn");

  if (buttons.length > 1) {
    buttons[1].classList.add("active-btn");
  } else if (buttons.length === 1) {
    buttons[0].classList.add("active-btn");
  }

  buttons.forEach((button) => {
    button.addEventListener("click", handleButtonClick);
  });
}

document.addEventListener("DOMContentLoaded", initButtons);
