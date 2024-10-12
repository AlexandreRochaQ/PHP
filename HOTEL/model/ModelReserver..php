<?php

abstract class ModelReserver {
    public function reserver($numChambre) {
        
        while($res = $stmt -> fetch()) {
            extract($res);
            $tab[] = new Chambre()

            return $tab;
        }
        public function getChambre(int $id) {
            $query = "SELECT * FROM chambre WHERE $numChambre = :id";

            $res = $this->executerReq($query, ["id" = $id])
            extract($res);

            return new Chambre($numChambre, $prix, $nbLits, $nbPers, $image);
        }    
    }
}