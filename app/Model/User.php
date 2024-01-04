<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
class User extends CrudAlias
{ 	 	 
    private int $id;
    private string $full_name;
    private int $age;
    private string $email;
    private string $cin;
    private string $phone;
    private string $role;
    private string $password;


    public function __construct(string $full_name="null", string $email="null", 
    int $age=0,string $phone="null",string $cin="null",string $password="null",string $role="null",int $id=0)
    {
        parent::__construct();
        $this->full_name = $full_name;
        $this->email = $email;
        $this->age = $age;
        $this->phone = $phone;
        $this->cin = $cin;
        $this->password = $password;
        $this->role = $role;
        $this->id = $id;
    }
    //getters and setters
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getFullName(): string
    {
        return $this->full_name;
    }
    public function setFullName(string $full_name): void
    {
        $this->full_name = $full_name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getCin(): string
    {
        return $this->cin;
    }
    public function setCin(string $cin): void
    {
        $this->cin = $cin;
    }
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    public function getRole(): string
    {
        return $this->role;
    }
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

//model
    public function edit():void{
        $this->update('users', $this->id, ['name' => $this->full_name ,'age'=> $this->age,'email'=> $this->email,
        'cin'=> $this->cin,'phone'=> $this->phone,'role'=> $this->role,'password'=> $this->password]);
    }

    public function destroy():void{
        $this->delete('users', $this->id);
    }

    public function show(): object
    {
        return $this->select('users', $this->id);
      
    }
    public function showAll(): array
    {
        return $this->selectAll('users');
    }

}