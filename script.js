// CAROUSEL SLIDER

let currentSlide = 0;
const slides = document.querySelectorAll(".slider img");
const totalSlides = slides.length;

function showNextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  slides[currentSlide].scrollIntoView({ behavior: "smooth" });
}

setInterval(showNextSlide, 3000);

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
