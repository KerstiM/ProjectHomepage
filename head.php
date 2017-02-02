<!DOCTYPE html>
<html>
	<head>
		<title>KERSTI MILLER</title>
		<meta charset="UTF-8"/>
			<link rel="stylesheet" type="text/css" href="styletest.css">
			<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
			<link href="https://fonts.googleapis.com/css?family=Raleway:500i" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
			<script type="text/javascript" src="Pildid/js/jquery-2.2.4.min.js"></script>
			<script type="text/javascript" src="Pildid/js/jquery.cycle2.min.js"></script>
		<meta name="viewport" content="width=device-width, inital-scale=1.0">
	</head>
	<body>
		<!--	<a href="?page=main"><img id="logo" src="Pildid/logo.png" alt="Logo" style= "width:110px;height:35px;"></a> -->
			<a href="?page=main"><p id="pealogo">kersti miller</p></a>
<!--
			<nav class="menu">
			<a class="burger-nav"></a>
				<ul id="menu">
					<li><a class="active" href="?page=main">web+disain</a></li>
					<li><a href="?page=workshop">koolitused</a></li>
					<li><a href="?page=cv">cv</a></li>
					<li><a href="?page=contact">kontakt</a></li>
				</ul>
				<br/><br/>
				<p class="slogan">disain, küljendus, kodulehed & koolitused</p>
					<div class="clearfix"></div>
			</nav>
			<div id="wrapper">
-->

		<ul class="topnav" id="myTopnav">
		 <li><ahref="?page=main"><p id="pealogo">kersti miller</p></a></li>
		 <li><a class="active" href="?page=main">web+disain</a></li>
		 <li><a href="?page=workshop">koolitused</a></li>
		 <li><a href="?page=cv">cv</a></li>
		 <li><a href="?page=contact">kontakt</a></li>
		 <li class="icon">
			 <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
		 </li>
		</ul><br/><br/>

		<p class="slogan">disain, küljendus, kodulehed & koolitused</p>
			<div class="clearfix"></div>
		<div id="wrapper">



<script type="text/javascript">
var make_button_active = function()
{
  //Get item siblings
  var siblings =($(this).siblings());

  //Remove active class on all buttons
  siblings.each(function (index)
    {
      $(this).removeClass('active');
    }
  )


  //Add the clicked button class
  $(this).addClass('active');
}

//Attach events to menu
$(document).ready(
  function()
  {
    $(".menu li").click(make_button_active);
  }
)


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

</script>
