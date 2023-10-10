// slide timer *********************************************************************
const myCarouselElement= document.querySelector('#carouselExampleAutoplaying2')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
});