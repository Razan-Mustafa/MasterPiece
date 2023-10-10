
// slide timer *********************************************************************
// const myCarouselElement = document.querySelector('#carouselExampleAutoplaying')

// const carousel = new bootstrap.Carousel(myCarouselElement, {
//   interval: 2500,
//   touch: false
// });
// public/js/my-script.js

document.addEventListener("DOMContentLoaded", function () {
  const container2 = document.getElementById("female");

  container2.addEventListener("click", function () {
      const content = document.createElement("div");
      content.classList.add("categories-container");
      
      categoriesFemale.forEach((category) => {
          const categoryContainer = document.createElement("div");
          categoryContainer.classList.add("category");
          
          // Create an image element
          const image = document.createElement("img");
          image.src = `photos/${category.image}`;
          image.alt = category.name;
          image.classList.add("category-image");
      
          // Create a text element
          const text = document.createElement("div");
          text.textContent = category.name;
      
          // Create a link element
          const link = document.createElement("a");
          link.href = categoryUrlsFemale[category.id];
          link.classList.add("category-link");
      
          // Append the image and text to the container
          categoryContainer.appendChild(image);
          categoryContainer.appendChild(text);
      
          // Append the link to the container
          link.appendChild(categoryContainer);
      
          // Append the link to the content
          content.appendChild(link);
      });

      // Trigger the SweetAlert with the generated content
      Swal.fire({
          title: "Categories:",          
          html: content, // Set the SweetAlert content as the generated HTML
          showConfirmButton: false ,// Don't show a confirm button
          width: "70%",
      });
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const container1 = document.getElementById("male");

  container1.addEventListener("click", function () {
      const content = document.createElement("div");
      content.classList.add("categories-container");
      
      categoriesMale.forEach((category) => {
          const categoryContainer = document.createElement("div");
          categoryContainer.classList.add("category");
          
          // Create an image element
          const image = document.createElement("img");
          image.src = `photos/${category.image}`;
          image.alt = category.name;
          image.classList.add("category-image");
      
          // Create a text element
          const text = document.createElement("div");
          text.textContent = category.name;
      
          // Create a link element
          const link = document.createElement("a");
          link.href = categoryUrlsMale[category.id];
          link.classList.add("category-link");
      
          // Append the image and text to the container
          categoryContainer.appendChild(image);
          categoryContainer.appendChild(text);
      
          // Append the link to the container
          link.appendChild(categoryContainer);
      
          // Append the link to the content
          content.appendChild(link);
      });

      // Trigger the SweetAlert with the generated content
      Swal.fire({
          title: "Categories:",          
          html: content, // Set the SweetAlert content as the generated HTML
          showConfirmButton: false ,// Don't show a confirm button
          width: "70%",
      });
  });
});


// gender function *********************************************************************

// let female = document.getElementById("female");
// let male = document.getElementById("male");

// let isFemaleStateActive = false;
// let isMaleStateActive = false;



// function femalefunction() {
   
//     if (isFemaleStateActive) {
//         male.classList.add("animation3");
//         contanier_img.classList.add("animation2");
//         female.classList.remove("selectgender");
      

//         femaleTimeout = setTimeout(function() {
//         male.innerHTML = `
//         <div id="male" class="column2">
//             <div class="container2">
//                 <img src="../photos/catamen.jpeg" alt="Male" class="image">
//                 <div class="text">Male</div>
//                 <div class="overlay">
//                   <div class="text">Hello men To ModaRenta </div>
//                 </div>
//               </div>
//         </div>
//         `;
//       }, 200);
//       male.onclick = malefunction;
    
//     } else {
//       female.classList.add("selectgender");
//       male.classList.remove("animation");



//         contanier = document.createElement('div');
//         contanier.classList.add("container2");

//         contanier_img = document.createElement('div');
//         contanier_img.classList.add("img4");
//         contanier_img.classList.add("animation");

    
//         contanier_img.innerHTML = `
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/wo1.PNG" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/wo2.jpg" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/wo3.jpg" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/woacc.jpg" alt="Female" class="image" style="height:240px !important"></a></div>
//         `;

//         contanier.appendChild(contanier_img);
     
//         male.innerHTML = "";
//         male.appendChild(contanier);
//         male.onclick = "";
//     }
//     isFemaleStateActive = !isFemaleStateActive;
    
// }
// female.onclick = femalefunction;








// function malefunction() {
//     if (isMaleStateActive) {
//       female.classList.add("animation3");
//       contanier_img.classList.add("animation2");
//       male.classList.remove("selectgender");

//         maleTimeout = setTimeout(function() {
//         female.innerHTML = `
//         <div id="female" class="column2">
//             <div class="container2">
//                 <img src="../photos/cata5-transformed-transformed.jpeg" alt="Female" class="image">
//                 <div class="text">Female</div>
//                 <div class="overlay">
//                   <div class="text">Hello girl To ModaRenta</div>
//                 </div>
//               </div>
//         </div>
//         `;
//       }, 200);
//       female.onclick = femalefunction;
//     } else {
//         male.classList.add("selectgender")
//         female.classList.remove("animation");


//         contanier = document.createElement('div');
//         contanier.classList.add("container2");

//         contanier_img = document.createElement('div');
//         contanier_img.classList.add("img4");
//         contanier_img.classList.add("animation");

    
//         contanier_img.innerHTML = `
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/su3.PNG" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/su5.PNG" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/su8.jpg" alt="Female" class="image" style="height:240px !important"></a></div>
//         <div class="column3 imgcata"><a href="../html/login.html"><img src="../photos/manacc.jpg" alt="Female" class="image" style="height:240px !important"></a></div>
//         `;

//         contanier.appendChild(contanier_img);
     
//         female.innerHTML = "";
//         female.appendChild(contanier);
//         female.onclick = "";
//     }
//     isMaleStateActive = !isMaleStateActive;
// }

// male.onclick = malefunction;



// NEW ARRIVLE *********************************************************************
const carousel1 = document.querySelector('.carousel1');
const carouselItems = document.querySelectorAll('.carousel-item1');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;
const itemsPerPage = 5; // Number of items to show at a time

function updateCarousel() {
  const maxIndex = carouselItems.length - itemsPerPage;
  currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));
  carousel1.style.transform = `translateX(-${currentIndex * (100 / itemsPerPage)}%)`;
}

prevButton.addEventListener('click', () => {
  currentIndex -= 1;
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  currentIndex += 1;
  updateCarousel();
});

updateCarousel(); // Initialize carousel position



// js library




























