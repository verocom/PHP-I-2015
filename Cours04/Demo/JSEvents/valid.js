/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var monFormulaire = document.getElementById("monFormulaire");
if (monFormulaire) {
    monFormulaire.addEventListener('submit', function(e) {
        console.info(e);
        
        var inputs = document.getElementsByTagName("input");
        var premierInput = inputs[0];
        if (premierInput.value == ""){
            $(premierInput).addClass("invalid");
        } else {
            $(premierInput).removeClass("invalid");
        }
        
        //alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
        e.preventDefault();
    }, true);
}

var aClickMe = document.getElementById("aClickMe");
if (aClickMe){
    aClickMe.addEventListener('click', function(e) { 
        console.info(this);
        alert(aClickMe.getAttribute("href")); 
        e.preventDefault(); 
    });
}

var aClickMeNomme = document.getElementById("aClickMeNomme");
if (aClickMeNomme){
    aClickMeNomme.addEventListener('click', gestionDeCliques);
}


function gestionDeCliques(event){
    logMe(event);
    logMe(aClickMeNomme);
    logMe(aClickMeNomme.getAttribute("href"));
    event.preventDefault();
}


function logMe(value){
    console.info(value);
}

//...
//...
//...

//gestionDeCliques();