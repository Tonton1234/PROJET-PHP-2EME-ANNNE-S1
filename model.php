<?php
    require_once("data.php");
    function find_auteur_by_id(int $id):array|null{
        $auteurs=[
            ["id"=>1,"nom"=>"Chartier","prenom"=>"Emile-Auguste","profession"=>"Philosophe"],
            ["id"=>2,"nom"=>"Guillaume","prenom"=>"Appolinaire","profession"=>"Poete"],
            ["id"=>3,"nom"=>"Jean","prenom"=>"Anouilh","profession"=>"Dramaturge"]
        ];
        foreach ($auteurs as $key => $value) {
            if($value["id"]==$id){
                return $value;
            }
        }
        return null;
    }

    function find_ouvrage():array{
        $ouvrages=[
            ["id"=>1,"code"=>"BLV","titre"=>"Le bal des Voleurs","date_edition"=>1938,"auteur_id"=>3],
            ["id"=>2,"code"=>"LVSB","titre"=>"Le Voyageur sans bagage","date_edition"=>1937,"auteur_id"=>3],
            ["id"=>3,"code"=>"SPZ","titre"=>"Spinoza","date_edition"=>1900,"auteur_id"=>1],
            ["id"=>4,"code"=>"IDE","titre"=>"Idees","date_edition"=>1932,"auteur_id"=>1],
            ["id"=>5,"code"=>"LBCO","titre"=>"Le Bestiaire ou Cortege d'Orphee","date_edition"=>1911,"auteur_id"=>2]
    
        ];
        $ouvrage=[];
        foreach ($ouvrages as $key => $value) {
            $auteur=find_auteur_by_id($value["auteur_id"]);
            $ouvrage[]=[
                            "id"=>$value["id"],
                            "code"=>$value["code"],
                            "titre"=>$value["titre"],
                            "date"=>$value["date_edition"],
                            "auteur"=>$auteur["nom"]." ".$auteur["prenom"]
            ];
        }
        return $ouvrage;
    }
?>