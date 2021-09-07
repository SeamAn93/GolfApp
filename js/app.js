let count = 0;

let counterDisplayElem = document.querySelectorAll('.counterdisplay');

let counterMinusElem = document.querySelector('.counterminus');

let counterPlusElem = document.querySelector('.counterplus');




updateDisplay();

counterPlusElem.addEventListener("click",()=>{
    count++;
    updateDisplay();
}) ;

counterMinusElem.addEventListener("click",()=>{
    count--;
    updateDisplay();
});

function updateDisplay(){
    counterDisplayElem.innerHTML = count;
}