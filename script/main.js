// carusel
let arrOfPag = document.getElementsByClassName('pagNavSelf');
let arrOfNews = document.getElementsByClassName('newsSelf');
// install
for (let i = 0; i < arrOfPag.length; i++) {
    arrOfPag[i].addEventListener('click',carusel,false);
}
// functions
function carusel(e) {
    selection(e);
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
