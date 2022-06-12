function menuShow(){
    let menuMobile = document.querySelector('.menu-mobile');

    if (menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "./img/menu_white_36dp.svg"; 
        exibir();
    }else{
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "./img/close_white_36dp.svg";
        menuMobile = true;
        ocultar();
    }

}

function exibir() {
    document.getElementById("logo-imagem").style.display = "block";
}

function ocultar() {
    document.getElementById("logo-imagem").style.display = "none";
}

function ocultarExibir() {

}
menuShow();  

 