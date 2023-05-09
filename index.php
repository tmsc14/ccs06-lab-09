<?php

require "config.php";

use App\Pets;

$pets = Pets::list();
?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $pets): ?>
<tr>
<td><?php echo $pets->getId(); ?></td>
<td><?php echo $pets->getName(); ?></td>
<td><?php echo $pets->getGender(); ?></td>
<td><?php echo $pets->getBirthdate(); ?></td>
<td><?php echo $pets->getOwner(); ?></td>
<td><?php echo $pets->getEmail(); ?></td>
<td><?php echo $pets->getAddress(); ?></td>
<td><?php echo $pets->getContactNumber(); ?></td>
<td>
	<a href="edit-pets.php?id=<?php echo $pets->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-pets.php?id=<?php echo $pets->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>
<br>
<a href="load-data.php">LOAD DUMMY DATA</a>
<br>
<a href="truncate-table.php">TRUNCATE</a>