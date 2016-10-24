<?php require_once('init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kalkulator Zmydlania</title>
    <!--    <link href="offline/bootstrap.min.css" rel="stylesheet">-->
    <!--    <script src="offline/jquery-3.1.1.min.js"></script>-->
    <!--    <script src="offline/bootstrap.min.js"></script>-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link href="kalkulator.css" rel="stylesheet">
    <script type="text/javascript" src="kalkulator.js"></script>
</head>
<body>

<nav class="navbar navbar-static-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="#" data-container="body" data-toggle="popover" data-placement="bottom"
           data-content="" title="Instrukcja obsługi" data-trigger="focus">Instrukcja <span
                class="glyphicon glyphicon-hand-down"
                aria-hidden="true"></span></a>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Instrukcja</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p>1. Wybierz zasadę</p>
            <p>2. Wybierz procent zmydlenia*</p>
            <p>3. ...</p>
            <p>4. PROFIT</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php Draw::Tables(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php Draw::Form(); ?>
        </div>
    </div>
</div>
</body>
</html>
