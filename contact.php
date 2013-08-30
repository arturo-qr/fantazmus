<html>
	<?php include 'header.php';?>
	<body>

		<div id="background">
			<img src="images/layout/back3.jpg" class="stretch" alt="" />
		</div>
		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<div class="block_ini">
					<div class="contact">
						<h1>Let’s Talk</h1>
						We are currently accepting new projects and contracting positions.
					</br></br>
						<?php
						if (isset($_REQUEST['email'])){
							//send email
							$email = $_REQUEST['email'] ;
							$subject = $_REQUEST['subject'] ;
							$message = $_REQUEST['message'] ;
							$name = $_REQUEST['name'] ;
							$message = $message."  Atte. ".$name;
							mail("fzstudios@neuro-mail.com", $subject,
							$message, "From:" . $email);
							echo "
								</br>
								<p><h2 class='mensajeContacto textShadow'>Thank you for contacting us!</h2></p> 
								</br>
								<p><h2 class='mensajeContacto textShadow' style='font-size:22pt;'>You will get an anwser from one of our agents as soon as possible</h2></p>
								</br>
								<p><h2 class='mensajeContacto textShadow' style='font-size:18pt;'>Fantasmus Studios</h2></p> 
							";
						
						}

						else{
							echo "
							<form method='post' action='contact.php'>
								</br>
								<input class='input round shadowDark' name='name' type='text' placeholder='Name'>
								
								<input class='input round shadowDark' name='email' type='text' placeholder='Email'>
								</br></br>
								
								<input class='input round shadowDark' name='subject' type='text' size='48' placeholder='Subject'>
								</br></br>
								
								<textarea id='textarea' class='input round shadowDark' name='message'>Message</textarea>
								</br>
								<input class='submitButton round shadowDark' type='submit' style='margin-top: 15px; margin-left:200px;' value='Send'>
							</form>";
						}
						?>
						<iframe style="padding-top:10px;" width="900" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Unknown+road&amp;daddr=&amp;hl=en&amp;geocode=FceX7QEdQssF-Q&amp;sll=32.347994,-117.060351&amp;sspn=0.001974,0.004128&amp;mra=prev&amp;ie=UTF8&amp;t=m&amp;ll=32.34808,-117.060807&amp;spn=0.003172,0.00456&amp;z=17&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>