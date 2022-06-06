let list_of_tabel = document.getElementsByTagName("li");
let button_ochtend = document.getElementById("ochtend");
let button_middag = document.getElementById("middag");
let button_namiddag = document.getElementById("namiddag");
let button_alles = document.getElementById("alles");

//hier worden alle tijdsloten en telefoonnummers opgehaald in een keer zodat die niet een voor een ingeladen hoeven
//te worden. daarna kan ik er gewoon met een for loop doorheen gaan en omdat ik weet dat de tabel 108 regels heeft
//kan ik makkelijk de for loop daar op afstemmen
let tijden = document.querySelectorAll("h2");
let telefoonnummer = document.querySelectorAll("div");
console.log(telefoonnummer[0].innerHTML);

//tijden[73].style.display = "none";

//deze functie zet eerst alle telefoonnummers display op none zodat die niet op de site verschijnen
// en daarna checkt hij welke plekken al bezet zijn en maakt daar de tekst rood
for(let i = 0; i < 108; i++){
    console.log(telefoonnummer[0].innerHTML);
    telefoonnummer[i].style.display = "none";
    if(telefoonnummer[i].innerHTML !== "0"){
        tijden[i].style.color = 'red';        
    }
}

//De buttons werken allemaal op dezelfde manier, als je op een knop klikt begint er een while loop die door elk van de 
//108 elementen heen gaat en wederom omdat we weten precies hoeveel elementen er zijn kunnen we makkelijk deze 
//limieten vann >35 of tussen 36 en 71 meegeven en daardoor kunnen we precies de tijden laten zien die we willen.
//en dit doen we weer door of style display op none of op "" te zetten
function ochtendButton(){
    i = 0;
    while(i < 109){
        if(i > 35){
            tijden[i].style.display = "none";
            i++;
        }else{
            i++;
            tijden[i].style.display = "";
        }
    }
}

function middagButton(){
    i = 0;
    while(i < 109){
        if(i < 36 || i > 71){
            tijden[i].style.display = "none";
            i++;
        }else{
            i++;
            tijden[i].style.display = "";
        }
    }
}

function namiddagButton(){
    i = 0;
    while(i < 109){
        if(i < 72){
            tijden[i].style.display = "none";
            i++;
        }else{
            i++;
            tijden[i].style.display = "";
        }
    }
}

function allesButton(){
    i = 0;
    while(i < 109){
        i++;
        tijden[i].style.display = "";
    }
}