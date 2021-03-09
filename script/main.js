// carusel
let arrOfPag = document.getElementsByClassName('pagNavSelf');
let arrOfNews = document.getElementsByClassName('newsSelf');
let caruselSelf = document.getElementById('carusel');
let widthCard = 349;
let count = 3;
let position = 0;

//TODO .style.marginleft либо - либо +
// убрать эти рамки на другой элемент

// install
for (let i = 0; i < arrOfPag.length; i++) {
    arrOfPag[i].addEventListener('click',carusel,false);
}
// function main
function carusel(e) {
    selection(e);
}
// additional func
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