<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">
    <form method="post" action="index.php" enctype="multipart/form-data">
        <label><input type="text" class="name" name="name"></label>

        <input type="file" name="banner">
        <input type="file" name="screenshots[]" multiple>
        <textarea name="description">

    </textarea>
        <select name="platform[]" multiple>
            <?php foreach ($platforms as $v): ?>
                <option value="<?= $v->id_platform ?>"> <?= $v->name ?></option>
            <?php endforeach; ?>
        </select>
        <select name="genre[]" multiple>
            <?php foreach ($genres as $v): ?>
                <option value="<?= $v->id_genre ?>"><?= $v->genre ?></option>
            <?php endforeach; ?>
        </select>

        <input type="file" class="file" name="file">

        <input type="submit" name="btnSubmit">
    </form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>



