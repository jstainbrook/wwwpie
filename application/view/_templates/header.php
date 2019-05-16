<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WWWPie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <script
         src="https://code.jquery.com/jquery-3.4.1.min.js"
         integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
         crossorigin="anonymous"></script>   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class='fa fa-home'></span> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class='fa fa-envelope'></span> </span>Messages <span class='badge badge-info' id='badge'>0</span></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" id="searchform">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchbox"><span class="fa fa-search search"></span>  
    </form>
  </div>
</nav>
<div class="container">
	<div class="row">
		<h2>Auto-refreshing badge numbers on navbar</h2>
		
	</div>
	<div class="row">
	    Just a simple little bootsnipp with jquery to auto-update notification badge.  You can combine this with ajax to get a count from a database every thirty seconds or so, i.e. facebook style.  For the purposes of this bootsnipp, I'm initializing with 0 and getting a random number between 1-100 from random.org to illustrate.
	    <br><br>Really, you would use this with an SQL count check, i.e.: <code class='p-2'>select count(*) as count from table where column='criteria'</code>Make a function in whatever back-end language you are using (php, javascript, asp, whatever) then call that function with ajax, returning only a number to the page.  So, if you are recording messages in the database, you can get an accurate count every whatever-interval-you-set.  For the purposes of this demo I've got it set to 5 seconds.
	    <br><br>Also in this snipp, a little css here with search on nav to include faded search icon from font awesome.
	</div>
</div>