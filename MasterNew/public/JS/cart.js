
for (var i = 0; i <10000; i++) {
const minusButton = document.querySelectorAll(".minus")[i];
const plusButton = document.querySelectorAll(".plus")[i];
const quantityInput = document.querySelectorAll(".quantity")[i];


minusButton.addEventListener("click", () => {
  if (parseInt(quantityInput.value) > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
});

plusButton.addEventListener("click", () => {
  quantityInput.value = parseInt(quantityInput.value) + 1;
});
}
