<?php

require "config.php";

use App\Pets;

$pets_id = $_GET['id'];

$pets = Pets::getById($pets_id);

$gender_text = $pets->getGender();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pets</title>
</head>
<body>
<h1>Edit Pets</h1>
<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pets->getId(); ?>">
	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name" value="<?php echo $pets->getName();?>" />	
	</div>
	<div>
		<label>Gender</label>
		<?php if ($gender_text == "Male")
		{
			echo '<input type="radio" name="gender" checked value="Male" /> <lalbel> Male </label>';
			echo '<input type="radio" name="gender" value="Female" /> <lalbel> Female </label>';
		}; ?>

		<?php if ($gender_text == "Female")
		{
			echo '<input type="radio" name="gender" value="Male" /> <lalbel> Male </label>';
			echo '<input type="radio" name="gender" checked value="Female" /> <lalbel> Female </label>';
		}; ?>
		
		
	</div>
	<div>
		<label>Owner</label>
		<input type="text" name="owner" placeholder="Owner" value="<?php echo $pets->getOwner();?>" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pets->getEmail();?>" />	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address" value="<?php echo $pets->getAddress();?>" />	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" name="contact_number" placeholder="Contact Number" value="<?php echo $pets->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>