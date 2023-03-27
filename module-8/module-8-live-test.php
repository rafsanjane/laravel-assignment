<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>মডিউল ৮ এর লাইভ টেস্ট</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<style>
		body {
			margin-top: 50px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="column column-50">
				<h1>Table Example</h1>
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>John</td>
							<td>25</td>
						</tr>
						<tr>
							<td>Sarah</td>
							<td>30</td>
						</tr>
						<tr>
							<td>Mike</td>
							<td>28</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="column"></div>
			<div class="column column-50">
				<h2>Add New Person</h2>
				<form action="#" method="post">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" required>
					<br>
					<label for="age">Age:</label>
					<input type="number" id="age" name="age" required>
					<br>
					<input type="submit" value="Add to Table">
				</form>

				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$name = htmlspecialchars($_POST['name']);
					$age = htmlspecialchars($_POST['age']);

					echo '<h2>New Person Added</h2>';
					echo '<table>';
					echo '<thead><tr><th>Name</th><th>Age</th></tr></thead>';
					echo '<tbody>';
					echo "<tr><td>$name</td><td>$age</td></tr>";
					echo '</tbody>';
					echo '</table>';
				}
				?>
			</div>
		</div>
	</div>
</body>

</html>