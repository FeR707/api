<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personajes</title>

  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/font-awesome.css">
  <link rel="stylesheet" href="/css/jquery.bxslider.css">
  <link href="/css/overwrite.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/css/set1.css" />
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Rick and Morty</span>
				</button>
        <a class="navbar-brand" href="{{route('inicio')}}"><span>ProOnliPc</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="{{route('inicio')}}">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="portfolios">
          <div class="text-center">

            <h1>{{$personaje['name']}}</h1>

            <a href="#"><img src="{{$personaje['image']}}"></a>

            <p>Id: {{$personaje['id']}}</p>
            <p>Especie: {{$personaje['species']}}</p>
            <p>Origen: {{$personaje['origin']['name']}}</p>
            <p>Genero: {{$personaje['gender']}}</p>
            <p>Estatus: {{$personaje['status']}}</p>
            
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @foreach($personajes as $nuevo)

        <a href="{{route('detalle.personaje' ,$nuevo['id'])}}" class="flipLightBox">
          <img src="{{$nuevo['imagen']}}" alt="{{$nuevo['nombre']}}" title="{{$nuevo['nombre']}}" title width="230" height="230" alt="#" />
        </a>

        @endforeach
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.html"><h1><span>e</span>Nno</h1></a>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam consectetur adipiscing elit Cras suscipit arcu libero
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Latest Posts</h3>
            <ul>
              <li><a href="#">This is awesome post title</a></li>
              <li><a href="#">Awesome features are awesome</a></li>
              <li><a href="#">Create your own awesome website</a></li>
              <li><a href="#">Wow, this is fourth post title</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Stay in touch</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> example@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> ProOnliPc inc | PO Box 23456 Little Lonsdale St, New York <br> Victoria 8011 USA</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; ProOnliPc Theme. All Rights Reserved
            <div class="credits">
              
              <a href="#">ProOnliPc Themes</a> by <a href="#">ProOnliPc</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
