<?php include_once "./include/init.php"; ?>
    <div>
        <form action="/demo/action/signup.php" method="POST">
            <p>
                <label for="form-input-username">Username</label>
                <input id="form-input-username" type="text" name="username" />
            </p>
            <p>
                <label for="form-input-password">Password</label>
                <input id="form-input-password" type="password" name="password" />
            </p>
            <p>
                <label for="form-input-name">Name</label>
                <input id="form-input-name" type="text" name="name" />
            </p>
            <p>
                <label for="form-input-email">Email</label>
                <input id="form-input-email" type="email" name="email" />
            </p>
            <p>
                <button type="submit">Sign Up</button>
            </p>
        </form>
    </div>
<?php include_once "./include/footer.php"; ?>