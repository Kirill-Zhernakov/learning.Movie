<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>MOViE</title>

  <link rel="icon" href="/journal/images/favicon.png" type="images/png">

  <link href='http://fonts.googleapis.com/css?family=Philosopher&subset=cyrillic' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="/journal/style.css" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
      <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST']?>/journal/"><h1 class="logo">MOViE</h1></a>

    <ul class="navbar-nav menu">
    	<li class="nav-item">
        <a class="nav-link " href="http://<?php echo $_SERVER['HTTP_HOST']?>/journal/">Home</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST']?>/journal/about">Authors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST']?>/journal/feedback">Feedback</a>
        </li>
      </ul>
  
    <form class="form-inline form_search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
  <br>

	<?php include 'views/'.$content_view; ?>

  <br><br>

  <footer class="footer">
    <hr class="col-lg-10">
  	
    <a href="http://<?php echo $_SERVER['HTTP_HOST']?>/journal/feedback">Feedback</a>
    <div>&copy; Company 2017-2021</div>
  </footer>


	<script type="text/javascript">
    "use strict";
		
		window.onscroll = function() {
      // Получаем положение скролла
      let scrolled = window.pageYOffset || document.documentElement.scrollTop; 
      
      if(scrolled !== 0){
        // Если прокрутка есть, делаем блок прозрачным
        document.querySelector('.navbar').style.opacity = '0.7';
      } else {
        // Если нет, делаем его полностью видимым
          document.querySelector('.navbar').style.opacity = '1';
      };
    };
	</script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html> 