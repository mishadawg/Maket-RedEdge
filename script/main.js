// carusel
let arrOfPag = document.getElementsByClassName('pagNavSelf');
let arrOfNews = document.getElementsByClassName('newsSelf');
let caruselSelf = document.getElementById('carusel');
let widthCard = 349;
let count = 3;
let position = 0;
// install
for (let i = 0; i < arrOfPag.length; i++) {
    arrOfPag[i].addEventListener('click',carusel,false);
}
// function main
function carusel(e) {
    selection(e);
    checkSelect();
}
function width() {
    return document.body.clientWidth;
}
function widthChange(slide) {
    switch (slide) {
    case 1:
        if(width() == 1440){
            caruselSelf.style.marginLeft = '0px';
        }else if(width() == 1024){
            caruselSelf.style.marginLeft = '0px';
        }else if(width() == 768){
            caruselSelf.style.marginLeft = '0px';
        }else{
            caruselSelf.style.marginLeft = '0px';
        }
    break;
    case 2:
        if(width() == 1440){
            caruselSelf.style.marginLeft = '-1145px';
        }else if(width() == 1024){
            caruselSelf.style.marginLeft = '-980px';
        }else if(width() == 768){
            caruselSelf.style.marginLeft = '-730px';
        }else{
            caruselSelf.style.marginLeft = '-1145px';
        }
    break;
    case 3:
        if(width() == 1440){
            caruselSelf.style.marginLeft = '-2315px';
        }else if(width() == 1024){
            caruselSelf.style.marginLeft = '-1985px';
        }else if(width() == 768){
            caruselSelf.style.marginLeft = '-1480px';
        }else{
            caruselSelf.style.marginLeft = '-2315px';
        }
    break;      
    }
   
}
// additional func
function checkSelect() {
    if (arrOfPag[0].classList.contains('selected') == true){
        widthChange(1)
    }else if (arrOfPag[1].classList.contains('selected') == true){
        widthChange(2)
    }else if (arrOfPag[2].classList.contains('selected') == true){
        widthChange(3)
    }  
}
function deletAllclasses() {
    for (let l = 0; l < arrOfPag.length; l++) { 
        arrOfPag[l].classList.remove('selected');
    }
}
function selection(e) {
    let selected = e.target.classList.contains('selected');
    if(selected == true){
        e.target.classList.remove('selected');
    }else if(selected == false){
        deletAllclasses();
        e.target.classList.add('selected');
    }
}