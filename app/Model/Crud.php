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