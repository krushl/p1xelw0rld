<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">
    <form method="post" action="index.php">
        <input class="panel-input" type="text" name="name" placeholder="Добавить жанр">
        <input class="panel-input" type="submit" name="btnSubmit">
    </form>
</div>
<a class="back" href="/routes/adminPanel/">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>
