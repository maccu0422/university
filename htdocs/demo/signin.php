<?php include_once "./include/init.php"; ?>
    <div>
        <form action="/demo/action/signin.php" method="POST">
			<p>
				<label for="form-input-username">Username</label>
				<input id="form-input-username" type="text" name="username" />
			</p>
	        <p>
		        <label for="form-input-password">Password</label>
		        <input id="form-input-password" type="password" name="password" />
	        </p>
	        <p>
		        <button type="submit">Sign In</button>
	        </p>
        </form>
    </div>
<?php include_once "./include/footer.php"; ?>