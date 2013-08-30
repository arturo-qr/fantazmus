<div id="HeaderContainer">
	<div id="HeaderContent">
		<!-- Navigation Items -->
		<div id="HeaderNavigation">
			<!-- Tabs Panel 
			<ul id="nav">	
			</ul>-->
			<div style="height:132px">
				<img src="images/fantazmus_header.jpg">

			</div>
			<div class="menu">
	            <a class="on" href="home.php">Home</a>
	            <a class="off" href="about.php">About Us</a>
	            <a class="off" href="gallery.php">Gallery</a>
	            <a class="off" href="events.php">Events</a>
	            <a class="off" href="news.php">News</a>
	            <a class="off" href="hi.php">Projects</a>
	            <a class="off" href="contact.php">Contact</a>
	        </div>			
		</div>
		<!-- <div id="SubHeader"><span style="font-family: 'Didact Gothic',sans-serif; font-size: 13px; color: #fff"><strong style="font-size: 16px;">Hola este es un subheader</strong></span></div> -->
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
              $('.menu a').hover(function() {
                $(this).stop().animate({
                   opacity: 1
                 }, 200);
                    }, function() {
               $(this).stop().animate({
                opacity: 0.9
                 }, 200);
              });
            });
	</script>