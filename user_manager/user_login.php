<?php require_once '../view/header.php'; ?>
<h1>Please Log in</h1>

   <?php  echo $errorMessage ?>
   <form method="POST" action="user_manager/index.php">
   <input type="hidden" name="controllerRequest" value="validate_login">  
        <fieldset>
            <div class="contact">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?= htmlspecialchars($email_cookie ?? '') ?>">
            </div>
            <div class="contact">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" value="<?= htmlspecialchars($password_cookie ?? '') ?>">
            </div>
            <button type="submit" class="submit">Login</button>
        </fieldset>
</form>

<?php require_once '../view/footer.php'; ?>