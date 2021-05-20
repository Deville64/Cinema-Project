'use strict'

var images = ['projector.jpg', 'xwing.jpg']
var index = 0
var indexMax = images.length - 1

// Initial picture
document.querySelector('#home-banner').src = './src/assets/image/slideShow/' + images[index]

// move to the next picture in the slide show
function slide() {
    console.log('next click')
    if (index == indexMax) {
        index = 0
        document.getElementById('home-banner').src = './src/assets/image/slideShow/' + images[index]
    } else {
        index++
        document.getElementById('home-banner').src = './src/assets/image/slideShow/' + images[index]
    }
}

function backSlide() {
    console.log('previous click')
    if (index == 0) {
        index = indexMax
        document.getElementById('home-banner').src = './src/assets/image/slideShow/' + images[index]
    } else {
        index--
        document.getElementById('home-banner').src = './src/assets/image/slideShow/' + images[index]
    }
}

//change picture every 5sec
setInterval(function () { slide() }, 5000);