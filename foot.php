
		<div class="clearfix"></div>
			<div class="foot">
			<hr/>

					<!-- valideerimise tõend-->
					<!--<p>
						<a href="http://validator.w3.org/check?uri=referer">
							<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
						</a>
						<a href="http://jigsaw.w3.org/css-validator/check/referer">
							<img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
						</a>-->
					<!--AUTOR-->
					</p>
					<p>	© 2017 Kersti Miller | info.khcreative@gmail.com </p>
			</div>
		</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="menu.js"></script>
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
	</body>


</html>
