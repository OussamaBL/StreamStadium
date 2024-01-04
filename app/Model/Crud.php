<?php

namespace MVC\Model;

use MVC\connexion\connexion;
use MVC\interfaces\Crud as CrudInterface;
use PDO;

abstract class Crud implements CrudInterface
{
    public function __construct()
    {
        new connexion();
    }

    public function insert(string $table,array $data):int
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "insert into $table($columns) values ($values)";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(array_values($data));

        return connexion::$pdo->lastInsertId();
    }
    public function select(string $table,int $id):object
    {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function select_auth(string $email,string $cin=null)
    {
        $sql = "select * from users where email = ?";
        if($cin!=null) $sql.=" and cin = ?";
        $stmt = connexion::$pdo->prepare($sql);
        if($cin!=null) $stmt->execute([$email,$cin]);
        else $stmt->execute([$email]);

        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null;

    }


    public function selectAll(string $table):array
    {
        $sql = "SELECT * FROM $table";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute();

        //return $stmt->fetch(PDO::FETCH_OBJ);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(string $table,int $id,array $data):int
    {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE $table SET $setClause WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    public function delete(string $table,int $id):int
    {
        $sql = "DELETE FROM $table WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
    public function selectAll_matchs():array
    {
        $sql = "SELECT matchs.*, team1.name AS team1_name,   team2.name AS team2_name, stades.name AS stade_name FROM matchs  JOIN   teams AS team1 ON matchs.id_team1 = team1.id  JOIN        teams AS team2 ON matchs.id_team2 = team2.id JOIN   stades ON matchs.id_stad = stades.id";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function select_matchs(int $id): object
    {
        $sql = "SELECT matchs.*, 
        team1.name AS team1_name,   
        team2.name AS team2_name, 
        team1.coach AS team1_coach, 
        team2.coach AS team2_coach, 
        team1.image AS team1_image, 
        team2.image AS team2_image, 
        team1.description AS team1_description, 
        team2.description AS team2_description, 
        team1.federation AS team1_federation, 
        team2.federation AS team2_federation, 
        team1.cups AS team1_cups, 
        team2.cups AS team2_cups,
        team1.groupe AS team1_groupe, 
        team2.groupe AS team2_groupe,
        stades.name AS stade_name,  
        stades.capacity AS stade_capacity  
        FROM matchs  
        JOIN teams AS team1 ON matchs.id_team1 = team1.id  
        JOIN teams AS team2 ON matchs.id_team2 = team2.id 
        JOIN stades ON matchs.id_stad = stades.id            
        WHERE matchs.id = $id";
         $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function select_stades(int $id):array
    {
        $sql = "SELECT * FROM stades WHERE id = $id";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
 
    public function delete_verification(string $email):int
    {
        $sql = "DELETE FROM verification WHERE email = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount();
    }
    public function select_token_verify($token,$expires): ?object{
        $sql = "select * from verification where token= ? and expires >= ? ";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$token,$expires]);
        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }

}