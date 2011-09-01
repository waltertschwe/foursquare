<?php

        $CLIENT_ID = "Q5TMXLB2NLJ0NO0XZHWBVAEQT0N1FOWTFB2FUXBFQR0APWPO";
        $CLIENT_SECRET = "R5LYDRLFE33SZ33KTTIFEJ5TE5BNEMFWVPFN5MMYPQ0QAK5M";

        $ch = curl_init();

        $url = "https://api.foursquare.com/v2/venues/search?ll=40.7,-74&client_secret=" . $CLIENT_SECRET . "&client_id=" . $CLIENT_ID;

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        echo "output = " . $output;

        curl_close($ch);
?>
