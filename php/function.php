<?php

    function format($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);


    }

?>
