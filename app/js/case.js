
let caseKari = [
    "app/images/case/casa1.jpeg",
    "app/images/case/casa2.jpeg",
    "app/images/case/casa3.jpeg",
    "app/images/case/casa4.jpeg",
    "app/images/case/casa5.jpeg",
    "app/images/case/casa6.jpeg",
];

let btnCase = document.querySelector(".btnCase");
let imgCase = document.querySelector(".pozeCase");
let counter = 1;

btnCase.addEventListener("click", function () {
    if (counter === 6) {
        counter = 0;
    }
    imgCase.src = caseKari[counter++];
    counter = counter++;

});






