
<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Sliders using Twitter Bootstrap 3 - Demos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
        <h1>JavaScript Sliders using Twitter Bootstrap 3</h1>
        <p>by <a href="http://www.sitepoint.com">SitePoint Pty Ltd</a> | powered by <a href="http://www.extremecss.com">Extreme CSS</a></p>

    </div>

    <div class="container">
      <h2>Default Slider</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="../Images/logo_small.png" alt="Apple iPhone 5S">
            <div class="carousel-caption">
              <h3>Apple iPhone 5S</h3>
              <p>The iPhone 5s isn't a radical departure from its predecessor in body (unless you count a new gold color), but under the hood are a number of changes that give Apple's newest flagship some real firepower, with the best still yet to come. </p>
            </div>
          </div>
          <div class="item">
            <img src="../Images/logo_small (1).png" alt="Samsung Galaxy Note 3">
            <div class="carousel-caption">
              <h3>Samsung Galaxy Note 3</h3>
              <p>Similar to the updates Samsung made to the Galaxy S4, the new Note 3 features a bigger display while remaining very similar in size to the Note II; the biggest change in the Note 3 is the refinement of the S Pen and its accompanying software.</p>
            </div>
          </div>
          <div class="item">
            <img src="../Images/logo_small (2).png" alt="Apple iPhone 5S">
            <div class="carousel-caption">
              <h3>Sony Xperia Z1</h3>
              <p>Sony's got a plan and it's sticking to it - while other makers pile software feature upon feature, the Japanese focus on their historical strengths, such as beautiful, durable design, photographic excellence and enviable display tech. That in short is what the Xperia Z1 is all about.</p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>