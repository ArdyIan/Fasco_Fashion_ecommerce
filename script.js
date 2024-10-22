// CAROUSEL SLIDER

// let currentSlide = 0;
// const slides = document.querySelectorAll(".slider img");
// const totalSlides = slides.length;

// function showNextSlide() {
//   currentSlide = (currentSlide + 1) % totalSlides;
//   slides[currentSlide].scrollIntoView({ behavior: "smooth" });
// }

// setInterval(showNextSlide, 3000);

// NEW ARRIVALS

//select all filter buttons and filterable cards
const filterButtons = document.querySelectorAll(".filter-button button");
const filterableCards = document.querySelectorAll(".filterable-cards .card");

//define the filterablecards function
const filterCards = (e) => {
  document.querySelector(".active").classList.remove("active");
  e.target.classList.add("active");

  //iterate over each filterable card
  filterableCards.forEach((card) => {
    card.classList.add("hide");

    //check if card matches the selected filter or all is selected
    if (card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all") {
      card.classList.remove("hide");
    }
  });
};

//add click event listener to each filter button
filterButtons.forEach((button) => button.addEventListener("click", filterCards));

//FOLLOW ON INSTAGRAM

const galleryContainer = document.querySelector(".gallery-container");
const galleryControlsContainer = document.querySelector(".gallery-controls");
const galleryControls = ["previous", "next"];
const galleryItems = document.querySelectorAll(".gallery-item");

class Carousel {
  constructor(container, items, controls) {
    this.carouselContainer = container;
    this.carouselControls = controls;
    this.carouselArray = [...items];
  }

  updateGallery() {
    this.carouselArray.forEach((el) => {
      el.classList.remove("gallery-item-1");
      el.classList.remove("gallery-item-2");
      el.classList.remove("gallery-item-3");
      el.classList.remove("gallery-item-4");
      el.classList.remove("gallery-item-5");
      el.classList.remove("gallery-item-6");
    });

    this.carouselArray.slice(0, 5).forEach((el, i) => {
      el.classList.add(`gallery-item-${i + 1}`);
    });
  }

  setCurrentState(direction) {
    if (direction.className === "gallery-controls-previous") {
      this.carouselArray.unshift(this.carouselArray.pop());
    } else {
      this.carouselArray.push(this.carouselArray.shift());
    }
    this.updateGallery();
  }

  setControls() {
    this.carouselControls.forEach((control) => {
      galleryControlsContainer.appendChild(document.createElement("button")).className = `gallery-controls-${control}`;
      document.querySelector(`.gallery-controls-${control}`).innerText = control;
    });
  }

  useControls() {
    const triggers = [...galleryControlsContainer.childNodes];
    triggers.forEach((control) => {
      control.addEventListener("click", (e) => {
        e.preventDefault();
        this.setCurrentState(control);
      });
    });
  }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.useControls();
