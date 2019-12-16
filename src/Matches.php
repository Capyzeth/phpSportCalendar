<?php


namespace DAL;
use DateTime;
use DBC\DatabaseContext;

include("DatabaseContext.php");

class Matches
{
    //... sql to get all matches order by matchday , categoryName
    private function getAllMatches(){

        $database = new DatabaseContext();

        //... get the results , maybe there is a simpler/better way
        $query = "SELECT * FROM team  JOIN game ON teamID = _teamID1 JOIN category ON _categoryID = categoryID JOIN sportevent ON _eventID = eventID ORDER BY matchday asc , categoryName asc";
        $results1 = mysqli_query($database -> openConnection(),$query);
        $database -> closeConnection();

        $query = "SELECT matchID,teamName,logo FROM team JOIN game ON teamID = _teamID2 ORDER BY matchID asc";
        $results2 = mysqli_query($database -> openConnection(),$query);
        $database -> closeConnection();

        //... fetches the results and merges them to a single matches array - maybe there is a simpler/better way?
        $matches = [];
        $opponent = [];
        $i = 0;
        while($row2 = $results2 -> fetch_assoc()) {
            $opponent[$i] = $row2;
            $i++;
        }

        $i = 0;
        $j = 0;
        while($row = $results1->fetch_array(MYSQLI_ASSOC)){
            $matches[$i] = $row;
            while($j < count($opponent)) {
                if ($matches[$i]["matchID"] == $opponent[$j]["matchID"]) {
                    $matches[$i]["enemyName"] = $opponent[$j]["teamName"];
                    $matches[$i]["enemyLogo"] = $opponent[$j]["logo"];
                    $j = 0;
                    break;
                }
                $j++;
                print_r($row2);
            }
            $i++;
        }

        return $matches;

    }

    //... gets all matches in the right format for the content pages
    public function getMatches(){
        $results = $this->getAllMatches();
        $matches = [];

        for($i = 0; $i < count($results);$i++){
            $datetime = new DateTime($results[$i]["matchday"]);
            $matches[$i]["date"] = $datetime ->format('d.m.Y');
            $matches[$i]["time"] = $datetime ->format('H:i');
            $matches[$i]["day"] = $this->parseDayToGerman($datetime->format('D'));
            $matches[$i]["score"] = $results[$i]["score"];
            $matches[$i]["categoryName"] = $results[$i]["categoryName"];
            $matches[$i]["eventName"] = $results[$i]["eventName"];
            $matches[$i]["teamName1"] = $results[$i]["teamName"];
            $matches[$i]["teamLogo1"] = $results[$i]["logo"];
            $matches[$i]["teamName2"] = $results[$i]["enemyName"];
            $matches[$i]["teamLogo2"] = $results[$i]["enemyLogo"];
        }
        return $matches;
    }

    //... parses english day abbreviation to german ones
    private function parseDayToGerman($dayAbbreviation){
        if($dayAbbreviation == "Mon"){
            return "Mo.";
        }elseif ($dayAbbreviation == "Tue"){
            return "Di.";
        }elseif ($dayAbbreviation == "Wed"){
            return "Mi.";
        }elseif ($dayAbbreviation == "Thu"){
            return "Do.";
        }elseif ($dayAbbreviation == "Fri"){
            return "Fr.";
        }elseif ($dayAbbreviation == "Sat"){
            return "Sa.";
        }elseif ($dayAbbreviation == "Sun"){
            return "So.";
        }
    }

    //getMachtesSortedByEvent - gets all matches order by matchday , eventName
    //getCategory - gets all categories
    //getEvent - gets all sportevents (e.g. cups, tournaments, etc.)
    //getMatchesFromTeam - gets all matches from a team

    //createMatch - inserts new matches
    //deleteMatch - deletes very old and obsolete matches maybe?
    //updateMatch - e.g. the score

    //helper functions if needed
}