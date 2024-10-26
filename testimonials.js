document.addEventListener("DOMContentLoaded", () => {
  const testimonials = [
    {
      name: "hiah",
      job: "ceo",
      image: "./assets/model-5.jpg",
      testimonial:
        "Testimoni adalah pernyataan dari pelanggan yang berisi kesan atau pengalamannya terhadap produk atau jasa yang dibelinya. Testimoni bisa berupa pernyataan lisan atau tertulis yang memuji atau merekomendasikan produk atau layanan.",
    },
    {
      name: "hiah",
      job: "ceo",
      image: "./assets/model-5.jpg",
      testimonial: "lorem ipsujddjsoinvoubvbvneronvreovbnorn",
    },
    {
      name: "hiah",
      job: "ceo",
      image: "./assets/model-5.jpg",
      testimonial:
        "Dalam konteks bisnis, pengertian testimoni adalah pernyataan rasa puas atau tidak puas pelanggan terhadap pengalaman transaksi dengan suatu brand. Pengalaman tersebut mencakup pelayanan serta kualitas dari barang yang dibeli",
    },
    // Tambahkan item lainnya sesuai kebutuhan
  ];

  // Current slide
  let i = 0;
  const j = testimonials.length;

  const testimonialContainer = document.getElementById("testimonial-container");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");

  const displayTestimonial = () => {
    testimonialContainer.innerHTML = `
        <p>${testimonials[i].testimonial}</p>
        <img src="${testimonials[i].image}" alt="${testimonials[i].name}">
        <h3>${testimonials[i].name}</h3>
        <h6>${testimonials[i].job}</h6>
      `;
  };

  nextBtn.addEventListener("click", () => {
    i = (i + 1) % j;
    displayTestimonial();
  });

  prevBtn.addEventListener("click", () => {
    i = (i - 1 + j) % j; // Menangani nilai negatif dengan penambahan `j`
    displayTestimonial();
  });

  // Inisialisasi tampilan pertama kali
  displayTestimonial();
});
