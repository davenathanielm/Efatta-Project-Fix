let nexDom = document.getElementById('next');
let prevDom = document.getElementById('prev');
// karena yang dipilih class
let carouselDom = document.querySelector('.carousel');
let listItemDom = document.querySelector('.carousel .list');
let thumbnailDom = document.querySelector('.carousel .thumbnail');

nexDom.onclick = function(){
    showSlider('next')
}

prevDom.onclick = function(){
    showSlider('prev')
}

// ini buat ngilangin tulisan next nya 
let timerRunning = 2000;
let runTimeOut;

function showSlider(type){
    // ini untuk select sem
    let itemSlider = document.querySelectorAll('.carousel .list .item');
    let itemThumbnail = document.querySelectorAll('.carousel .thumbnail .item')

    // ini karena dibandingkan nya string jadi harus sama" string
    if(type == 'next'){
        listItemDom.appendChild(itemSlider[0]);
        thumbnailDom.appendChild(itemThumbnail[0]);
        carouselDom.classList.add('next');
    }
    else{
        let positionLastItem = itemSlider.length-1;
        listItemDom.prepend(itemSlider[positionLastItem]);
        thumbnailDom.prepend(itemThumbnail[positionLastItem]);
    }

    // ini untuk ngilangin class nya selama 3 detik
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(()=>{
        carouselDom.classList.remove('next');
    },timerRunning)

}