<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Home | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
		<style>
          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
              width: 70%;
              margin: auto;
          }
        </style>
    	<!--<header style="width:100%; text-align:center; color:white; background-color: purple;">
        	<h3>Tech Club</h3>
        </header>-->
        <?php include '/home/benrud/public_html/club/assets/includes/nav.html'; ?>
    	
        <div class="container mx-auto"> 
        
        <!-- *********************************** Welcome START  *********************************** -->
        
        <h1>Grossmont High School Tech Club</h1>
        
        <!-- *********************************** Welcome END *********************************** -->
        
        <!-- *********************************** Announcements START *********************************** -->
        
        	<h3>Latest Announcements</h2>
        	<a class="twitter-timeline" href="https://twitter.com/ghs_tech_club" data-tweet-limit="3"></a>
			<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <p style="text-align:center;"><a href="http://foothillertech.com/club/pages/announcements.php">See more announcements</a></p>
        
        </div>
        
        <!-- *********************************** Announcements END *********************************** -->
        
        <!-- *********************************** Schedule START *********************************** -->
        
        <div class="container mx-auto">
        	<h3>Schedule</h3>
            <!--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Show Calendar</button>-->
        	<iframe src="https://calendar.google.com/calendar/embed?src=1fnmpndjjhe3ce34t9q1bkrh0o%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"><!--id="demo" class="collapse">--></iframe>
        </div>
        
        <!-- *********************************** Schedule END *********************************** -->
        
        <!-- *********************************** Carousel START *********************************** -->
        
        <div class="container mx-auto">
            <h3>Image Carousel</h3>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://melissavandyke.com/wp-content/uploads/2015/09/code.jpg" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div>
                	</div>
            
                    <div class="item">
                        <a href="http://foothillertech.com/club/pages/about.php">
                            <img src="http://melissavandyke.com/wp-content/uploads/2015/09/code.jpg" alt="Chania" width="460" height="345">
                            <div class="carousel-caption">
                                <h3>About</h3>
                                <p>Learn all about our club!</p>
                            </div>
                        </a>
                    </div>
            
                    <div class="item">
                        <img src="http://melissavandyke.com/wp-content/uploads/2015/09/code.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Flowers</h3>
                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                        </div>
                    </div>
            
                    <div class="item">
                        <img src="http://melissavandyke.com/wp-content/uploads/2015/09/code.jpg" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Last</h3>
                            <p>This is the last image in the slider.</p>
                        </div>
                    </div>
            
            	</div>
            
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            
		</div>
        
        <div><?php include '/home/benrud/public_html/club/test.txt'; ?></div>
        
        <!-- *********************************** Carousel END *********************************** -->
        
    </body>
</html>