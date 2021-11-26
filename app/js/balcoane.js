let balcoane = [
    "app/images/balcoane/balcon1.png",
    "app/images/balcoane/balcon2.png",
    "app/images/balcoane/balcon3.png",
    "app/images/balcoane/balcon4.png",
    "app/images/balcoane/balcon5.png",
    "app/images/balcoane/balcon6.png"

];

let btnBal = document.querySelector(".butonBal");
let pozeBal = document.querySelector(".pozeBalcoane");
let counterBal = 1;

btnBal.addEventListener("click", function () {
    if (counterBal === 6) {
        counterBal = 0;
    }
    pozeBal.src = balcoane[counterBal++];
    counterBal = counterBal++;
});