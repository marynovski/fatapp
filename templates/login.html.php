<section id="login-form">
    <form method="POST" action="">
        <label for="username"><?php echo $translations[$lang]['username']; ?></label>
        <input type="text" name="username">

        <label for="password"><?php echo $translations[$lang]['password']; ?></label>
        <input type="password" name="password">

        <button type="submit"><?php echo $translations[$lang]['login']; ?></button>
    </form>
</section>
