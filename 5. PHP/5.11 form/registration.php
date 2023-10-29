<?php
	include('header.php');
?>
	<main>
				
		<div class="container">

			<h1>Register Page</h1>

			<form method="post" class="register-form">

				<div>
					<label>username</label>
					<input type="text" name="username">
				</div>

				<div>
					<label>E-mail</label>
					<input type="email" name="email">
				</div>


				<div>
					<label>Password</label>
					<input type="password" name="password">
				</div>

				<div>
					<label>Repeat Password</label>
					<input type="password" name="rp">
				</div>

				<div>
					<input type="submit" value="Sign Up Now">
				</div>

			</form>

		</div>
	</main>

<?php

echo "<pre>";
print_r( $_REQUEST );
echo "</pre>";

$username = $_REQUEST['username'];


echo $username;



	include('footer.php');
?>