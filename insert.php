<?php $page = 'insert'; ?>
<?php include('inc/header.php'); ?>
			<section>
				<h1>Insert Data</h1>
				<form action="show.php" method="post">
					<label for="date">Date</label>
						<input type="date" id="date" name="date" style="display:block;">
					<label for="location">Location</label>
						<input type="text" id="location" name="location">
					<label for="desc">Description</label>
						<textarea name="desc"></textarea>
					<button type="submit" name="submit">Submit</button>
				</form>
			</section>
<?php include('inc/footer.php'); ?>