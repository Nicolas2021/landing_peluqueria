/*Slider code */
let idx = 0;

function beautyslider() {

    let i;
    let x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }

    idx++;
    if (idx > x.length) {
        idx = 1
    }    
    x[idx-1].style.display = "block";  
    setTimeout(beautyslider, 8000);    
}
beautyslider();