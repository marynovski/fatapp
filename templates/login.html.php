<header id="page-header">
    <h2><?php echo $translations[$lang]['loginSection']; ?></h2>
</header>
<section id="login-form">
    <form method="POST" action="src/login.php">
        <label for="username"><?php echo $translations[$lang]['username']; ?></label>
        <input type="text" name="username">

        <label for="password"><?php echo $translations[$lang]['password']; ?></label>
        <input type="password" name="password">

        <button type="submit"><?php echo $translations[$lang]['login']; ?></button>
    </form>
</section>
