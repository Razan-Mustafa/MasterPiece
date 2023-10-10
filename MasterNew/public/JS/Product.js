let dropdown = document.getElementsByClassName("dropdown-btn");
let i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

// for (i = 0; i < dropicon.length; i++) {
//   dropicon[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var dropiconContent = this.nextElementSibling;
//     if (dropiconContent.style.display === "block") {
//       dropiconContent.style.display = "none";

//     } else {
//       dropiconContent.style.display = "block";

//     }
//   });
// }


document.addEventListener("DOMContentLoaded", function() {
  for (let i = 0; i <7 ; i++) {
  let dropdownBtn = document.querySelectorAll(".dropdown-btn")[i];
  let dropdownContainers = document.querySelectorAll(".dropdown-container")[i];
  let dropicon = document.querySelectorAll(".dropicon")[i];

      dropdownBtn.addEventListener("click", function() {
          if (dropdownContainers.style.maxHeight) {
            dropdownContainers.style.maxHeight = null;
              dropicon.innerHTML = `<i class="fa-solid fa-plus fa-lg" style="color: #fffbf2;"></i>`

          } else {
            dropdownContainers.style.maxHeight = dropdownContainers.scrollHeight + "px";
              dropicon.innerHTML = `<i class="fa-solid fa-minus fa-lg" style="color: #fffbf2;"></i>`

          }
      
  });
};
});

// product  card *******************************************************************
document.addEventListener("DOMContentLoaded", function () {
    const clickableHearts = document.querySelectorAll(".clickable-heart");

    clickableHearts.forEach(function (heartIcon) {
        heartIcon.addEventListener("click", function () {
            if (heartIcon.classList.contains("fa-regular")) {
                heartIcon.classList.remove("fa-regular");
                heartIcon.classList.add("fa-solid");
                heartIcon.style.color = "red"; // You can change the color if needed
            } else {
                heartIcon.classList.remove("fa-solid");
                heartIcon.classList.add("fa-regular");
                heartIcon.style.color = "#513d2f"; // Restore the original color
            }
        });
    });
});



