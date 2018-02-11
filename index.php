<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desmond</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">


    <script type="text/javascript" src="about.json"></script>
    <script type="text/javascript" src="people.json"></script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #0157ba">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">NEW HOUSE 5</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#people">People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About Us</h2>
            <hr class="light my-4">
            <!-- <p class="text-faded mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget lobortis risus. Cras non sem in ante tempor euismod. Praesent tortor massa, interdum non nibh at, aliquet accumsan libero. Vestibulum venenatis aliquam laoreet. Curabitur sed convallis quam. Pellentesque lorem nisl, scelerisque mollis nunc eu, interdum convallis ante. Fusce sed laoreet felis.</p> -->
            <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="http://nh.scripts.mit.edu/www/history.php">Button</a> -->
            <p class="text-faded mb-4" id="about_text"></p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white" id="people">
      <div class="container">
        <div class="row">
          <div class="mx-auto text-center">
            <h2 class="section-heading text-black">People</h2>
            <hr class="my-4">
            <div id="peopleCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators hidden">
                <li data-target="#peopleCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#peopleCarousel" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner" role="listbox" id="carousel-inner">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Contact</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">desmond@mit.edu</p>
            <p class="text-faded mb-4">471 Memorial Drive <br>Cambridge, MA 02139</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- <script src="vendor/scrollreveal/scrollreveal.min.js"></script> -->
    <!-- <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <script type="text/javascript">
      // var about = JSON.parse(about);
      var about_text = document.createTextNode(about[0].text);
      var p = document.getElementById('about_text');
      p.appendChild(about_text);
    </script>

    <script type="text/javascript">
      var carousel = document.getElementById('carousel-inner');
      var num_cards = 3;
      var num_slides = people.length/num_cards;
      for(i=0; i < num_slides; i++){
        var citem = document.createElement('div');
        if(i == 0){
          citem.setAttribute('class', 'carousel-item active');
        }
        else{
          citem.setAttribute('class', 'carousel-item');
        }
        carousel.appendChild(citem);
        var deck = document.createElement('div');
        deck.setAttribute('class', 'card-deck');
        citem.appendChild(deck);

        var remaining = people.length - i*num_cards;

        for(j = 0; j<Math.min(num_cards, remaining); j++){
          var card = document.createElement('div');
          card.setAttribute('class', 'card');
          deck.appendChild(card);

          var card_body = document.createElement('div');
          card_body.setAttribute('class', 'card-body');
          card.appendChild(card_body);

          var title = document.createElement('h5');
          title.setAttribute('class', 'card-title');
          var title_text = document.createTextNode(people[num_cards*i+j].name);
          title.appendChild(title_text);
          card_body.appendChild(title);

          var text = document.createElement('p');
          text.setAttribute('class', 'card-text');
          var card_text = document.createTextNode(people[num_cards*i+j].bio);
          text.appendChild(card_text);
          card_body.appendChild(text);
        }
      }
    </script>

  </body>

</html>
