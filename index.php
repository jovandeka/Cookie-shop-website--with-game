<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Pojedi Sve Kolačiće</title>

    <link rel="shortcut icon" href="./Slike/Ikonice/djumbirko slicica.png" type="image/x-icon">
    <link rel="icon" href="./Slike/Ikonice/djumbirko slicica.png" type="image/x-icon">
    <!-- Bootstrap cdn -->
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    <script src="https://kit.fontawesome.com/49ff4a7b2e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class="index-bg">
    <nav class="navbar navbar-expand-custom navbar-mainbg" style="z-index: 1;">
        <a class="navbar-brand navbar-logo" href="#"><img src="./Slike/Ikonice/spremanje2 slicica.png" style="width:30px;">&nbsp;Pojedi Sve Kolačiće</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" id="NavNaslovna" href="#naslovna"><i class="fas fa-cookie-bite"></i>Naslovna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavGalerija" href="#galerija"><i class="fa fa-picture-o"></i>Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavCenovnik" href="#cenovnik"><i class="fas fa-book-open"></i>Cenovnik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavONama" href="#onama"><i class="fas fa-users"></i>O nama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavMreze" href="#mreze"><i class="fas fa-globe"></i>Društvene mreže</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavIgrica" href="#igrica"><i class="fas fa-gamepad"></i>Igrica</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="igrica" style="display:none;">

            <span id="boxbuttons">
                <span class="brojac">
                Broj klikova
                <span id="counter">0</span>
                </span>
                <span class="reset">
                <a onclick="ResetGame();"><i class="fas fa-undo-alt"></i></a>
                </span> 
            </span>
            <div id="pobeda">Pobedili ste <br> svaka čast !!!</div>
            <div id="boxcard"></div>

    </div>

    <div id="mreze" style="display:none;">
        <ul>
            <li>
                <a class="instagram" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="tiktok" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="fab fa-tiktok" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="google" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="facebook" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="onama" style="display:none;" class = "item">
        <h2>onama</h2>
        <p>Lorem ipsulm dolor sit amet rem adipisci delectus? consectetur adipisicing elit. Ipsam cum, voluptate vero, blanditiis voluptatum aut consectetur et in quam rem adipisci delectus enim quod a laudantium perferendis ad possimus culpa?</p>
    </div>

    <div id="cenovnik" style="display:none;" class = "item">
        <h2>cenovnik</h2>
        <p>Lorem ipsulm dolor sit amet rem adipisci delectus? consectetur adipisicing elit. Ipsam cum, voluptate vero, blanditiis voluptatum aut consectetur et in quam rem adipisci delectus enim quod a laudantium perferendis ad possimus culpa?</p>
    </div>

    <div id="galerija" style="display:none;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="21"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="22"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="23"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="24"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="25"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (1).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (2).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (3).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (4).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (5).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (6).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (7).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (8).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (9).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (10).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (11).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (12).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (13).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (14).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (15).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (16).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (17).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (18).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (19).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (20).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (21).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (22).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (23).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (24).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (25).jpg" >
                </div>
                <div class="carousel-item">
                <img class="d-block w-50" src="Slike/medenjaci/medenjaci (26).jpg" >
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>

    <div id="naslovna" class = "item">
        <h2>naslovna</h2>
        <p>Lorem ipsulm dolor sit amet rem adipisci delectus? consectetur adipisicing elit. Ipsam cum, voluptate vero, blanditiis voluptatum aut consectetur et in quam rem adipisci delectus enim quod a laudantium perferendis ad possimus culpa?</p>
    </div>
    
    <div class="footer" id="scrollfoot">
        <?php include("footer.php")?>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="./JS/navbar.js"></script>
    <script src="./JS/display.js"></script>
    <script src="./JS/game.js"></script>
    <script src="./JS/gallery.js"></script>

</body>
</html>
