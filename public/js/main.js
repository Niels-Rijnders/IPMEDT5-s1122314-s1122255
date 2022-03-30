let checkbox_maki = document.getElementById("maki");
let checkbox_sashimi = document.getElementById("sashimi");
let list_of_sushi = document.getElementsByTagName("li");

checkbox_maki.checked = true;
checkbox_sashimi.checked = true;

for (let i = 0; i < list_of_sushi.length; i++){
    list_of_sushi[i].style.display = "";
}

checkbox_maki.addEventListener('change', function(){
    if(checkbox_maki.checked){
        for( let i = 0; i < list_of_sushi.length; i++){
            if (list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
                list_of_sushi[i].style.display = '';
            }
        }
    }
    else{
        for( let i = 0; i < list_of_sushi.length; i++){
            if (list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
                list_of_sushi[i].style.display = 'none';
            }
    }
}});

checkbox_sashimi.addEventListener('change', function(){
    if(checkbox_sashimi.checked){
        for( let i = 0; i < list_of_sushi.length; i++){
            if (list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
                list_of_sushi[i].style.display = '';
            }
        }
    }
    else{
        for( let i = 0; i < list_of_sushi.length; i++){
            if (list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
                list_of_sushi[i].style.display = 'none';
            }
    }
}});