<?php
	session_start();
?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<?php	
			echo "<h3>Seja bem-vindo, {$_SESSION["name"]} {$_SESSION["email"]}</h3>";
		?>
			<div class="btn-group">
				 
				<button class="btn btn-default" type="button">
					<em class="glyphicon glyphicon-align-left"></em> Left
				</button> 
				<button class="btn btn-default" type="button">
					<em class="glyphicon glyphicon-align-center"></em> Center
				</button> 
				<button class="btn btn-default" type="button">
					<em class="glyphicon glyphicon-align-right"></em> Right
				</button> 
				<button class="btn btn-default" type="button">
					<em class="glyphicon glyphicon-align-justify"></em> Justify
				</button>
			</div>
			<div class="carousel slide" id="carousel-135288">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-135288">
					</li>
					<li data-slide-to="1" data-target="#carousel-135288" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-135288">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="Carousel Bootstrap First" src="http://lorempixel.com/output/sports-q-c-1600-500-1.jpg">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item active">
						<img alt="Carousel Bootstrap Second" src="http://lorempixel.com/output/sports-q-c-1600-500-2.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="http://lorempixel.com/output/sports-q-c-1600-500-3.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-135288" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-135288" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
