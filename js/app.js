let inputMinus = document.querySelectorAll('.inputminus');
let inputPlus = document.querySelectorAll('.inputplus');

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

function getTotal(){
    let arr = document.querySelectorAll('.score');
    let total=0;
    for(let i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            total += parseInt(arr[i].value);
    }
    document.getElementById('total').value = total;
}