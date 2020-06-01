<!DOCTYPE html>
<html>
<head>
    <title>Report</title>

    <meta charset="utf-8" />
    <meta name ="viewport" content="widtg=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        .heroImage{
            background-image: url(13coronavirus-explainer-articleLarge-v2.jpg);
            border-radius: 0;
            height: 120vh;
            margin-bottom:0 ;
            background-size:cover;
        }

        .alert{
            display: none;
        }

        b{
            font-weight: bold;
            font-style: italic;
        }

        #success{
            font-style: italic;
            font-family: "sans-serif", Georgia, serif;
            font-size: 4vh;
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
        <div class ="container">
            <h1 class="display-4 text-light mt-4">Covid-19 statistic </h1>
            <p class="lead text-light">
                Please put down the searching <strong class = "text-warning">Country name</strong>
            </p>
            <form>
                <div class="form-group col-md-7 mx-auto">
                    <input id="enter" type="type" name="city" class="form-control" placeholder="For example: USA,China,Japan">
                </div>
            </form>

            <button id="answer" type="submit" name="submit" class="btn btn-warning btn-lg">
                Enquire

            </button>
            <div class="col-8 mx-auto mt-3">
                <div id="success" class="alert alert-success">enquire success</div>
                <div id="fail" class="alert alert-danger">Sorry.Can't found</div>
                <div id="noinput" class="alert alert-danger">Please enter city name</div>
            </div>

        </div>
    </div>
    <script>
        $("#answer").click(function(event){
            event.preventDefault();
            $("alert").hide();
            if($("#enter").val()!=""){
                $.get("4021php.php?city="+$("#enter").val(),function(data){
                    if(data==""){
                        $("#fail").fadeIn();
                        $("#success").html(data).fadeOut();
                        $("#noinput").fadeOut();
                    }
                    else{
                        $("#success").html(data).fadeIn();
                        $("#fail").fadeOut();
                        $("#noinput").fadeOut();
                    }
                });
            }
            else{
                $("#noinput").fadeIn();
            }
        });
    </script>

</body>
</html>