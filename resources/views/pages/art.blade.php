<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mitch's Art Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
         $(document).ready(function(){
            $('.slider').slider({height: 500});
         });
      </script>
      <style type='text/css'>
      .brand-logo{
        font-family: caveat;
      }
      .artpic{
        height: 500px;
        width: 100%;
        background-image: url("{{asset('/assets/pics/sky.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .header, .summary{
        font-family: caveat;
      }
      #pic_container{
        height: 1650px;
        width: 100%;
      }
      .pic{
        height: 267px;
        width: 599px;
        background-image: url("{{asset('/assets/pics/woodfish.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        bottom: 25px;
        max-width: 100%;
      }
       .pic2{
        height: 301px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/rabbit.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        left: 80px;
        bottom: 10px;
      }
       .pic3{
        height: 226px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/whiteseal.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        bottom: 25px;
      }
        .pic4{
        height: 284px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/blowfish.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        left: 40px;
      }
        .pic5{
        height: 298px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/sealorange.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        left: 76px;
      }
        .pic6{
        height: 223px;
        width: 314px;
        background-image: url("{{asset('/assets/pics/redseal.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
      }
        .pic7{
        height: 291px;
        width: 200px;
        background-image: url("{{asset('/assets/pics/body.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        top: 25px;
        left: 75px;
      }
        .pic8{
        height: 300px;
        width: 303px;
        background-image: url("{{asset('/assets/pics/lizard.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        top: 25px;
        left: 150px;
      }
        .pic9{
        height: 300px;
        width: 270px;
        background-image: url("{{asset('/assets/pics/babyseal.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        top: 50px;
      }
        .pic10{
        height: 334px;
        width: 350px;
        background-image: url("{{asset('/assets/pics/stonefish.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        top: 75px;
        left: 25px;
      }
        .pic11{
        height: 190px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/sealrock.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        
        left: 50px;
      }
        .pic12{
        height: 225px;
        width: 300px;
        background-image: url("{{asset('/assets/pics/blackseal.jpg') }}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid black;
        display: inline-block;
        position: relative;
        left: 340px;
        top: 100px;
      }
      .contact{
        position: relative;
        top: 100px;
      }
      </style>

</head>
<body>
  <nav>
    <div class="nav-wrapper blue accent-1">
      <a href="/" class="brand-logo center">Mitch White Scultping</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="/art">View Art</a></li>
        <li><a href="mailto:Mitchdwhite@gmail.com">Contact Mitch</a></li>
      </ul>
    </div>
  </nav>
  <div class="artpic">
  </div>
  <div class="section white blue accent-1">
    <div class="row container">
      <h2 class="header center white-text">Art Gallery</h2>
      <h4 class="summary white-text text-darken-3 lighten-3">Welcome to my art gallery. Here is some of my most recent work that is ready for sale. I hope you enjoy, if you have any questions feel free to contact me at <a href="mailto:Mitchdwhite@gmail.com">Mitchdwhite@gmail.com</a>
      </h4>
      <div id="pic_container">
        <div class="pic">
        </div>
        <div class="pic2">
        </div>
        <div class="pic3">
        </div>
        <div class="pic4">
        </div>
        <div class="pic5">
        </div>
        <div class="pic6">
        </div>
        <div class="pic7">
        </div>
        <div class="pic8">
        </div>
        <div class="pic9">
        </div>
        <div class="pic10">
        </div>
        <div class="pic11">
        </div>
        <div class="pic12">
        </div>
        <div class="contact center-align">
      <a class="btn-large blue accent-2" href="mailto:Mitchdwhite@gmail.com">Contact Mitch</a>
      </div>
      </div>
    </div>
  </div>
</body>
</html>