<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\Reservation;
use MVC\Model\User;

class ReservationController extends Controller
{
    function index(): void
    {
        // TODO: Implement index() method.

    }

    function create(): void
    {
        // TODO: Implement index() method.
    }

    function book(int $id_match):void{
        // TODO: Implement create() method.
        session_start();
        $qte_catg3=$_POST['qte_ticket_catg3'];
        $qte_catg2=$_POST['qte_ticket_catg2'];
        $qte_catg1=$_POST['qte_ticket_catg1'];
        $id_user=$_SESSION['id_user'];
        $user=new User();
        $user->setId($id_user);
        $match=new Matchs();
        $match->setId($id_match);


        for($i=0;$i<$qte_catg3;$i++){
            $reservation=new Reservation($user,$match,3,30);
            $reservation->add();
        }
        for($i=0;$i<$qte_catg2;$i++){
            $reservation=new Reservation($user,$match,2,40);
            $reservation->add();
        }
        for($i=0;$i<$qte_catg1;$i++){
            $reservation=new Reservation($user,$match,1,50);
            $reservation->add();
        }
        //Generation Ticket
        //$infos_matchs=$match->show();

        //header("Location: /streamstadium/Reservation/index");
    }

    function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
    public function my_tickets():void{
        $this->render("views",'my_tickets','My Tickets');
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
    }

}