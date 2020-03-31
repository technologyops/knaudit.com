<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Krishnan & Natarajan Chartered Accountants</title>

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/orbit-1.2.3.css" />
<link rel="stylesheet" href="css/demo-style.css" />
		<!-- JavaScript -->
                <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link href="css/formvalidatecss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #CC0000}
-->
.form p {
	overflow: hidden;
}
</style>
</head>
<body>
	<!--Main wrapper-->
	<div id="main">
    	<header id="header">
        	<figure id="logo">
            	<a href="index.html"><img src="images/logo.jpg" alt="Krishnan and Natarajan - CA" /></a>
            </figure>
            <figure id="team_login">
            	<a href="https://mail.google.com/a/knaudit.com" target="_blank"><img src="images/team_login.jpg" alt="Team Login" /></a>
            </figure>
            <div class="clear_fix"></div>
        <!--nav menu begin-->
        <nav id="menu">
            <ul class="dropdown">
              <li><a href="index.html">Home</a></li>
              <li><a href="aboutus.html">About Us</a>
              			<ul>
        					<li class="bdr_nn"><a href="partners.html">Partners</a></li>
        					
        				</ul>
              </li>
              <li><a href="services.html">Services</a></li>
              <li><a href="industries.html">Industries</a></li>
              <li><a href="offices.html">Offices</a></li>
              <li><a href="resources.html">Resources</a></li>
              <li><a href="careers.html">Careers</a></li>
              <li><a href="#" class="current">Contact Us</a></li>
            </ul>
      </nav><!--nav menu end-->
        </header>
        <figure id="banner">
                    				
                        <div id="featured"> 
                           <a href="#"><img src="images/slides/1.jpg" alt="" /></a>
                            <a href="#"><img src="images/slides/2.jpg" alt="" /></a>
                            <a href="#"><img src="images/slides/3.jpg" alt="" /></a>
                            <a href="#"><img src="images/slides/4.jpg" alt="" /></a>
                            <a href="#"><img src="images/slides/5.jpg" alt="" /></a>
                            <a href="#"><img src="images/slides/6.jpg" alt="" /></a>																														
                        </div>

        </figure>
        <section id="content">
        	<!--left content begin-->
        	<aside id="lft_side">
            	<h1 class="wth">Contact Us</h1>
             	<div class="inner_con">   
              <form name="form1" class="form" action="mail_contact.php" method="post" id="form1">
              
              <div style="float:left; padding:10px 0 10px 15px; height:20px;"><span style="color:#FF0000;font-weight:bold;">
              <?php  echo $_SESSION['vercode_msg'];  unset($_SESSION['vercode_msg']);?>
              </span>
                  <span style="color:#006633;font-weight:bold;"><?php echo $_SESSION['succ_msg']; unset($_SESSION['succ_msg']); ?></span></div>

                    <p class="name">
                        
                        <label>Name<span class="style2">*</span></label>
                        <span style="float:left;"><input type="text" name="name" id="name" value="<?php echo $_COOKIE['name']; ?>" /></span>
                        <span class="status"></span>
                    </p>
                
                    <p class="email">
                        
                        <label>E-Mail<span class="style2">*</span></label>
                        <span style="float:left;"><input type="text" name="email" id="email" value="<?php echo $_COOKIE['email']; ?>" /></span>
                        <span class="status"></span>
                    </p>
                
                    <p class="phone">                       
                        <label>Phone No<span class="style2">*</span></label> 
                        <span style="float:left;"><input type="text" name="phone" id="phone" size="10" maxlength="10" value="<?php echo $_COOKIE['phone']; ?>" /></span>
                        <span class="status"></span>
                    </p>
                    
                    
                
                    <p class="text">
                       
                        <label>Message</label>
                         <span><textarea name="message" cols="0" rows="0"><?php echo $_COOKIE['message']; ?></textarea></span>
                       
                    </p>
                    
                    <p class="text">Verfication Code<span>
                    <input id="vercode"  type="text" name="vercode" class="capture" style="width:75px !important; margin-left:10px!important;" /></span>
                    <img src="getimage.php" alt=""  style="margin:5px 0 0 10px;"/><span class="status"></span> </p>
                
                    <p class="submit">
                    <input name="submit" type="submit" value="Send" style="float:right;" />                       
                    </p>
                
                </form>
                   
                   </div><!--inner_con end-->              
            </aside><!--left content end-->
            
            <!--Right content begin-->
            <aside id="rt_side">
            	<h1>Contact Information</h1>
                
                	<strong>S. Krishnan, Partner</strong><br/><br/>
                    <p><span>Krishnan &amp; Natarajan<br/>
                    
                    Chartered Accountants</span><br/><br/>
                    
                    New No.5, Alwarpet Street, First Floor<br/>
                    Alwarpet, Chennai 600 018, India<br/><br/>
                    
                    Mobile :  +91 98432 21486 <br/> Telephone : +91 44 4500 0304<br/><br/>
                    
                    E-Mail : <a href="mailto:sk@knaudit.com" class="mails_1" target="_blank">sk@knaudit.com</a> 
                    <br/> Website : <a href="www.knaudit.com" target="_blank" class="mails_1">www.knaudit.com</a><br/>
                </p>
            </aside><!--Right content end-->
        </section>
        
        <footer id="footer">
        	<p class="foot_txtlt">Copyright &copy; 2012 Krishnan and Natarajan - CA. All Rights Reserved</p>
                <p class="w3cv">
                <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fimaginetventures.biz%2Fsample%2Fk%26n%2Fv1.1%2F"><img src="images/w3c.jpg" alt="W3Validation" /></a></p>
				<p class="foot_txtrt">Designed by <a href="http://www.imaginetventures.com/" target="_blank">ImagiNET Ventures</a></p>
        </footer>
        
    </div><!--main wapper end-->
	
		
	
    <!-- Banner Script-->
	<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>	
	<script type="text/javascript">
		$(window).load(function() {
			$('#featured').orbit({
				animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
				animationSpeed: 1000,                // how fast animtions are
				timer: true, 			 // true or false to have the timer
				advanceSpeed: 6000
			});
		});
	</script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#form1").validate({
			rules: {
			name: "required",
			email: {
			required: true,
			email: true
			},
			phone : {
			required: true,
			number:true
			}
			
			
		},
		messages: {
			name: "Required Name",
			email: {
			required:"Required Email",
			email:"Valid Email Please"
			},
			phone: {
			required:"Enter Phone Number",
			number:"Enter Numbers Only"
			}
			
			
			},
     
 errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.parent().next() );
			else
				error.appendTo( element.parent().next() );
		},
		// specifying a submitHandler prevents the default submit, good for the demo
		submitHandler: function() {
		
		document.form.submit();		
			//alert("submitted!");
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
	});
	});
</script>
</body>
</html>
