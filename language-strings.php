<?php

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

//Declare Variable as Global
global $about;
global $gallery;
global $about_link;
global $return_home;
global $error_message;
global $blog_error;

global $about;
global $gallery;
global $about_link;
global $return_home;
global $error_message;
global $blog_error;
global $searchbar;
global $posts_per_pagelabel;
global $filter_1;
global $showall;
global $view_post_list;
global $label_1;
global $label_2;
global $label_3;
global $label_4;
global $label_5;
global $label_6;
global $noresults;
global $noresultsfor;
global $results_1;
global $results_2;
global $result_1;
global $result_2;
global $back;
global $activity;
global $bungalow;
global $nocurrentresults;
global $morecars;
global $category_name;
global $recent_cars;
global $postlist_subtitle;
global $archive_subtitle;

global $lowseason;
global $midseason;
global $highseason;

global $lowseasonhead;
global $midseasonhead;
global $highseasonhead;

global $fournights;
global $sevennights;

global $actualseason;

if (strpos($url,'/en/') !== false) {
        //English Strings
        $bungalow = "/book-bungalows-gites-guadeloupe/#content";
        $activity = "/activities-bouillante-guadeloupe/#content";
        $about = "Read more";
        $gallery = "Gallery";
        $about_link = "/cabazat-gites-holiday-guadeloupe/#content";
        $return_home = "Click here to return to the Home page.";
        $error_message = "The requested page could not be found.";
        $blog_error = "There aren't any Bungalows yet.";
        $view_post_list = "View";
        $label_1 = "Persons";
        $label_2 = "Minimum amount of nights";
        $label_6 = "Actual Price: ";
        $noresults = "At this moment there aren't any activities available.";
        $noresultsfor = "No results for:";
        $results_1 = "There are "; $results_2 = ' results for: "';
        $result_1 = "There is "; $result_2 = ' result for: "';
        $back = "Go Back";
        $nocurrentresults = "There aren't any available activities at this time.";
        $morecars = "More Bungalows";
        $category_name = "Bungalows";
        $postlist_subtitle = "Local Activities";
        $lowseason = "Current Price: Low Season";
        $midseason = "Current Price: Mid Season";
        $highseason = "Current Price: High Season";
        $lowseasonhead = "Low Season";
        $midseasonhead = "Mid Season";
        $highseasonhead = "High Season";
        $fournights = "4 Nights";
        $sevennights= "7 Nights";
        $actualseason = "See the bungalow page for current season";
}


    elseif (strpos($url,'/nl/') !== false) {
        //Dutch Strings
        $bungalow = "/boek-bungalows-gites-guadeloupe/#content";
        $activity = "/activiteiten-bouillante-guadeloupe/#content";
        $about = "Lees meer";
        $gallery = "Gallerij";
        $about_link = "/over-cabazat-gites-vacances-guadeloupe/#content";
        $return_home = "Klik hier om terug te gaan naar de Home pagina.";
        $error_message = "De opgevraagde pagina kon niet worden gevonden.";
        $blog_error = "Er zijn nog geen bungalows.";
        $view_post_list = "Bekijk";
        $label_1 = "Personen";
        $label_2 = "Minimum aantal nachten";
        $label_6 = "Huidige Prijs: ";
        $noresults = "Op dit moment zijn er geen activiteiten beschikbaar.";
        $noresultsfor = "Geen resultaten voor:";
        $results_1 = "Er zijn "; $results_2 = ' resultaten gevonden voor: "';
        $result_1 = "Er is "; $result_2 = ' resultaat gevonden voor: "';
        $back = "Ga Terug";
        $nocurrentresults = "There aren't any available activities at this time.";
        $morecars = "Meer Bungalows";
        $category_name = "Bungalows";
        $postlist_subtitle = "Lokale Activiteiten";
        $lowseason = "Huidige Prijs: Laag Seizoen";
        $midseason = "Huidige Prijs: Mid Seizoen";
        $highseason = "Huidige Prijs: Hoog Seizoen";
        $lowseasonhead = "Laag Seizoen";
        $midseasonhead = "Mid Seizoen";
        $highseasonhead = "Hoog Seizoen";
        $fournights = "4 Nachten";
        $sevennights= "7 Nachten";



} else {
        //French Strings
        $bungalow = "/louez-bungalows-gites-guadeloupe/#content";
        $activity = "/activites-ile-bouillante-guadeloupe/#content";
        $about = "À savoir";
        $gallery = "Gallerie";
        $about_link = "/cabazat-gites-vacances-guadeloupe/#content";
        $return_home = "Cliquez ici pour retourner a l'Acceuil";
        $error_message = "La page que vous avez voulu visité n'a pas pu être trouvé!";
        $blog_error = "Il n'y a pas encore de Bungalows.";
        $view_post_list = "Voir";
        $label_1 = "Personnes";
        $label_2 = "Minimum de nuits";
        $label_6 = "Prix actuel: ";
        $noresults = "At this moment there aren't any bungalows available.";
        $noresultsfor = "Pas de resultats pour: ";
        $results_1 = "Il y a "; $results_2 = ' resultats pour: "';
        $result_1 = "Il y a "; $result_2 = ' resultat pour: "';
        $back = "Retourner";
        $nocurrentresults = "Il n'y a pas de bungalows en ce moment.";
        $morecars = "Plus de Bungalows";
        $category_name = "Bungalows";
        $postlist_subtitle = "Les activités dans le coins";
        $lowseason = "Prix actuel: Basse Saison";
        $midseason = "Prix actuel: Moyenne Saison";
        $highseason = "Prix actuel: Haute Saison";
        $lowseasonhead = "Basse Saison";
        $midseasonhead = "Moyenne Saison";
        $highseasonhead = "Haute Saison";
        $fournights = "4 Nuits";
        $sevennights= "7 Nuits";
}


