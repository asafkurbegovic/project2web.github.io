const text = ["TO THE FIRST STUDENT WEB SERVICE IN B&H"];
let count = 0;
let index = 0;
let ctext = "";
let lett = "";


(function typer(){

    if(count === text.length){
        count=0;
    }
    ctext =text[count];
    lett = ctext.slice(0,index++);

    document.querySelector('.type').textContent= lett;
    if(lett.length ==ctext.length){
        count++;
        index=0;
    }

    setTimeout(typer,150);

}());

