<?php
    echo "This is a age calculator";
    print '<br>';

    $fname = "Bertram";


    $yob = 2004;
    $month = 7;
    $day = 24;

    print $fname ."Was born on: ".$yob;
    print '<br>';


    $current_year = date('Y');

    print "The current year is: ". $current_year;
    print '<br>';
    $age = $current_year -  $yob;

    print $fname." Is ".$age."Years old";

    $userdob = $age-07-24;

    $birthday = new DateTime($userdob);
    $today =  new DateTime('today');

    $interval = $birthday->diff($today);
    print '<br>';

    print '<prev>';
    print_r($interval);
    print '<prev>';


    print $fname . " is ". $interval->y . " Years, " .$interval->m . " months " . $interval->d . " days old";

?>
