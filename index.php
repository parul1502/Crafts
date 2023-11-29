<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}




$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>
<script>
$('input[type="submit"]').mousedown(function(){
  $(this).css('background', '#2ecc71');
});
$('input[type="submit"]').mouseup(function(){
  $(this).css('background', '#1abc9c');
});

$('#loginform').click(function(){
  $('.login').fadeToggle('slow');
  $(this).toggleClass('green');
});



$(document).mouseup(function (e)
{
    var container = $(".login");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
        $('#loginform').removeClass('green');
    }
});

</script>

<style>

.formholder {
  background: #ecf0f1;
  width: 350px;
  border-radius: 5px;
  padding-top: 5px;
}
.formholder input[type="email"], .formholder input[type="password"] {
  padding: 7px 5px;
  margin: 10px 0;
  width: 96%;
  display: block;
  font-size: 18px;
  border-radius: 5px;
  border: none;
  -webkit-transition: 0.3s linear;
  -moz-transition: 0.3s linear;
  -o-transition: 0.3s linear;
  transition: 0.3s linear;
}
.formholder input[type="email"]:focus, .formholder input[type="password"]:focus {
  outline: none;
  box-shadow: 0 0 1px 1px #1abc9c;
}
.formholder input[type="submit"] {
  background: #1abc9c;
  padding: 10px;
  font-size: 20px;
  display: block;
  width: 100%;
  border: none;
  color: #fff;
  border-radius: 5px;
}
.formholder input[type="submit"]:hover {
  background: #1bc6a4;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


.container {
    padding: 6px;
   
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}




.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: white; /* Fallback color */
    background-color: white; /* Black w/ opacity */
    padding-top: 60px;
}
.modal1-content {
    background-color: white;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
    height: 50%;
}






/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
    height: 66%;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Crafts & Creations</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="animate.min.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="hd/logo.jpg" type="hd/logo">
	<link rel="icon" href="hd/logo.jpg" type="hd/logo">

  <script>
  function resetform()
  {
    document.getElementById("reset").reset();
  }
  </script>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="hd/logo.jpg">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					

<li class="current"><a href="index.html" title="">Home</a></li>	
	<li class="has-children">
						<a  title="">Categories</a>
					<ul class="sub-menu">
			           <li><a href="hd.html">HOME DECORATIONS</a></li>
			            <li><a href="je.html">JEWELLERY</a></li>
			            <li><a href="gift.html">GIFTS</a></li>
			            <li><a href="pottery.html">POTTERY</a></li>
			            <li><a href="toys.html">TOYS</a></li>
			            <li><a href="sculptures.html">SCULPTURES</a></li>
        			    <li><a href="bags.html">BAGS</a></li>
                                    <li><a href="paintings.html">PAINTINGS</a></li>			            
					</ul>
					</li>
					<li class="has-children">
						<a href="Contact1.html" title="">Contact Us</a>	
					</li>
					<a></a>
                                        
					<li class="has-children">
						<li><a href="contacts.html"><i class="fa fa-contact-us"></i> contact us</a></li>

<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="badge">0</a>
					
	
					<li> <a href="#" class="glyphicon glyphicon-user" onclick="document.getElementById('id01').style.display='block'">LOGIN</a></li>	
					 <li><a href="#" class="glyphicon glyphicon-user" onclick="document.getElementById('id02').style.display='block'">REGISTER</a></li>								
				</ul>
			</nav> <!-- end main-nav-wrap -->

<div id="id01" class="modal">
  
  <form class="modal-content animate" name="loginkaro"name="form1" method="post" id="reset" action="authenticate.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <center>Login with us!</center>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required size="30">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
       <input type="Submit" name="loginkaro" value="Login" style="height: 30px; width: 110px"> 
       <input type="checkbox" checked="checked style="height: 20px; width: 70px""> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="resetform();" class="cancelbtn" value="Reset">Reset</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
  <div id="id02" class="modal1">
<center><h2>Please Sign Up <small>It's free and always will be.</small></h2></center>
<hr class="colorgraph">
<form method = "post" action = "adduser.php" class="modal-content1 animate">
    <div>
	
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label><b>First Name</b></label><br><br>
      <input type="text" placeholder="Enter first name" name="fname" required><br><br>
      <label><b>Last name</b></label><br><br>
	<input type="text" name="last_name"  placeholder="Last Name"><br><br>
       <label><B>User name</b></label><br><br>
       <input type="text" placeholder="Enter username" name="uname" required><br><br>
       <label><b> Email id</b></label><br><br>
       <input type="email" name="email"  placeholder="Email Address"><br><br>
      <label><b>Password</b></label><br><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
      <label><b>confirm password</b></label><br><br>
      <input type="password" name="password_confirmation"  placeholder="Confirm Password" ><br><br>
        
      <input type="submit" name="Register" value="Register" style="height: 30px; width: 110px">
