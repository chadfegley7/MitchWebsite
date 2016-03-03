<!DOCTYPE html>
<html lang="en">
<head>
	 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <style type='text/css'>
      .brand-logo{
        font-family: caveat;
      }
      .boatpic{
        height: 400px;
        width: 300px;
        border: 1px solid black;
        position: relative;
        left: 100px;
      }
      .seals{
        height: 400px;
        width: 300px;
        position: relative;
        left: 250px;
        top: 5px;
        border: 1px solid black;
      }
      .fish{
        height: 500px;
        width: 100%;
        background-image: url("{{asset('/assets/pics/goldengate.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .quote{
        font-family: caveat;
      }
      .header{
        font-family: caveat;
      }
      </style>

	<meta charset="UTF-8">
	<title>Mitch White Art</title>
	<script>
	$(document).ready(function(){
      $('.parallax').parallax();
      $('.materialboxed').materialbox();
    });
	</script>
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
  <div class="fish responsive-img">
  </div>
  <div class="section white blue accent-1">
    <div class="row container">
      <h1 class="header center white-text">Storytelling Through Art</h1>
      <p class="summary white-text">Welcome to the art of Mitch White. I am a sculpting artist based out of Fort Bragg, CA where I spend everyday telling stories through art with my hands. I have been a native of the California coast throughout my entire life. I grew up going out to fish with my father all the time, learning all the ins and outs of what it takes to become a fisherman. Later on when I was finally able to purchase my first boat, I immediately went out and kept pursuing my passion for fishing, using all the knowledge my father had taught me, and still to this day continue to go out like I have done the past three decades.</p><h4 class="quote yellow-text"> "The beauty of the ocean and all sea life has been my biggest inspiration in my life."</h4>
      <div id='boatpic col s12'>
        <img src="{{asset('/assets/pics/sunset.jpg') }}" class="boatpic img-responsive">
        <img src="{{asset('/assets/pics/seals.jpg') }}" class="seals img-responsive">
      </div>
      <p class="summary white-text">I started carving at the age of 20, working mostly with wood. My father was a well known wood sculpter around the Fort Bragg area, so I had a great teacher close by. Just like fishing, my father was the cornerstone of my ability for scultping as well. I was approached by a retired fishing friend of mine, that was a known artist from Oregon, about scultping with stone. I pondered the idea, but was soo busy with fishing that I didn't get a chance to get my hands on stone sculpting for quite sometime. Then one Christmas, my mother-in-law, who herself was a brilliant artist, gave me a piece of Alabaster to work with, and from that moment on I was hooked. I fell in love with the art of stone scultping and decided to start telling my stories about being on the water through my art form, sculpting.</p>
      <h4 class='quote yellow-text'>"I am always in awe of the beauty around me so I never lack for subjects.They come to me from my memory of adventures on the water, and just by looking out on the sea everyday. I feel soo lucky to have the spirit of the ocean and all its life be apart of my existence everyday." <br>-Mitch White</h4>
      <div class="center-align">
      <a class="btn-large blue accent-2" href="/art"><i class="material-icons right">visibility</i>View Art</a>
      </div>
    </div>
  </div>
  <div class="art">
  </div>
</body>
</html>