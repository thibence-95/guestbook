<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Die Lederhose - Geztbook</title>
</head>

<body>
<?php require 'includes/header.php'?>

<section>
    <h4>Hallo und willkommen zu our Geztbook. Feel free to write ze Messege if you like.</h4>

	<section id="guestbook">
		<div id="messages">
			<?php //echo $guest->getMsg();?>
		</div>
	</section>

	<form method="post">
		<label for="name">Name</label><br>
		<input type="text" name="name"><br>

		<label for="origin">Wass ist your Homeland?</label><br>
		<input type="text" name="origin"><br>

		<label for="age">Age</label><br>
		<input type="text" name="age"><br>

		<label for="stay">How long has du stayed?</label><br>
		<input type="text" name="stay"><br>

		<label for="message">You may type your Message hier, Danke</label><br>
		<input type="text" name="message"><br>

		<button type="submit">Klik hier to put ze Messege</button>
	</form>
</section>

<?php require 'includes/footer.php'?>
</body>
</html>