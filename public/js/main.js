let checkbox_maki = document.getElementById("maki");
let checkbox_sashimi = document.getElementById("sashimi");
let list_of_tabel = document.getElementsByTagName("li");

checkbox_maki.checked = true;
checkbox_sashimi.checked = true;

for (let i = 0; i < list_of_tabel.length; i++){
    list_of_tabel[i].style.display = "";
}

checkbox_maki.addEventListener('change', function(){
    if(checkbox_maki.checked){
        for( let i = 0; i < list_of_tabel.length; i++){
            if (list_of_tabel[i].dataset.kindOftabel == 'Maki'){
                list_of_tabel[i].style.display = '';
            }
        }
    }
    else{
        for( let i = 0; i < list_of_tabel.length; i++){
            if (list_of_tabel[i].dataset.kindOftabel == 'Maki'){
                list_of_tabel[i].style.display = 'none';
            }
    }
}});

checkbox_sashimi.addEventListener('change', function(){
    if(checkbox_sashimi.checked){
        for( let i = 0; i < list_of_tabel.length; i++){
            if (list_of_tabel[i].dataset.kindOftabel == 'Sashimi'){
                list_of_tabel[i].style.display = '';
            }
        }
    }
    else{
        for( let i = 0; i < list_of_tabel.length; i++){
            if (list_of_tabel[i].dataset.kindOftabel == 'Sashimi'){
                list_of_tabel[i].style.display = 'none';
            }
    }
}});