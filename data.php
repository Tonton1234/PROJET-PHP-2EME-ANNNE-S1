<?php
    $ouvrages=[
        ["id"=>1,"code"=>"BLV","titre"=>"Le bal des Voleurs","date_edition"=>1938,"auteur_id"=>3,1,"statut"=>"Disponioble"],
        ["id"=>2,"code"=>"LVSB","titre"=>"Le Voyageur sans bagage","date_edition"=>1937,"auteur_id"=>3,"statut"=>"Disponioble"],
        ["id"=>3,"code"=>"SPZ","titre"=>"Spinoza","date_edition"=>1900,"auteur_id"=>1,"statut"=>"Disponible"],
        ["id"=>4,"code"=>"IDE","titre"=>"Idees","date_edition"=>1932,"auteur_id"=>1,"statut"=>"Disponioble"],
        ["id"=>5,"code"=>"LBCO","titre"=>"Le Bestiaire ou Cortege d'Orphee","date_edition"=>1911,"auteur_id"=>2,"statut"=>"Disponioble"]

    ];
    $auteurs=[
        ["id"=>1,"nom"=>"Chartier","prenom"=>"Emile-Auguste","profession"=>"Philosophe"],
        ["id"=>2,"nom"=>"Guillaume","prenom"=>"Appolinaire","profession"=>"Poete"],
        ["id"=>3,"nom"=>"Jean","prenom"=>"Anouilh","profession"=>"Dramaturge"]
    ];
    $rayons=[
        ["id"=>1,"type"=>"Poesie","taille"=>50,"taille_disponible"=>49],
        ["id"=>2,"type"=>"Philosophie","taille"=>50,"taille_disponible"=>48],
        ["id"=>3,"type"=>"Drame","taille"=>50,"taille_disponible"=>48]

    ];
    $exemplaires=[
        ["id"=>1,"date_enregistrement"=>"10/11/2022","ouvrage_id"=>1,"rayon_id"=>3],
        ["id"=>2,"date_enregistrement"=>"11/10/2022","ouvrage_id"=>2,"rayon_id"=>3],
        ["id"=>3,"date_enregistrement"=>"04/04/2022","ouvrage_id"=>3,"rayon_id"=>2],
        ["id"=>4,"date_enregistrement"=>"10/04/2022","ouvrage_id"=>4,"rayon_id"=>2],
        ["id"=>5,"date_enregistrement"=>"16/06/2022","ouvrage_id"=>5,"rayon_id"=>1]

    ];
    $demandes=[
        ["id"=>1,"exemplaire_id"=>1,"adherent_id"=>1,"statut"=>"Accepter","date"=>"12/11/2022"],
        ["id"=>2,"exemplaire_id"=>1,"adherent_id"=>2,"statut"=>"Encours","date"=>"13/11/2022"],
        ["id"=>3,"exemplaire_id"=>2,"adherent_id"=>2,"statut"=>"refuser","date"=>"15/10/2022"],
        ["id"=>4,"exemplaire_id"=>4,"adherent_id"=>3,"statut"=>"Accepter","date"=>"12/04/2022"],
        ["id"=>5,"exemplaire_id"=>5,"adherent_id"=>1,"statut"=>"Accepter","date"=>"01/06/2022"]

    ];
    $prets=[
        ["id"=>1,"date"=>"14/11/2022","date_retour_prevue"=>"01/12/2022","date_retour_reel"=>"Pas encor","adherent_id"=>1,"exemplaire_id"=>1],
        ["id"=>2,"date"=>"14/04/2022","date_retour_prevue"=>"29/04/2022","date_retour_reel"=>"02/05/2022","adherent_id"=>3,"exemplaire_id"=>4],
        ["id"=>3,"date"=>"05/06/2022","date_retour_prevue"=>"20/06/2022","date_retour_reel"=>"18/06/2022","adherent_id"=>1,"exemplaire_id"=>5]

    ];

    $adherents=[
        ["id"=>1,"nom"=>"Missekpe","prenom"=>"Fulbert"],
        ["id"=>2,"nom"=>"Mougnegue","prenom"=>"Orion"],
        ["id"=>3,"nom"=>"Ayiteh","prenom"=>"Maeva"]

    ];
?>