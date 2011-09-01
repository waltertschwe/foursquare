<?php

        $CLIENT_ID = "ZHDPTZOYMM2J2X0ZISU2FGOSELDRELTVS1JOGC540LUIQBTX";
        $CLIENT_SECRET = "SJEVZ0ELN34NMBZJEYFLD1HYQCIBJZ1WNACIF5OGHZIRNGNU";
        $REDIRECT_URI = "http://schweitzertech.com";
        $RESPONSE_TYPE = "code";

        $var = "https://foursquare.com/oauth2/authenticate?client_id=" . $CLIENT_ID . $CLIEND_ID . "&response_type=" . $RESPONSE_TYPE . "&redirect_uri=" . $REDIRECT_URI;

        header("Location: $var");


        // create curl resource
        //$ch = curl_init();

        // set url
        // curl_setopt($ch, CURLOPT_URL, "http://schweitzertech.com");

        //return the transfer as a string
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        // $output = curl_exec($ch);
        
        //echo "output = " . $output;
        
        // close curl resource to free up system resources
        //curl_close($ch);
?>
                