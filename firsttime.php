<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
 
    <style>
      .red
      {
        color: white;
        background-color: red;
      }
      .green
      {
        color: white;
        background-color: green;
      }
      .blue
      {
        color: white;
        background-color: blue;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        	<br />
 
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        		<ol class="carousel-indicators">
        			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
        			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
        		</ol>
 
        		<div class="carousel-inner" role="listbox">
        			<div class="carousel-item active">
        				<img src="https://cdna.artstation.com/p/assets/images/images/012/850/788/large/sergey-sydney-knysh-combine-1.jpg?1536828945" alt="First Slide" />
        			</div>
 
        			<div class="carousel-item">
        				<img src="https://i.imgur.com/qYSoVGX.jpg" alt="Second Slide" />
 
        				<div class="carousel-caption">
        					<h2>Best Caption Title</h2>
        					<p>Oh yh it is indeed!!!!!! :D</p>
        				</div>
        			</div>
 
        			<div class="carousel-item">
        				<img src="https://media.moddb.com/images/members/1/441/440306/profile/88-8_Bugs_Banner.png" alt="Third Slide" />
        			</div>
        		</div>
 
        		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        			<span class="icon-prev" aria-hidden="true"></span>
        			<span class="sr-only">Previous</span>
        		</a>
 
        		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        			<span class="icon-next" aria-hidden="true"></span>
        			<span class="sr-only">Next</span>
        		</a>
        	</div>
        </div>
      </div>
    </div>
      <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  </body>
</html>