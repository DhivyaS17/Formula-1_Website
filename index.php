<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

</style>
    <title>Formula 1</title>
    <link rel="icon" href="f1 logo.png">
</head>
<body>
    <div class="container-fluid">
        <!-- name bar-->
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="index.php">
              <img src="fia_logo.png" width="50" height="40" alt="" class="d-inline-block align-top mx-2">Fédération Internationale de l'Automobile
            </a>
            <form class="form-inline">
               <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="login_page()" value="Login"/>
               
               <input type="button" class="btn btn-danger my-2 my-sm-0" onclick="register_page()" value="Register" />
           </form>
        </nav>  
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="index.php"><img src="f1 logo.png" width="40" height="30" class="d-inline-block align-top mx-2">Formula 1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="true" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="teams.php">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="ada_pongada.php">Race</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="f1_slang.php">Terminologies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="table.php">Race outcomes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#" id="for_fun">Meme</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_faq.php">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
<div class="container">
    <div class="row">
       <h3 align="center">Formula 1 Explained</h3><br><br>
    
        
        <img src="f1-linup.jpg" weight="" height="" alt="" title="Formula 1 Race" class="rounded center">
        
    </div>
    <br><br>
    <div class="row">
        <p>Formula One (F1) is a series of races held at different venues around the world, of the fastest open-wheel, 
    open-cabin, single-seated, four-wheeled autos in the world. There have been a few years when even 
    six-wheeled cars participated in F1.</p>

    <p>The word <b>Formula</b>, included in the name, refers to a set of rules that the constructors of the car, its 
    mechanics and the drivers have to strictly follow during the tenure that they are members of F1.</p>

    <p>The word <b>One</b> comes from the grading FIA issues to the racing tracks, the approved cars and the drivers’ 
    licences. The <i>One</i> is also to distinguish F1 from street car racing and also to indicate that it is the 
    ultimate in formula racing.</p>

    <p>Formula One is governed by the Federation Internationale de l’Automobile (FIA) owned by the Formula One Group.
    The organisation amends, alters and introduces rules to Formula One so as to ensure the safety of the 
    participants in the races, promote fair play, and ensure that the followers and spectators of Formula 
    One get a good deal.</p>

    <p>There are 10 teams and 20 drivers in total who take part in the World Constructors Championship(WCC) and World Drivers 
    Championship(WDC) respectively wanting to be crowned the fastest in the world.</p>

    <p>The first world championship race was held in 1950 at Silverstone in the United Kingdom.</p>

    <p align="center">And this sums up F1 in general.</p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script> 

<script>
function login_page(){
    window.location.replace("https://f1foryou.000webhostapp.com/login.php");
   
    //header('location:/public_html/login.php');
}

function register_page(){
    window.location.replace(" https://f1foryou.000webhostapp.com/register.php");
}
</script>
<script>
  $(document).ready(function(){
    $("#for_fun").click(function(){
      alert("login before you see the meme page");
      window.location.replace("https://f1foryou.000webhostapp.com/login.php);
      
    });
  });
  </script>
</body>
</html>
