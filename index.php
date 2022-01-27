<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tushar|XT Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Sstyle.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"><i class="fas fa-laptop-code"></i> CodeXT </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#products">Courses </a>
            <a href="#categories">Trends</a>
            <a href="#review">Team</a>
            <a href="#blogs">Blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-book" id="cart-btn"></div> 
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="shopimg/html5.svg" alt="">
                <div class="content">
                    <h3>HTML5</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="shopimg/css3.svg" alt="">
                <div class="content">
                    <h3>CSS3</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="shopimg/php.svg" alt="">
                <div class="content">
                    <h3>PHP</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="#" class="btn">checkout</a>
        </div>

        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="text" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
            <a href="#" class="btn">Courses Details</a> <a href="#" class="btn">Free Classes</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>

        <div class="box-container">

            <div class="box">
			<img src="shopimg/feature-img-2.png" alt="">
                 
                <h3>Move Career</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
			<img src="shopimg/17947.jpg" alt="">
                
                <h3>Online or Offline</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="shopimg/feature-img-3.png" alt="">
                <h3>Easy Payments</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- features section ends -->

    <!-- products section starts  -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>Courses</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="shopimg/html5.svg" alt="">
                    <h3>HTML5 CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/css3.svg" alt="">
                    <h3>CSS3 CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/js.svg" alt="">
                    <h3>JAVASCRIPT CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/reactjs.svg" alt="">
                    <h3>REACTJS CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/angularjs.svg" alt="">
                    <h3>ANGULARJS CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/php.svg" alt="">
                    <h3>PHP CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/nodejs.svg" alt="">
                    <h3>NODEJS CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">read more</a>
                </div>
				 
				<div class="swiper-slide box">
                    <img src="shopimg/sql.svg" alt="">
                    <h3>MYSQL CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/gd.svg" alt="">
                    <h3>GRAPHIC-D CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

            </div>

        </div>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="shopimg/oJava.svg" alt="">
                    <h3>ORACLE JAVA</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/python.svg" alt="">
                    <h3>PYTHON CLASSES</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/pa.svg" alt="">
                    <h3>PACKAGE APPLICATION</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/net.svg" alt="">
                    <h3>NETWORKING</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/sdlc.svg" alt="">
                    <h3>SDLC INFORMATION</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/7p.svg" alt="">
                    <h3>NEW 7-PHASE</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/is.svg" alt="">
                    <h3>INTERVIEW SEASONS</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>
				
				<div class="swiper-slide box">
                    <img src="shopimg/hip.svg" alt="">
                    <h3>HELP INTENSHIP</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                     <a href="#" class="btn">read more</a>
                </div>

            </div>

        </div>


    </section>

    <!-- products section ends -->

    <!-- categories section starts  -->

    <section class="categories" id="categories">

        <h1 class="heading"> IT <span>Trend</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="shopimg/ai.svg" alt="">
                <h3>AI PROGRAMS</h3>
                <p>upto 15% off</p>
                 <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="shopimg/cc.svg" alt="">
                <h3>CLOUD COMPUTING</h3>
                <p>upto 7% off</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="shopimg/da.svg" alt="">
                <h3>DATA ANALYSIS</h3>
                <p>upto 20% off</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="shopimg/dp.svg" alt="">
                <h3>DEVOPS</h3>
                <p>upto 25% off</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- categories section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="shopimg/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Harry Potter</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Kristina Zoe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Mike Willer</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="shopimg/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                    <h3>Emma Watson</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="shopimg/b1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by TusharWeb's </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 25th July, 2022 </a>
                    </div>
                    <h3>CodeXT One of the best platform to seek program.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="shopimg/b2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by CodeNomad </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 7st April, 2022 </a>
                    </div>
                    <h3>CodeXT Team help to grow the future with CodeXT.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="shopimg/b3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by Dhiren Sharma </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st May, 2022 </a>
                    </div>
                    <h3>CodeXT all over world working as IT Industry.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->
	
	 <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>Contact</span> </h1>
		
		<div class="row">

     <!--   <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>-->
     <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14874.578159286868!2d79.07855424669847!3d21.24593963900074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c3a54c606087%3A0xd3ed1f42f25665e8!2zMjHCsDE1JzAxLjQiTiA3OcKwMDQnMzYuNCJF!5e0!3m2!1sen!2sin!4v1642281017197!5m2!1sen!2sin" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <form action="" method="POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="fname" value="" placeholder="Name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="mail" value="" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" name="userno" value="" placeholder="Number" required>
            </div>
			
			<div class="inputBox">
             
				<span class="fas fa-user"></span>
                
  				 <input type="radio" name="gender"  value="male"/>  
 	             <label for="register_gendermale" class="domb">Male</label>
				 
				 <input type="radio" name="gender"   value="female" />  
 	             <label for="register_genderfemale" class="domb">Female</label>
				 
				  <input type="radio" name="gender"   value="Disability"/>  
 	              <label for="register_gendermale" class="domb">Disability</label>
            </div>
			
			<div class="inputBox">
                <span class="fas fa-book"></span>
				
		    <select name="typeuc" class="three" required>
			<option value="Python">Python</option>
			<option value="Oracle Java">Oracle Java</option>
			<option value="Cloud Computing">Cloud Computing</option>
			<option value="Package Application">Package Application</option>
			<option value="DevOps">DevOps</option>
			<option value="Testing">Testing</option>
			<option value="Big Data">Big Data</option>
			<option value="Full Stack Development">Full Stack Development</option>
			<option value="FrontEnd Development">FrontEnd Development</option>
			<option value="Graphics Design">Graphics Design</option>
			</select>
                
            </div>
			
			 <input type="reset"  class="btn">
             <input type="submit" name="submit" value="Register" class="btn">
        </form>

    </div>
		
		
		</section>

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> CodeXT <i class="fas fa-laptop-code"></i> </h3>
                <p>Buy today you have offer 20% and placement Garentee in CodeXT.</p>
                <div class="share">
                    <a href="https://www.facebook.com/tushar.dhanorkar.5" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/DhanorkarTushar" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/tushar.dhanorkar.5/" class="fab fa-instagram"></a>
                    <a href="http://linkedin.com/in/tushar-dhanurkar-07a996180" class="fab fa-linkedin"></a>
					<a href="https://github.com/Rancho7557/TusFrontend-Development.git" class="fab fa-github"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 88885488048 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +91 8208873045 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> Tushardhanorkar54@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Pune, India - 411007 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> Features </a>
                <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> Courses </a>
                <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> Trends </a>
                <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> Teams </a>
                <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn">
                <img src="shopimg/payment.png" class="payment-img" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> TusharWeb's </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->





    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/javascript.js"></script>

