<main>
    <h1>Sportevent Kalender</h1>
    <ul>
        <?php

        use DAL\DAL;

        $dal = new DAL();
        $matches = $dal -> getMatches();
        for($i = 0; $i < count($matches); $i++){
            echo '<li>';
            echo $matches[$i]["day"];
            echo ', ';
            echo $matches[$i]["date"];
            echo ', ';
            echo $matches[$i]["time"];
            echo ' Uhr, ';
            echo $matches[$i]["categoryName"];
            echo ', ';
            echo $matches[$i]["teamName1"];
            echo ' - ';
            echo $matches[$i]["teamName2"];
            echo '</li>';

        }
        ?>
    </ul>
</main>
