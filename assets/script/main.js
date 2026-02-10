import { switchCurrency } from "./fonction.js";
let button = document.querySelector("#buttonSwitch");
let devises = document.querySelectorAll(".devise");
let devise1 = devises[0];
let devise2 = devises[1];
let inputdevise1 = document.querySelector("#value1");
let inputdevise2 = document.querySelector("#value2");
let dark = document.querySelector("#dark");
let buttonDark = document.querySelector("#buttonDark");




try {


    switchCurrency(button, devise1, devise2, inputdevise1, inputdevise2);


} catch { }


try {


    let divCard = document.querySelector(".cardJeux");

    let symbole = ["bitcoin", "dollar", "euro", "yen", "yen", "bitcoin", "dollar", "euro", "pound", "pound"];



    for (let i = 10; i >= 1; i--) {

        let card = document.createElement("div");

        card.setAttribute("class", "itemcard");

        let rand = Math.floor(Math.random() * i);

        card.dataset.nameSymbole = symbole[rand];

        let svgCard = document.createElement("img");

        svgCard.classList.add("svg-card");
        svgCard.classList.add("hidden");

        svgCard.setAttribute("src", `./assets/images/svg/${symbole[rand]}.svg`);


        card.append(svgCard);

        divCard.append(card);

        symbole.splice(rand, 1);

    }

    let tabCard = document.querySelectorAll(".itemcard");

    let bloque = false;

    let carteRetournee = [];

    for (let card of tabCard) {

        card.addEventListener("click", function () {

            if (bloque) {

                return;

            }

            let svg = this.children[0];

            if (carteRetournee.includes(this)) {

                return;

            } else {


                carteRetournee.push(this);
                svg.classList.remove("hidden");

            }


            if (carteRetournee.length == 2) {

                bloque = true;
                verifCard();


            }

        })

    }


    function verifCard() {


        if (carteRetournee[0].dataset.nameSymbole == carteRetournee[1].dataset.nameSymbole) {

            carteRetournee[0].style.backgroundColor = "green";
            carteRetournee[1].style.backgroundColor = "green";

            setTimeout(() => {

                carteRetournee[0].setAttribute("class", "hidden");
                carteRetournee[1].setAttribute("class", "hidden");
                carteRetournee = [];
                bloque = false;

            }, 1500);

        } else {

            setTimeout(() => {

                carteRetournee[0].children[0].classList.add("hidden");
                carteRetournee[1].children[0].classList.add("hidden");
                carteRetournee = [];
                bloque = false;

            }, 1000);

        }

    }
} catch { }




dark.addEventListener("submit", (e) => {

    e.preventDefault();
    document.body.classList.toggle("backDark");
    buttonDark.classList.toggle("yellow");

    

    if (document.body.classList.contains("backDark")) {

        buttonDark.setAttribute("src","./assets/images/svg/on.svg");
        

    } else {

    buttonDark.setAttribute("src","./assets/images/svg/off.svg");
        
        

    }



})