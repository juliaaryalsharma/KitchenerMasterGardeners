<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Kitchener Master Gardeners</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Crops Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Custom Theme files -->
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!--//end-smoth-scrolling-->
    </head>
    <body>
        <!--header-->
        <div class="logo">
            <div class="container">
                <div class="logo-info">
                    <img src="http://www.mgoi.ca/rw_common/images/MGOI-logo240x160-newest.jpg" width="240" height="160" alt="Site logo" class="imglogo">
                    <a href="index.html"><h1>Kitchener Master Gardeners </h1></a>
                </div>
            </div>
        </div>
        <!--//header-->
        <!--navigation-->
        <div class="top-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="hvr-bounce-to-bottom"><a href="index.html">Home</a></li>
                        <li class="hvr-bounce-to-bottom"><a href="about.html">About</a></li>
                        <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activites<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="hvr-bounce-to-bottom" href="gallery.html">Calender</a></li>
                                <li><a class="hvr-bounce-to-bottom" href="gallery.html">Members List</a></li>
                                <li><a class="hvr-bounce-to-bottom" href="gallery.html">Members Address</a></li>
                            </ul>
                        </li>
                        <li class="hvr-bounce-to-bottom active"><a href="contact.html">Login</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
        <!--//navigation-->
        <!--baner-->
        <div class="baner about-bnr">
            <div class="container">
                <div class="baner-grids">
                    <div class="col-md-6 baner-top">
                        <img src="images/img16.jpg" alt=""/>
                    </div>
                    <div class="col-md-6 baner-top">
                        <img src="images/img17.jpg" alt=""/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//baner-->
        <!--map-->
        <div class="map">
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <form name="form1" method="post" action="checklogin.php">
                        <td>
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                <tr>
                                    <td colspan="3"><strong>Member Login </strong></td>
                                </tr>
                                <tr>
                                    <td width="78">Username</td>
                                    <td width="6">:</td>
                                    <td width="294"><input name="myusername" type="text" id="myusername"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input name="mypassword" type="text" id="mypassword"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="Submit" value="Login"></td>
                                </tr>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>
        </div>
        <!--//map-->
        <!--contact-->
        <div class="contact">
            <div class="container">
                <h3 class="title">Contact us</h3>
                <div class="contact-form">
                    <form>
                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <div class="col-md-6 cnt-inpt">
                            <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        </div>
                        <div class="col-md-6 cnt-inpt">
                            <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea onfocus="this.value = '' ;" onblur="if (this.value == '') {this.value = 'Message...';}" required=""> Message... </textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <!--//contact-->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                        <h3 class="title">Services</h3>
                        <ul>
                            <li><a href="#">Rerum hic tenetur</a></li>
                            <li><a href="#">Molestiae non recusandae</a></li>
                            <li><a href="#">Voluptates repudiandae</a></li>
                            <li><a href="#">Necessitatibus saepe</a></li>
                            <li><a href="#">Debitis aut rerum</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h3 class="title">Information</h3>
                        <ul>
                            <li><a href="#">Quibusdam et aut</a></li>
                            <li><a href="#">Testimonals</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Our Staff</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h3 class="title">More details</h3>
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="contact.html">Site map</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid contact-grid">
                        <h3 class="title">Contact us</h3>
                        <ul>
                            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Newyork Still Road.</li>
                            <li class="adrs">756 gt globel Place</li>
                            <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+000 100 444 1111</li>
                            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="copy-left">
                    <p>Copyright © 2015 Crops. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#" class="gg"></a></li>
                        <li><a href="#" class="pn"></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//footer-->
        <!--smooth-scrolling-of-move-up-->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!--//smooth-scrolling-of-move-up-->
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>
