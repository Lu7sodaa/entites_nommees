<?php

/* Listes de MOTS COURANTS qui matchent dans la regexp qui trouve les personnalités, par exemple parce qu'ils sont en début de phrase avec une majuscule. On va isoler les echapper de la regexp  */

$adverbes = "Encore|Autant|Après|Autre|Cela|Ceci|Sauf|Voici|Voilà|Pour|Parce|Cher|Chère|Comme|De|Selon|Si|Mais|En|Ainsi|Même|Avec|Tout|tous|toutes|Sans|Avant|Quels?|malgré|Chaque|Parmi|Ne|Non|Pas|Toujours|Nul|Tant|Celle-ci|Celui-ci|Peut-être|Grâce|Contrairement|Presque|Plutôt|Afin|Surtout" ;
$pronoms = "Les?|La|Aux?|Ces?|Cet+e?|Celui|celles?|ceux|Tous|toute?s?|Des|Aucune?|Du|Ça" ;
$verbes = "Lire|Voir|Etant|Est(?:-ce)?|se|Peut-on|Reste|A-t-elle|A-t-il" ;
$conjonctions = "Mais|Ou|Et|Donc|Or|Ni|Car" ;
$conj = "Je|Tu|Il|elles?|on|Nous|Vous|Ils|Lui" ;
$compt = "Une?|Deux|Trois|Quatre|Cinq|Six|Sept|Huit|Neuf|Dix|Plusieurs|Premier|Première|Deuxième|Troisième|Certaines|Certains?|Beaucoup|Laquelle|Les?quels?|Quelque|Trop" ;
$coord = "De|Par|Pour|Sans" ;
$coord2 = "Pourquoi|Hormis" ;
$poss = "Notre|Votre|Vos|mon|Ma|ton|son|sa|ses|nos|Leurs?";
$autres = "Qui|Que|quoi|dont|Où|Quant|Quel|Quelles?" ;
$loc = "Sous|Sur|dans|Près|Loin|Là|Ici|Devant|Au-delà|Face|Derrière|Contre";
$quant = "Quelques|Nombre|Très|Peu|plus|moins|Certains";
$temps = "Quand|Hier|aujourd|Lors|Depuis|avant|après|pendant|Longtemps|Début|Fin|Parfois|Durant";
$jargon = "Cité|Originaire|Né|Née|Mort|Côté|Personne|Ancien|Résultats?|Ayant|Soit|Faute|Sorti|Parfois|Fort|Fondé|Faut-il";
//$singleton = "Internet|Dieu|Eglise|Djihad|Prophète|Toile";

define("MOTS_DEBUT", $adverbes . 
					"|" . $pronoms . 
					"|" . $verbes . 
					"|" . $conjonctions . 
					"|" . $conj . 
					"|" . $compt . 
					"|" . $coord . 
					"|" . $coord2 .
					"|" . $poss .
					"|" . $autres .	
					"|" . $loc .															 										
					"|" . $quant .
					"|" . $temps .										
					"|" . $jargon .										
					"|" . $singleton .										
					"|" .  "Bien|Monsieur|Mme|Cependant|Lorsque|L|C|Tandis|Ensuite|Puisque|Rien|Comment|Alors|Tel|Député|Editions|Prix|Commission|Etats?|Organisation|Nièce|Montagnes|Sénat|Vieux|Saint|Moyen|Dès|Naguère|Assemblée|Union|Société|Puis|Occidentaux|Enfin|Directeur|Aussi|Outre|Jamais|Toutefois|Programme|Jeune|Même|Déjà|Entre|Nombreux|Pourtant|Seule?s?|Cet|Non|Certes|Chez|Chacun|Notamment|Nouve(?:au|l)|Préface|AUJOURD|Parallèlement|Dernière|The");

define("MOTS_MILIEU" , "et|dans|à|pour|où|comme|ou|aux|au|and|par|est|ces|selon|sur|avec|contre|ni|une|sans|entre|depuis|jusqu'(?:au|à)|que|devant|sous|d'après|après|rue|\-\-|Dieu|derrière") ;

define("MOTS_FIN" , "Cedex|Parti|Dieu|PO Box|BP \d+") ;

// Personnalités à Pseudo.

define("ENTITES_PERSO","Machiavel|Molière|Mirabeau|Staline|Lénine|Mao|Bono|Mussolini|Voltaire|Sadate|Hitler|Marx|Lula|Pinochet|Allende");

/* Patterns pour isoler des entités restées parmis des personnalités */

define("ENTITES_LIEUX_HEURISTIQUE","Sud$|^Nord-|Nord$|Est$|Ouest$|Côte|Congo|République|Etats|City");
define("ENTITES_INSTITUTIONS_HEURISTIQUE","Nation|Ambassade|Conseil|Fédération|Fondation|Foreign|olympique|Culture|Report|Nouvelle|^The|Parti|Patriot|Musée|Parlement|Press$|^Presses|Agence|University|Agreement|Observatory|Company|Fédération|Edition|News|Centre|démocrat|America|Association|Public|Chambre|Air|Watch$|United|diplomati|Comité|Corporation|Center|Administration|convention|accords|Institut");

// http://typo.mondediplo.net/?page=entites_nommees&entite=fonctions
define("FONCTIONS_PERSONNALITES_TYPO","présidente? de la République|chef de l'exécutif|premier ministre|président fédéral|chancelière fédérale|chef du gouvernement|reine|chancelier fédéral|première ministre|roi des Belges|roi-dragon|présidence collégiale tournante|président du conseil des ministres|président du présidium de l'Assemblée populaire suprême depuis 2011|président du gouvernement|ministre d'Etat|roi|présidente?|président du conseil|président du gouvernement|vice-président de la fédération|Guide suprême|président de l'État|président du conseil|empereur|émir|président de la Chambre des représentants|prince régnant|grand-duc|premier ministre par intérim|prince|sultan|ministre d'État|PDG|président de l'Autorité palestinienne|gouverneur|président de la Roumanie|président de la fédération|secrétaire d'État pour les affaires extérieures et politiques|président du gouvernement de Serbie|premier ministre et président du Yuan exécutif|souverain pontife|pape|secrétaire d'État");


// http://typo.mondediplo.net/?page=entites_nommees&entite=fonctions
define("FONCTIONS_PERSONNALITES_AJOUTS","sénateur|député|L(?:a|e) porte-parole");

define("FONCTIONS_PERSONNALITES", FONCTIONS_PERSONNALITES_AJOUTS . "|" . FONCTIONS_PERSONNALITES_TYPO);
