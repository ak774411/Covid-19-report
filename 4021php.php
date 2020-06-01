<?php
    //$city = $_GET["city"];

    //$city = str_replace("","-",$city);

   
    

    //$country =$_GET["country"];
    //$contents = @file_get_contents("https://covid19.mathdro.id/api/countries/[country]");
    //preg_match("/\"phrase\">(.*?)<\/span>/i",$contents,$matches);
    //echo $matches[1];

    //echo $contents;

    //city = $_GET["city"];

    //$contents = file_get_contents('https://covid19.mathdro.id/api/countries/'.$city);

    //$contents = json_decode($contents,true);

    //$countrycase = $contents["recovered"]["value"];

    //$confirm = $contents["confirmed"]["value"];

    //$death = $contents["deaths"]["value"];

    //$result = "case".$countrycase. "confirm".$confirm."。";

    //if(!empty($contents['confirmed'])){
    //    echo $result;
    
    //}

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if(isset($_GET['city']) && !empty($_GET['city'])) {
        $y = urlencode($_GET['city']);

	    curl_setopt($ch, CURLOPT_URL, 'https://coronavirus-19-api.herokuapp.com/countries/' . rawurlencode($_GET['city']));
	    $result = curl_exec($ch);
	    $data = json_decode($result, true);

	    curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api');
	    $MainApi = curl_exec($ch);
	    $totalStatistics = json_decode($MainApi, true);

        if(!empty($data['cases'])){
            echo"<p>Country:<b>";
            echo htmlspecialchars($_GET['city'], ENT_QUOTES);
            echo"</b></p>";
            echo"<p>Confirm case:<b>";
            echo number_format($data['cases']);
            echo"</b></p>";
            echo"<p>Recovered case:<b>";
            echo number_format($data['recovered']);
            echo"</b></p>";
            echo"<p>Death case:<b>";
            echo number_format($data['deaths']);
            echo"</b></p>";
            echo"<p>Today case:<b>";
            echo number_format($data['todayCases']);
            echo"</b></p>";
            echo"<p>Today deaths:<b>";
            echo number_format($data['todayDeaths']);
            echo"</b></p>";

        }
}






    


?>