<?php
require_once "./php/init.php";
class config{
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function con(){
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=movie-reservation',$this->user,$this->password);
        }
        catch(PDOException $e){
            die($e);
        }
        return $this->pdo;
    }
}
?>