<?php
namespace App\Repository;

use App\Model\Danseuse;

class DanseuseRepository {

    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=db;dbname=danseManager','root','supersecret');
    }
    public function getListDanseuses(){
        // pdo recupérer la liste des danseuses et les retourner (RETURN)
        $danseuses = $this->pdo->query('SELECT * FROM danseuse')
            ->fetchAll(\PDO::FETCH_CLASS, Danseuse::class);
        return $danseuses;
    }
    public function getById($id){
        // pdo recupérer la danseuse par ID
        $query = $this->pdo->prepare('SELECT * FROM danseuse WHERE id_danseuse = :id');
        $query->execute([
            'id' => $id,
        ]);
        $danseuse = $query->fetchObject(Danseuse::class);

        return $danseuse;
    }
}