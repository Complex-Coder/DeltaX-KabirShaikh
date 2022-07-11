<sectionid = "log-in">
  <div>
    <div>
      <p>Please Log In or Register.</p>
    </div>
    <form class="" action="log-in.php" method="post">
      <label for="email">Email: </label>
      <input type="text" name="email" placeholder="abc@company.com" value="<?php echo htmlspecialchars($email); ?>">
      <div>
        <?php echo $error["email"]; ?>
      </div>
      <label for="password">Password: </label>
      <input type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password); ?>">
      <div>
        <?php echo $error["password"]; ?>
      </div>
      <input type="submit" name="log-in" value="Log In / Register">
    </form>
  </div>
</section>
