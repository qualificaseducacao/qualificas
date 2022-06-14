function menuShow(){
    let menuMobile = document.querySelector('.menu-mobile');
    
    if (menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "./img/menu_white_36dp.svg";
        document.querySelector('.icon').style.marginTop = "-40px";
        exibir();
    }else{
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "./img/close_white_36dp.svg";
        document.querySelector('.icon').style.marginTop = "0px";
        menuMobile = true;
        ocultar();       
    }

}

function exibir() {
    document.getElementById("logo-mobile").style.display = "block";
}

function ocultar() {
    document.getElementById("logo-mobile").style.display = "none";
}

function ocultarExibir() {

}
menuShow();  

 