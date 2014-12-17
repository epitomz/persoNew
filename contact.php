<?php
include('header.php');
include('navbar.php');
?>
    
    <!-- Contenu -->   
   <div class="contenu contenu-form">
		<div id="main" style="padding:50px 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form" action="mail.php" method="post">
			<h3>N'hésitez pas à me contacter !</h3>
			<h4>Pour ce faire, voici le formulaire de contact :</h4>
			<div>
				<label>
					<span>Nom et prénom <span class="red">(*)</span></span>
					<input placeholder="Vos nom et prénom" type="text" name="name" tabindex="1" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email <span class="red">(*)</span></span>
					<input placeholder="Votre adresse Email" type="email" name="email" tabindex="2" required>
				</label>
			</div>
			<div>
				<label>
					<span>Message <span class="red">(*)</span></span>
					<textarea placeholder="Votre message" name="message" tabindex="5" required></textarea>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">Envoyer</button>
			</div>
		</form>
		<!-- /Form -->
		
		</div>
	</div>

<?php
include('script.php');
?>