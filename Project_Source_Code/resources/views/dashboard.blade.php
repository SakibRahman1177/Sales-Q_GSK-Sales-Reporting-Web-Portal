

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
	<style>
		h3{
			font-size: 15px;
		}
		</style>
</head>

<body>
@include('top');
@include('header');
<div class="Mat">

<section class="section-team">
		<div class="contain">
			<!-- Start Header Section -->
			<div class="row justify-content-center text-center">
				<div class="col-md-8 col-lg-6">
					<div class="header-section">
						<h3 class="small-title">Expert Marketing</h3>
						<h2 class="title">Let's meet with our team members</h2>
					</div>
				</div>
			</div>
			<!-- / End Header Section -->
			<div class="row">
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/sujit.jpg')}}" alt="National Sales and Expert Lead" height="270">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">Sujit Paul</h3>
							<span class="speciality">National Sales and Expert Lead</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/shaike.jpg')}}" alt="EM Operation Officer" height="270">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">Shaike Rahman</h3>
							<span class="speciality">EM Operation Officer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/rasel.jpg')}}" alt="Expert MIS Operation Head" height="270">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">Rasel Mia</h3>
							<span class="speciality">Expert MIS Operation Head</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/akif.png')}}" alt="" height="270">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">Akif Rahman</h3>
							<span class="speciality">EM Brand Officer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/morshed.jpg')}}" alt="" height="240">
							
						</div>
				<div class="person-info">
							<h3 class="full-name">Md. Morshed Alam Sarker</h3>
							<span class="speciality">EM Area Scientific Manager</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/omar.jpg')}}" alt="" height="270">
							
						</div>
				<div class="person-info">
							<h3 class="full-name">Umor Faruk</h3>
							<span class="speciality">EM Area Scientific Manager</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="{{url('../images/person.jpg')}}" alt="" height="240">
							
						</div>
				<div class="person-info">
							<h3 class="full-name">Md. Imam Hasan Nadim</h3>
							<span class="speciality">EM Area Scientific Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<h1 class="title" style="font-weight:bold; text-align:center;">Expert Consultance</h2><hr>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="{{url('../images/ad1.jpg')}}" alt="Los Angeles" style="width:100%;height: 500px;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="{{url('../images/ad2.jpg')}}" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="{{url('../images/ad3.jpg')}}" alt="New York" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

	  <div class="item">
        <img src="{{url('../images/ad4.jpg')}}" alt="New York" style="width:100%;">
        <div class="carousel-caption">
        </div>

      </div>
	  <div class="item">
        <img src="{{url('../images/ad5.jpg')}}" alt="New York" style="width:100%; height: 700px;">
        <div class="carousel-caption">
        </div>
      </div>

	  <div class="item">
        <img src="{{url('../images/RR_Advert.png')}}" alt="New York" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


	
</div>
</body>
</html>