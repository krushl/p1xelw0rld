<?php include $_SERVER['DOCUMENT_ROOT']."/templates/header.view.php";?>
<div class="container">
    <form method="post" action="index.php" class="login-form">
        <label for="login" class="login-label">
            login </label>
            <input type="text" name="login" id="login" class="login-input">

        <label for="password" class="login-label">
            password</label>
            <input type="password"  name="password" id="password"  class="login-input">
        <button type="submit" name="btnSubmit" class="login-btn">LOGIN</button>
    </form>
</div>
    <a class="back" href="/">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT']."/templates/footer.view.php";?>