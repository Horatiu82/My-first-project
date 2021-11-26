let blocuri = [
    "app/images/blocuri/bloc1.png",
    "app/images/blocuri/bloc2.png",
    "app/images/blocuri/bloc3.png",
    "app/images/blocuri/bloc4.png",
    "app/images/blocuri/bloc5.png",
    "app/images/blocuri/bloc6.png"

];

let btnBloc = document.querySelector(".butonBloc");
let pozeBloc = document.querySelector(".pozeBloc");
let counterBloc = 1;

btnBloc.addEventListener("click", function () {
    if (counterBloc === 6) {
        counterBloc = 0;
    }
    pozeBloc.src = blocuri[counterBloc++];
    counterBloc = counterBloc++;
});