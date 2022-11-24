<?php
    require_once("data.php");

    function find_all_auteur():array{
        $auteurs=[
            ["id"=>1,"nom"=>"Chartier","prenom"=>"Emile-Auguste","profession"=>"Philosophe"],
            ["id"=>2,"nom"=>"Guillaume","prenom"=>"Appolinaire","profession"=>"Poete"],
            ["id"=>3,"nom"=>"Jean","prenom"=>"Anouilh","profession"=>"Dramaturge"]
        ];
        return $auteurs;
    }
    function find_auteur_by_id(int $id):array|null{
        $auteurs=find_all_auteur();
        foreach ($auteurs as $key => $value) {
            if($value["id"]==$id){
                return $value;
            }
        }
        return null;
    }

    function find_all_adherent():array{
        $adherents=[
            ["id"=>1,"nom"=>"Missekpe","prenom"=>"Fulbert"],
            ["id"=>2,"nom"=>"Mougnegue","prenom"=>"Orion"],
            ["id"=>3,"nom"=>"Ayiteh","prenom"=>"Maeva"]
    
        ];
        return $adherents;
    }

    function find_adherent_by_id(int $id):array|null{
        $adherents=find_all_adherent();
        foreach ($adherents as $key => $value) {
            if($value["id"]==$id){
                return $value;
            }
        }
        return null;
    }
    function find_all_ouvrages():array{
        $ouvrages=[
            ["id"=>1,"code"=>"BLV","titre"=>"Le bal des Voleurs","date_edition"=>1938,"auteur_id"=>3,"statut"=>"Disponible"],
            ["id"=>2,"code"=>"LVSB","titre"=>"Le Voyageur sans bagage","date_edition"=>1937,"auteur_id"=>3,"statut"=>"Disponible"],
            ["id"=>3,"code"=>"SPZ","titre"=>"Spinoza","date_edition"=>1900,"auteur_id"=>1,"statut"=>"Disponible"],
            ["id"=>4,"code"=>"IDE","titre"=>"Idees","date_edition"=>1932,"auteur_id"=>1,"statut"=>"Disponible"],
            ["id"=>5,"code"=>"LBCO","titre"=>"Le Bestiaire ou Cortege d'Orphee","date_edition"=>1911,"auteur_id"=>2,"statut"=>"Disponible"]
    
        ];
        return $ouvrages;
    }

    function find_ouvrage_by_id(int $id):array|null{
        $ouvrages=find_all_ouvrages();
        foreach ($ouvrages as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }

        }
        return null;
    }
   

    function find_ouvrage():array{
       $ouvrages=find_all_ouvrages();
        $ouvrage=[];
        foreach ($ouvrages as $key => $value) {
            $auteur=find_auteur_by_id($value["auteur_id"]);
            $ouvrage[]=[
                            "id"=>$value["id"],
                            "code"=>$value["code"],
                            "titre"=>$value["titre"],
                            "date"=>$value["date_edition"],
                            "auteur"=>$auteur["nom"]." ".$auteur["prenom"],
                            "statut"=>$value["statut"]
            ];
        }
        return $ouvrage;
    }

    function find_all_rayon():array{
        $rayons=[
            ["id"=>1,"type"=>"Poesie","taille"=>50,"taille_disponible"=>49],
            ["id"=>2,"type"=>"Philosophie","taille"=>50,"taille_disponible"=>48],
            ["id"=>3,"type"=>"Drame","taille"=>50,"taille_disponible"=>48]
    
        ];
        return $rayons;
    }

    function find_rayon_by_id(int $id):array|null{
       $rayons=find_all_rayon();
        foreach ($rayons as $key => $value) {
            if($value["id"]==$id){
                return $value;
            }
        }
        return null;
    }

    function find_all_exemplaire():array{
        $exemplaires=[
            ["id"=>1,"date_enregistrement"=>"10/11/2022","ouvrage_id"=>1,"rayon_id"=>3],
            ["id"=>2,"date_enregistrement"=>"11/10/2022","ouvrage_id"=>2,"rayon_id"=>3],
            ["id"=>3,"date_enregistrement"=>"04/04/2022","ouvrage_id"=>3,"rayon_id"=>2],
            ["id"=>4,"date_enregistrement"=>"10/04/2022","ouvrage_id"=>4,"rayon_id"=>2],
            ["id"=>5,"date_enregistrement"=>"16/06/2022","ouvrage_id"=>5,"rayon_id"=>1]
    
        ];
        return $exemplaires;
    }

    function find_exemplaire():array{
        $exemplaires=find_all_exemplaire();
        $exemplaire=[];
        foreach ($exemplaires as $key => $value) {
            $rayon=find_rayon_by_id($value["rayon_id"]);
            $exemplaire[]=[
                "id"=>$value["id"],
                "date"=>$value["date_enregistrement"],
                "rayon"=>$rayon["type"]
            ];

        }
        return $exemplaire;
    }

    function find_exemplaire_by_id(int $id):array|null{
        $exemplaires=find_all_exemplaire();
        foreach ($exemplaires as $key => $value) {
            if($value["id"]==$id){
                return $value;
            }
        }
        return null;
    }

    function find_all_demande():array{
        $demandes=[
            ["id"=>1,"exemplaire_id"=>1,"adherent_id"=>1,"statut"=>"Accepter","date"=>"12/11/2022"],
            ["id"=>2,"exemplaire_id"=>1,"adherent_id"=>2,"statut"=>"Encours","date"=>"13/11/2022"],
            ["id"=>3,"exemplaire_id"=>2,"adherent_id"=>2,"statut"=>"refuser","date"=>"15/10/2022"],
            ["id"=>4,"exemplaire_id"=>4,"adherent_id"=>3,"statut"=>"Accepter","date"=>"12/04/2022"],
            ["id"=>5,"exemplaire_id"=>5,"adherent_id"=>1,"statut"=>"Accepter","date"=>"01/06/2022"]
    
        ];
        return $demandes;
    }

    function find_demande():array{
        $demandes=find_all_demande();
        $demande=[];
        foreach ($demandes as $key => $value) {
            $demande[]=[
                "id"=>$value["id"]
                
            ];

        }
    }
?>