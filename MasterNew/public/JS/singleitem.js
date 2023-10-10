function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
  }


document.addEventListener("DOMContentLoaded", function() {
    var dateInput = document.getElementById("date");
    
    // Calculate the date after two days from today
    var today = new Date();
    var twoDaysFromNow = new Date(today);
    twoDaysFromNow.setDate(today.getDate() + 2);
    
    // Format the date as "YYYY-MM-DD" for input's value
    var formattedDate = twoDaysFromNow.toISOString().split("T")[0];
    
    // Set the default value and minimum value for the input
    dateInput.value = formattedDate;
    dateInput.min = formattedDate;
      
      // Set the range start and end dates
      var startDate = new Date("2023-09-05");
      var endDate = new Date("2023-09-08");
      
      // Listen for the input's change event
      dateInput.addEventListener("change", function() {
        var selectedDate = new Date(dateInput.value);
        
        // Check if the selected date is within the restricted range
        if (selectedDate >= startDate && selectedDate <= endDate) {
          // Reset the input value to an empty string
          dateInput.value = "";
          
          // Optionally, you can provide a warning message to the user
          alert("Please select a date outside the restricted range.");
        }
      });
    });






// RELATED PHOTO
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





