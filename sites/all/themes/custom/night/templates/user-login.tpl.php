<div class="container-fluid">
	<div class="container">
	<div class="col-md-3"></div>
		<div class="col-md-6 user-login-block">
			<div class="logo-wrapper container-fluid">
				<a class="brand" href="#"><span class="sky">sky</span>walks</a>
			</div>
			<h3>USER LOGIN</h3>
	  	<?php
			// split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
				print drupal_render($form['name']);
				print drupal_render($form['pass']);
	  	?>

    	<div class="user-login-links">
			<span class="password-link">
				<a href="/user/password">Forget your password?</a>
			</span> | 
			<span class="register-link">
				<a href="/user/register">Create an account</a>
			</span>
    	</div>

    	<?php
        // render login button
				print drupal_render($form['form_build_id']);
				print drupal_render($form['form_id']);
				print drupal_render($form['actions']);
	    ?>
	   </div>
<!-- /user-login-custom-form -->
	<div class="col-md-3"></div>
	</div>
</div>