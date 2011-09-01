<?php

        $code=$_GET['code'];

        $CLIENT_ID = "Q5TMXLB2NLJ0NO0XZHWBVAEQT0N1FOWTFB2FUXBFQR0APWPO";
        $CLIENT_SECRET = "R5LYDRLFE33SZ33KTTIFEJ5TE5BNEMFWVPFN5MMYPQ0QAK5M";
        $REDIRECT_URI = "http://ec2-184-72-134-220.compute-1.amazonaws.com/foursquare/response.php";

        // create curl resource
        $ch = curl_init();

        $var = "https://foursquare.com/oauth2/access_token?client_id=" . $CLIENT_ID . "&client_secret=" . $CLIENT_SECRET . "&grant_type=authorization_code&redirect_uri=" . $REDIRECT_URI . "&code=" . $code;

        // set url
        curl_setopt($ch, CURLOPT_URL, $var);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        echo "output = " . $output;

        // close curl resource to free up system resources
        curl_close($ch);
?>
