<h3>Hosting Application</h3>
<p>Please fill out the form below to apply for hosting! I will get back to you as soon as
possible. * means the field is required.</p>

<div class="divide"></div>

<form method="post" id="hosting-app">
	<div class="form-item">
		<label for="name">* Name:</label>
		<input type="text" name="name" id="name" required>
	</div>

	<div class="form-item">
		<label for="email">* Email:</label>
		<input type="email" name="email" id="email" required>
	</div>

	<div class="form-item">
		<label for="current-site">Current Site:</label>
		<input type="url" name="current-site" id="current-site">
		<p>If you don't have one, that's fine, instead please make a small sample page to demonstrate
		you know basic html. I will email you asking for this.</p>
	</div>

	<div class="form-item">
		<label for="subdomain">* Desired site name:</label>
		<input type="text" name="subdomain" id="subdomain" required>
		<p class="inline">.punkfairie.net</p>
	</div>

	<!-- <div class="form-item">
		<label for="punk-email" class="check">Do you want a punkfairie.net email?</label>
		<input type="checkbox" name="punk-email" id="punk-email" value="yes">
	</div>

	<div class="form-item">
		<label for="punk-email-user">If yes, what do you want your email address to be?</label>
		<input type="text" name="punk-email-user" id="punk-email-user">
		<p class="inline">@m.punkfairie.net</p>
	</div> -->

	<div class="form-item">
		<input type="checkbox" name="rules" id="rules" value="yes" required>
		<label for="rules" class="check">* I acknowledge that I have read the "Hosting Info" page in
		its entirety, and agree to follow the rules.</label>
	</div>

	<div class="form-item">
		<input type="checkbox" name="server" id="server" value="yes" required>
		<label for="server" class="check">* Additionally, I acknowledge that hosting is provided
		free of charge, and that this server is run as a hobby project by an amateur. As such, there
		are no guarentees that the server will work perfectly 24/7.</label>
	</div>

	<div class="form-item">
		<input type="submit" name="submit" value="submit">
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('form#hosting-app').submit(function(){
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: "hosting-app-handler.php",
				data: $(this).serialize(),
				processData: false,
				success: function(){
					$('#content').load('hosting-app-send.php #hosting-app-success');
				},
				error: function(){
					$('#content').load('hosting-app-send.php #hosting-app-error');
				}
			});
		});
	});
</script>