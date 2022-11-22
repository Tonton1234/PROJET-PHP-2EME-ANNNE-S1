<?php
    function find_auteur_by_id(int $id):array|null{
        foreach ($auteurs as $key => $value) {
            if($value["id"==$id]){
                return $value;
            }
        }
        return null;
    }

    function find_ouvrage(array $ouvrages):array{
        $ouvrage=[];
        foreach ($ouvrages as $key => $value) {
            $auteur=find_auteur_by_id($value["auteur_id"]);
            $ouvrage[]=[
                            "id"=>$value["id"],
                            "code"=>$value["code"],
                            "titre"=>$value["titre"],
                            "date"=>$value["date_edition"],
                            "Auteur"=>$auteur["nom"]." ".$auteur["prenom"]
            ];
        }
        return $ouvrage;
    }
?>