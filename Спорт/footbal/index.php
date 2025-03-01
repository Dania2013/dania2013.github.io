<?
        $token = '6636e9b7af8a4227a3388f05ca908b23'; 
        // $key1 = microtime(true);
        // $key2 = md5($key1.$secret);
        
        $sendData = array(
            'X-Auth-Token' => $token,  
        );
        
        $oCurl = curl_init();
        curl_setopt($oCurl, CURLOPT_URL, "https://api.football-data.org/v4/teams/67/matches?status=SCHEDULED&limit=1");
        curl_setopt($oCurl, CURLOPT_POST, true);
        curl_setopt($oCurl, CURLOPT_HEADER, false);
        // curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, false);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS, $sendData);
        $result = curl_exec($oCurl);
        echo "<p>$result</p>";
        curl_close($oCurl);
?>
