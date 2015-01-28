/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var monFormulaire = document.getElementById("monFormulaire");
if (monFormulaire) {
    monFormulaire.addEventListener('submit', function(e) {
        //alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
        e.preventDefault();
    }, true);
}

var aClickMe = document.getElementById("aClickMe");
if (aClickMe){
    aClickMe.addEventListener('click', function(e) { 
        alert(aClickMe.getAttribute("href")); 
        e.preventDefault(); 
    });
}