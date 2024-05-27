<?php
    echo "this is my first code";

    print '<br>';


    print date('Y');

    print '<br>';

    print  date('l');

    print '<br>';

    print "8+6";

    print '<br>';

    print 4+6;

    print '<br>';


    print date('l', strtotime('+5 days'));

    print '<br>';

    print date('l,d-M-Y' , strtotime('5+ months'));

    print "today is " . date('l,js F Y H:i:s');


?>
