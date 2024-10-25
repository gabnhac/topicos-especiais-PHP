<?php 

class RosquinhaRepository{
    private PDO $pdo;

    public function __contruct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
}


?>