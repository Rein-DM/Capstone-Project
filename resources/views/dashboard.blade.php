@extends('layouts.app1')
@section('title', 'Dashboard')
@section('contents')

<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<!-- All CSS -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_assets/css/sb-admin-2.css') }}">


</head>
<body>

	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> 
      <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button">
      </button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		
    </div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="{{ asset('admin_assets/img/Crop2.png') }}">
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('admin_assets/img/Crop2.png') }}">
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('admin_assets/img/Crop2.png') }}">
				<div class="carousel-caption">
					<h5>Mabalacat City Accounting Office</h5>
					<p>
          To ensure that the growth trajectory of Mabalacat City resulting from competitive economic performance 
          and good governance will be inclusive and will escalate the quality of life of all members of the community; thus, 
          the thematic priorities of the Local Government Unit of Mabalacat are set forth in the following pillars of development.
          </p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
<br><br><br>


	
	<!-- All Js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></body>
</html>

@endsection
