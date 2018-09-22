<html lang="en">

  <head>

    <?php include('header.php'); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Half Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <script>
  //usar esto para el proyecto
  function loadDoc(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200){
        document.getElementById("demo").innerHTML = this.responseText;

      }
      };
      xhttp.open("GET","ajax.txt", true);
      xhttp.send();
    }

</script>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url(img/Cartago/basilica.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Basílica de Nuestra Señora de los Ángeles </h3>
              <p>La Basílica de Nuestra Señora de los Ángeles es un templo católico de la ciudad de Cartago, Costa Rica. Se encuentra en el lugar donde, según la tradición, la mulata Juana Pereira, del barrio marginal conocido como Puebla de los Pardos, encontró en 1635 una imagen de Nuestra Señora de los Ángeles, a la cual pronto se atribuyeron numerosos milagros. En el sitio se construyó una ermita, a la cual sustituyeron después templos de mayor solidez y capacidad, especialmente el edificado en 1675. Fue erigido en basílica durante el episcopado de Monseñor Anselmo Llorente y Lafuente.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(img/Cartago/colegio-gonzaga.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Colegio de San Luis Gonzaga</h3>
              <p>El Colegio de San Luis Gonzaga nació en los aciagos días de 1842, en el mes de la caída de Francisco Morazán, quien antes había propiciado la de Braulio Carrillo. Ese mismo año, la Asamblea Constituyente discutía la creación del Colegio de Cartago y los diputados, todos Presbíteros, José Francisco Peralta, Isidro Méndez, Joaquín Flores, y José María Arias, trataron con sus demás compañeros, la conveniencia de poner el nuevo colegio el patronato de San Luis Gonzaga, patrón de los estudiantes católicos.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(img/Cartago/ruinas.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Ruinas de Parroquia Santiago Apóstol</h3>
              <p>Las llamadas "ruinas de la Parroquia" o ruinas de Cartago se hallan ubicadas al este de la Plaza Mayor de la ciudad. Están constituidas por los muros y escalinatas de un templo de estilo románico, cuya construcción se inició en la segunda mitad del siglo XIX y fue interrumpida como consecuencia del terremoto de Santa Mónica (4 de mayo de 1910),y de otros dos terremotos, cuando la edificación estaba ya en vías de concluirse. En realidad no se trata de ruinas en el sentido histórico, sino de una construcción interrumpida, pero constituyen un sitio de gran interés para los visitantes y confieren mucho carácter al centro de la población.</p>
            </div>
          </div>
           <!-- Slide four - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(img/Cartago/Pirie.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Edificio Pirie</h3>
              <p>El edificio que ocupa la Casa de la Ciudad, conocido como Edificio Pirie, fue construido en la década de 1880, por el propietario inicial el sacerdote Fulgencio Bonilla, la edificación original era de una sola planta y ocupaba el área que ocupa actualmente el edificio, con la excepción de la edificación adjunta que actualmente se encuentra en la parte posterior (oeste) y que es utilizada como sala de danza y de espectáculos, originalmente el edificio fue construido en calicanto, que para la época constituía el modo de construcción más avanzado de que se disponía en la ciudad de Cartago.</p>
            </div>
          </div>
           <!-- Slide five- Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(img/Cartago/Cuartel.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>El Cuartel</h3>
              <p>El Cuartel de Cartago fue construido por orden del Lic. Braulio Carrillo y reconstruido después del terremoto de 1910, siendo el Presidente el Lic. Ricardo Jiménez Oreamuno. El citado inmueble desempeñó una misión importante en la revuelta armada de los Tinoco en 1917 para derrocar al entonces Presidente Lic. Alfredo González Flores. Por su estructura arquitectónica se hace necesario velar por su conservación.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

<!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Cartago
        <small>Arquitéctonica</small>
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/basilica.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Basilica</a>
              </h4>
              <p class="card-text">La Basílica de Nuestra Señora de los Ángeles es un templo católico de la ciudad de Cartago, Costa Rica</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/colegio-gonzaga.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Colegio San Luis Gonzága</a>
              </h4>
              <p class="card-text">El Colegio de San Luis Gonzaga nació en los aciagos días de 1842. Se terminó de construir en 1928, en 1929 fue ocupado e inaugurado en 1930.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/cuartel.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">El Cuartel</a>
              </h4>
              <p class="card-text">Construido en Cartago entre 1912 y 1915 que funcionó como cuartel militar ahora es la sede de un museo histórico y una moderna biblioteca</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/Pirie.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Edificio Pirie</a>
              </h4>
              <p class="card-text">Se estima que fue construido entre 1860 y 1870 con una técnica conocida como calicanto que utiliza piedras y lleva un repello de cal y arena.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/ruinas.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Las Ruinas</a>
              </h4>
              <p class="card-text">Están constituidas por los muros y escalinatas de un templo de estilo románico, cuya construcción se inició en la segunda mitad del siglo XIX y fue interrumpida por 3 terremoto</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Cartago/IglesiaMA.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Iglesia Maria Auxiliadora</a>
              </h4>
              <p class="card-text">El 24 de Mayo se erige oficialmente la Parroquia de María Auxiliadora, nombrándose como Primer Cura Párroco al Presbítero Luis Martínez Ortega, de grata memoria.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->


    <!-- Footer -->
    <?php include('footer.php'); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