</body>

</html>

<?php
      
      include 'connection.php';
      if(isset($_POST['submit'])) {
          
         $userf = $_POST['fname'];
         $userm = $_POST['mail'];
         $usern = $_POST['userno'];
         $userg = $_POST['gender'];
         $users = $_POST['typeuc'];
         date_default_timezone_set('Asia/Kolkata');
         $time=date('h:i:s a', time());

        // INSERT INTO `bkinfo`(`userid`, `ubkt`, `ufname`, `udob`, `umob`, `umail`, `ustate`, `ucont`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        // $insertquery = " insert into bkinfo(ubkt, ufname, udob, umob, umail, ustate, ucont) values('$uactype', '$ufullname', '$udob', '$umob', '$umail', '$ustate', '$ucontry') ";
           $insertquery = " insert into detailweb (webuser, webmail, webmob, webgender, websub, time) values ('$userf', '$userm', '$usern', '$userg', '$users', '$time') ";
          $res = mysqli_query($con,$insertquery);

          if($res){
              ?>
              <script>
                  alert("User Data Inserted Succesfully ......  Thank You!");
                  </script>
              <?php
          }else{
              ?>
              <script>//error throw massage
                  alert("User Data Insert clearly .......thank you for visit!");
              </script>
                  <?php

          }

    }

    ?>