<br>
<br>

      

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>				     		
   	
   </header> <!-- end header -->


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>September 06, 2016</li> 
												<li><a href="#" >New arrivals</a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">New arrivals</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 29, 2017</li>
												<li><a href="#">New arrivals</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">New arrivals</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 27, 2017</li>
												<li><a href="#" class="author">New arrivals</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">New arrivals</a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>




         	<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="hd/special/offer1.jpg"> 
								</li>
								<li>
									<img src="hd/special/offer2.jpg"> 
								</li>
								<li>
									<img src="hd/special/offer3.jpg"> 
								</li>
<li>
									<img src="hd/special/offer4.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				
               							
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="Diwali.html">Diwali Offer</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							
						</div>
               </div>
        		</article> <!-- end article -->


<article class="brick entry format-gallery group animate-this">

<div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="<li>
									<img src="hd/special/offer4.jpg"> 
								</li> 
								
								<li>
									
									<img src="hd/special/offer5.jpg"> 
								
								</li>
					<li>
									<img src="hd/special/offer6.jpg"> 
								</li>			<li>
									<img src="hd/special/offer7.jpg"> 
								</li>	
<li>
									<img src="hd/special/offer8.jpg"> 
								</li>	

					</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               						
               		</div>

               		<h1 class="entry-title"><a href="single-gallery.html"></a></h1>
               		
               	</div>
						


</article> <!-- end article -->




            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="je.html" class="thumb-link">
	                  <img src="hd/jewellery.jpg" alt="jewellery">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Rings</a> 
               				<a href="#">Lockets</a>  
<a href="#">Sets</a>  
<a href="#">Bangles</a>            			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="je.html.html">Jewellery</a></h1>
               		
               	</div>
						
               </div>
               
        		</article> <!-- end article -->

<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="hd.html" class="thumb-link">
	                  <img src="hd/hd.jpg" alt="Home Decorations">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Wall Hangings</a> 
               				<a href="#">Wind Chimes</a>    
    
               	           				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="hd.html">Home Decorations</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							
						</div>
               </div>





        		
               
        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="gift.html" class="thumb-link">
	                  <img src="hd/gift.jpg" alt="Gifts">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Cards</a> 
               				<a href="#">Baskets</a>  
<a href="#">Bouquet</a>  
            			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="gift.html">Gifts</a></h1>
               		
               	</div>
						
               </div>
        		</article> <!-- /article -->



         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="pottery.html" >
	                  <img src="hd/pottery.jpg" alt="Pottery">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#"></a> 
               				<a href="#"></a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="pottery.html">Pottery</a></h1>
               		
               	</div>
						
               </div>
               
        		</article> <!-- end article -->





            <article class="brick entry animate-this" >

               <div class="entry-thumb">
                  <a href="Paint.html" class="thumb-link">
	                  <img src="hd/painting.jpg" alt="USAF rocket">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#"></a> 
               				<a href="#"></a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="paint.html">Paintings</a></h1>
               		
               	</div>
						
               </div>
               
        		</article> <!-- end article -->        	

        		<article class="brick entry animate-this" >

               <div class="entry-thumb">
                  <a href="bags.html" class="thumb-link">
	                  <img src="hd/bags.jpg" alt="bags">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#"></a> 
               				<a href="#"></a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="bags.html">Bags</a></h1>
               		
               	</div>
						
               </div>            
               
        		</article> <!-- end article -->


         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="scul.html" class="thumb-link">
	                  <img src="hd/sculpture.jpg" alt="Sculpture">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a ></a> 
               				<a ></a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="scul.html">Sculpture</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							
						</div>
               </div>
               
        		</article> <!-- end article -->

        		

        		<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="toys.html" class="thumb-link">
	                  <img src="hd/toys.jpg" alt="Lighthouse">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a ></a> 
               				<a ></a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="toys.html">Toys</a></h1>
               		
               	</div>
						
               </div>
               
        		</article> <!-- end article -->

        		

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
    <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Crafts and creations gives you a unique and cheap handmade items for various purposes. It also helps you to showcase your talent and sell your own handmade products. It is completely transparent website that also gives you a video that shows you what the material is being used to make a product and how the product is being developed.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>� Copyright crafts and creation 2017</span> 
		         	<span>Design by <a href="http://www.Crafts&Creation.com/">Crafts&Creations</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  
 <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>