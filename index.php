<html>
	<?php include 'header.php';?>
	<body>
		<div id="background">
			<img src="images/intro.jpg" class="stretch" alt="" />
		</div>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<div class="intro">
					<h1>Fantazmus Studios</h1>
					<a class="yellow" href="home.php">English</a>
		            <a class="green" href="#">Español</a>
		            <a class="blue" href="#">Facebook</a>
		            <a class="orange" href="#">Twitter</a>
				</div>
				<!-- <a href="index.php">Inicio!</a>
				<a href="hi.php">Hi!</a> -->
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
              $('.intro a').hover(function() {
                $(this).stop().animate({
                   opacity: 1
                 }, 200);
                    }, function() {
               $(this).stop().animate({
                opacity: 0.8
                 }, 200);
              });
            });

		</script>
	</body>
</html>