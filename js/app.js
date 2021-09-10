let inputMinus = document.querySelectorAll('.inputminus');
let inputPlus = document.querySelectorAll('.inputplus');
let holeNumber = 1;

// Plus og minus

inputMinus.forEach((inputMinus) => {
    inputMinus.addEventListener('click', function (e){
        if(e.target.nextElementSibling.value > 0) {
            e.target.nextElementSibling.value--}
        getTotal();
    });
});

inputPlus.forEach((inputPlus) => {
    inputPlus.addEventListener('click', function (e){
        e.target.previousElementSibling.value++;
        getTotal();
    })
})

// Summen af huller

function getTotal(){
    let arr = document.querySelectorAll('.score');
    let total=0;
    for(let i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            total += parseInt(arr[i].value);
    }
    document.getElementById('total').value = total;
}

// Tilføje huller

const makeList = document.querySelector('.makelist');

function listMaker(){
    const li = document.createElement('li')
    li.innerHTML = `
            <p class="text-center mb-1 fs-5">Hul ${holeNumber}</p>
            <div class="inputfield d-flex justify-content-center mb-3">
                <button class="inputminus bg-danger rounded-3 border-black text-white text-center fs-3 me-3">-</button>
                <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
                <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
            </div>`;
    const list = document.querySelector('.list');
    list.appendChild(li);
    li.querySelector('.inputminus').addEventListener('click', (e) =>
        minus(e));
    li.querySelector('.inputplus').addEventListener('click', (e) =>
        plus(e));
    holeNumber++;
}

makeList.addEventListener('click', (e) => {
    listMaker(e);
})

function minus (e){
    if(e.target.nextElementSibling.value > 0) {
        e.target.nextElementSibling.value--}
    getTotal();
}

function plus (e){
    e.target.previousElementSibling.value++;
    getTotal();
}

// Reset

const reload = document.querySelector('.reload');

reload.addEventListener('click',() => location.reload());

// Tilføj navn

let inputName = document.querySelector('.inputname');
let nameSpan = document.querySelector('.name');

function getName (){
    const name = document.createElement('span');
    name.innerHTML = `${inputName.value}`;
    nameSpan.appendChild(name);
}

let startGame = document.querySelector('.start');

startGame.addEventListener('click', (e) => {
    getName(e);
    getHoles();
})

// Tilføj huller

let inputHoles = document.querySelector('.inputholes');

function getHoles () {
        for (let x = 1; x < inputHoles.value; x++){
        listMaker();

    }
}