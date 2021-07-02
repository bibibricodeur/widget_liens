/***
Description: 
Dependances: http://vanilla-js.com/
Copyright (c) 20200518, bibibricodeur.
License: WTFPL
***/

// https://playground.deaxon.com/js/vanilla-js/
document.addEventListener("DOMContentLoaded", function() {
	// code
	console.log('widget_liens.js en marche :-)');
  
	function fetchLiens() {
	    // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
	    if(window.fetch) {
	        // exécuter ma requête fetch ici

	        var requete = ('./wp-content/plugins/widget_liens-master/liens.json');
	        // https://developer.mozilla.org/fr/docs/Web/API/Body/json

			fetch(requete)
			.then(response => response.json())
			.then(data => {
				// faire quelque chose avec les données
				console.log(data);
				// https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector
				sortie = '';
				for (objet in data) {
					//console.log(data[objet].name);
					//console.log(data[objet].url);
					sortie += '<li><a href="' + (data[objet].url) + '">' + (data[objet].name) + '</a></li>';
					document.getElementById("liens").innerHTML = sortie;
				};                        
	        })
	        .catch(function(error) {
	            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
	        });

	    } else {
	        // Faire quelque chose avec XMLHttpRequest?
	        console.log('Faire quelque chose avec XMLHttpRequest?');
	    }
	}

	fetchLiens();
});

/* Fin */ 
