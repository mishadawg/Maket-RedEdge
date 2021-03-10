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
// additional func
function checkSelect() {
    if (arrOfPag[0].classList.contains('selected') == true){
        caruselSelf.style.marginLeft = '0px';
    }else if (arrOfPag[1].classList.contains('selected') == true){
        caruselSelf.style.marginLeft = '-1145px';
    }else if (arrOfPag[2].classList.contains('selected') == true){
        caruselSelf.style.marginLeft = '-2315px';
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