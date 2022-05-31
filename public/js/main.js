let list_of_tabel = document.getElementsByTagName("li");
let button_ochtend = document.getElementById("ochtend");
let button_middag = document.getElementById("middag");
let button_namiddag = document.getElementById("namiddag");
let button_alles = document.getElementById("alles");

let tijden = document.querySelectorAll("h2");
let telefoonnummer = document.querySelectorAll("div");
console.log(telefoonnummer[0].innerHTML);

//tijden[73].style.display = "none";

for(let i = 0; i < 108; i++){
    console.log(telefoonnummer[0].innerHTML);
    telefoonnummer[i].style.display = "none";
    if(telefoonnummer[i].innerHTML !== ""){
        tijden[i].style.color = 'red';        
    }
}

function ochtendButton(){
    i = 0;
    while(i < 109){
        if(i > 36){
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
        if(i < 36 || i > 73){
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
        if(i < 73){
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