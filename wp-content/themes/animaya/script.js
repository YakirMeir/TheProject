




if(window.innerWidth > 500){
    document.querySelector('.all-the-header-flex').style.height = (window.innerHeight - 120)+'px';

}
var functionAllTheDocs = document.querySelectorAll('.all-the-slider-box .all-the-slider .slick-dots li'), i;
    
for (var z = 0; z < functionAllTheDocs.length; ++z) {
    functionAllTheDocs[z].innerHTML = '';
}



document.querySelector('.all-the-fly-contact .contact').onclick = function(){

    var theValue = document.querySelector(".all-the-image-icons-block3").offsetTop + 530;
    window.scrollTo(0, theValue);

}

document.querySelector('.all-the-header-flex .the-title-4').onclick = function(){

    var theValue = document.querySelector(".all-the-image-icons").offsetTop;
    window.scrollTo(0, theValue);
    
}