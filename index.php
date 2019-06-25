
<?php
function ShowHeader(){
	echo<<< __opening__

		<html>
		<head>
			<title>Photography</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="style1.css">
			<link rel="stylesheet" type="text/css" href="jss.css">
			<link rel="shortcut icon" href="images/titleicon.jpeg" >
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale= 1">
		</head>
		<script>

		</script>
		<body style="background-color:#362f2d;">
__opening__;
}
function mainmenu(){
	echo<<< __menu__
	<div class="col-sm-12">
        <div class="container-fluid" data-spy="affix" data-offset="150">
            <nav class="navbar pull-right" style="margin-right: 2%;">
                <div class="navbar-header">
                  
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
            
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#" class="dropdown" data-toggle="dropdown">Models<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index1.html">Cross fire</a></li>
                                    <li><a href="index1.html">Cross fire</a></li>
                                    <li><a href="#">Ducati</a></li>
                                    <li><a href="#">Pulsar</a></li>
                                    <li><a href="#">Honda</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Power Parts</a></li>
                             <li><a href="index2.html">CONTACT US</a></li>
                             
                        </ul>
                       
            
                </div>
            </nav>
                
                </div>
__menu__;
}
function showslide(){
	echo<<< _slide_
		<ul class="slides" style="width:100%;height:90%">
    <input type="radio" name="radio-btn" id="img-1"  checked />
    <li class="slide-container">
		<div class="slide" style="width:100%;height:100%">
			<img src="images/12.jpg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2"  />
    <li class="slide-container">


        <div class="slide" style="width:100%;height:100%">
_slide_;
        ShowBanner();
         echo<<< _slide_
          
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3"  />
    <li class="slide-container">
        <div class="slide" style="width:100%;height:100%">
          <img src="images/8.jpg" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4"  />
    <li class="slide-container">
        <div class="slide" style="width:100%;height:100%">
          <img src="images/7.jpg" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5"  />
    <li class="slide-container">
        <div class="slide" style="width:100%;height:100%">
          <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6"  />
    <li class="slide-container">
        <div class="slide" style="width:100%;height:100%">
          <img src="images/5.jpg" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>

</ul>
_slide_;
}

function ShowBanner(){
	echo<<< __banner__
		<div class="container-fluid">
			<div class="col-sm-7">
				<img src="images/photograph.jpg" height:"auto" width="100%">
			</div>
			<div class="col-sm-5">
				<h2 class="welcome">Welcome to my photographic site.</h2>
			</div>
		</div>

__banner__;
}

function blog(){
	echo<<< __bloglink__
	<div class="container-fluid" style="margin-top:-70px;">
		<div class="col-sm-3" id="blog-img">

			<img src="images/1.jpg" class="img-responsive">
			<div class="text">
				<h1 class="link-text">hello</h1>
			</div>
		</div>
		<div class="col-sm-3" id="blog-img">

			<img src="images/1.jpg" class="img-responsive">
			<div class="text">
				<h1 class="link-text">hello</h1>
			</div>
		</div>
		<div class="col-sm-3" id="blog-img">

			<img src="images/1.jpg" class="img-responsive">
			<div class="text">
				<h1 class="link-text">hello</h1>
			</div>
		</div>
		<div class="col-sm-3" id="blog-img">

			<img src="images/1.jpg" class="img-responsive">
			<div class="text">
				<h1 class="link-text">hello</h1>
			</div>
		</div>
	</div>
	
__bloglink__;
}
function photocollect(){
	echo<<< __bloglink__
		

	<div class="col-sm-8" id="center-img">
		<h1 class="head-text">Photographic</h1>
		<div class="col-sm-6">
			<img src="images/1.jpg" class="img-responsive">
		</div>
		<div class="col-sm-6">
			<img src="images/1.jpg" class="img-responsive">
		</div>
	
	
		<div class="col-sm-6">
			<img src="images/1.jpg" class="img-responsive">
		</div>
		<div class="col-sm-6">
			<img src="images/1.jpg" class="img-responsive">
		</div>
	</div>

	
	
		
		
__bloglink__;
}

function passion(){
	echo<<<__shortdes__
		<div class="wrap">
				<div class="col-sm-7" id="passion-box">
					<img src="images/12.jpg" class="img-responsive">
				</div>
				<div class="col-sm-5">
					<br><br>
					<h3 style="color:#ffffff;font-weight:bold;">My Passion</h3>
					<p class="passion-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<button type="button">Read more...</button>
				</div>
		</div>
__shortdes__;
}

function ShowFooter(){
		echo<<< __closing__
		<div class="col-sm-12 text-center" style="margin-top:20px">
		<p class="passion-text">All rights reserved 2019</p>
		</div>
			</body>
			</html>
__closing__;
}
?>

<?php
mainmenu();
ShowHeader();
 showslide();
// ShowBanner();

echo"<h1>hello</h1>";
blog();
 passion();
photocollect();

 
ShowFooter();
?>

	