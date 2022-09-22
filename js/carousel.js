const slider = document.querySelector('#slider-wrapper')
let sliderSection = document.querySelectorAll('.slider-section')
let lastSlider = sliderSection[sliderSection.length-1]

const btnLeft = document.querySelector('#btn-left')
const btnRight = document.querySelector('#btn-right')

slider.insertAdjacentElement('afterbegin', lastSlider)

const nextSlider = () => {
    let firstSlider = document.querySelectorAll(".slider-section")[0]
    slider.style.marginLeft = "-200%"
    slider.style.transition = "all .5s"
    setTimeout(() => {
        slider.style.transition = "none"
        slider.insertAdjacentElement('beforeend',firstSlider)
        slider.style.marginLeft = "-100%"
    }, 500);
}

const previousSlider = () => {
    let sliderSection = document.querySelectorAll('.slider-section')
    let lastSlider = sliderSection[sliderSection.length-1]
    slider.style.marginLeft = "0"
    slider.style.transition = "all .5s"
    setTimeout(() => {
        slider.style.transition = "none"
        slider.insertAdjacentElement('afterbegin', lastSlider)
        slider.style.marginLeft = "-100%"
    }, 500);
}

btnRight.addEventListener('click', nextSlider)
btnLeft.addEventListener('click', previousSlider)

setInterval(() => {
    nextSlider()
}, 5000);
