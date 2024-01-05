<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
class Team extends CrudAlias

{
    private int $id;
    private string $name;
    private string $coach;
    private string $image;
    private string $description;
    private string $groupe;
    private int $cups;
    private string $federation;

    public function __construct(string $name="",string $coach="",string $description="",string $groupe="",int $cups=0,string $federation="",string $image="",int $id=0)
    {
        parent::__construct();
        $this->name = $name;
        $this->coach = $coach;
        $this->image = $image;
        $this->description = $description;
        $this->groupe = $groupe;
        $this->cups = $cups;
        $this->federation = $federation;
        $this->id = $id; 
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getCoach(): string
    {
        return $this->coach;
    }
    public function setCoach(string $coach): void
    {
        $this->coach = $coach;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getGroupe(): string
    {
        return $this->groupe;
    }
    public function setGroupe(string $groupe): void
    {
        $this->groupe = $groupe;
    }
    public function getCups(): int
    {
        return $this->cups;
    }
    public function setCups(int $cups): void
    {
        $this->cups = $cups;
    }
    public function getFederation(): string
    {
        return $this->federation;
    }
    public function setFederation(string $federation): void
    {
        $this->federation = $federation;
    }
    public function destroy():void
    {
        $this->delete('teams', $this->id);
    }
    public function add_team(): void
    {
        $this->id = $this->insert('teams',['name'=>$this->name,'coach'=>$this->coach,'image'=>$this->image ,'groupe'=>$this->groupe,'cups'=>$this->cups,'federation'=>$this->federation,'description'=>$this->description,'image'=>$this->image]); 
    }
    public function show(): object
    {
       return $this->select('teams', $this->id);
    }
    public function showAllTeams(): array
    {
        return $this->selectAll('teams');
    }
    public function edit():void{
        $this->update('teams',$this->id,['name'=>$this->name,'coach'=>$this->coach,'image'=>$this->image ,'groupe'=>$this->groupe,'cups'=>$this->cups,'federation'=>$this->federation,'description'=>$this->description,'image'=>$this->image]);
    }
}

    