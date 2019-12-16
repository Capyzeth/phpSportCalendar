<?php

namespace DAL;
include("Matches.php");
include("Teams.php");
include ("Players.php");

//... is the interface between content sites and the data access


class DAL
{
    public function getMatches(){
       $matches = new Matches();
       $result = $matches -> getMatches();
       return $result;
    }

    //get/create/delete & update functions from Matches/Players/Teams classes


}