<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>

<form method="post" action="index.php" enctype="multipart/form-data">
    <label><input type="text" class="name" name="name"></label>

    <input type="file" name="banner">
    <textarea name="description">
        
    </textarea>
    <input type="file" class="file" name="file">
    <input type="submit" name="btnSubmit">
</form>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>



