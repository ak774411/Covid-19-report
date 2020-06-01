<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL, 'https://coronavirus-19-api.herokuapp.com/countries');
$result = curl_exec($ch);
$array = json_decode($result, true);
// Get the JSON to a PHP arra

// Sort the array

// Slice it, getting the first 10 elements
$parts = array_slice($array, 0, 10);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Report</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="widtg=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>

        .heroImage {
            background-image: url(blue-violet-motion-background-free-download-undesigns-1280x800.jpg);
            border-radius: 0;
            height: 450vh;
            margin-bottom: 0;
            background-size: cover;
            background-position: center bottom, center top;
            background-repeat: no-repeat, repeat;
        }

        .alert {
            display: none;
        }


        .txtBox2 {
            border-radius: 5vmin;
            background-image: linear-gradient(to bottom, rgba(255,0,255,0.5), rgba(0,0,255,0.5)),url(123.jpg);
            height:100%;
            top: 80%;
            bottom: 70%;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 10px;
            padding-bottom: 5px;
        }

        .why {
            text-align: left;
            width: 70vmin;
            height: 33vmin;
            box-sizing: content-box;
            margin: 4vmin 4vmin 4vmin 4vmin;
            padding-left: 3px;
        }
        h1{
            text-align: center;
            color:orange;
        }

        h4 {
            line-height: 1.6;
            font-size: 3vmin;
            color: orange;
        }

        h5 {
            color: rgb(180, 180, 180);
            line-height: 1.6;
            font-size: 3vmin;
            color:rgb(180,180,120);
        }

        h6 {
            font-weight: bolder;
            line-height: 1.6;
        }
    </style>
    <script>

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="btn btn-success" href="4021.php">Covid-19 statistic home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="btn btn-link" href="global.php">Global Coronavirus information <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-link" href="40212.php">Top 10 serious country</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron heroImage text-center">
        <div class="container">
            <h1 class="display-4 text-light mt-4">Covid-19 </h1>
            <div id="recentActivities"></div>
            <div class="container">
                <div class="row">
                    <h1>Top 10 most confirmed province or country:</h1>
                    <?php $x = 1; ?>
                    <?php foreach ($parts as $item) { ?>
                            <div class="why">
                                <div class="txtBox2">
                                    <h4><?= $x ?>. <?= $item["country"] ?></h4>
                                    <h5>Confirmed Case:<?= number_format($item["cases"]) ?></h5>
                                    <h5>Recovered:<?= number_format($item["recovered"]) ?></h5>
                                    <h5>Deaths:<?= number_format($item["deaths"]) ?></h5>
                                    <?php $x++; ?>
                                </div>
                            </div>



                    <?php } ?>
                </div>
            </div>


        </div>
    </div>



</body>

</html>