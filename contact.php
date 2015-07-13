<?php $page = 'contact'; ?>
<?php include('inc/header.php'); ?>
			<section>
				<h1>Contact</h1>
				<h2>For more information contact us either by phone or email</h2>
				<ul>
					<li><p><div class="unicode">&#9742</div> 000-000-0000</p></li>
					<li>
						<p>Email<p>
						<?php include('inc/mail.php');  ?>
						<form action="contact.php" method="post">	
							<label for="name">Name</label>
								<input type="text" id="name" name="user_name">
							<label for="email">Email</label>
								<input type="email" id="email" name="user_email">
							<label for="message">Message</label>
								<textarea id="message" name="msg"></textarea>
							<button type="submit" name="submit">Submit</button>
						</form>
					</li>
				</ul>
			</section>
<?php include('inc/footer.php'); ?>
