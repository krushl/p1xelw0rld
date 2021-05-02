<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">

    <form method="post" action="index.php" enctype="multipart/form-data" class="panel-form">
        <input type="text"  class="panel-input" name="name" placeholder="Имя эмулятора">
        <textarea name="description" class="panel-input" placeholder="Описание"></textarea>

        <select name="platform[]" multiple class="panel-input">
            <?php foreach ($platforms as $v): ?>
                <option value="<?= $v->id?>"> <?= $v->name ?></option>
            <?php endforeach; ?>
        </select>

        <label class="panel-label" for="emulator">
            Добавить эмулятор
            <input type="file" name="file" class="panel-input" id="emulator">
        </label>

        <input type="submit" name="btnSubmit" class="panel-input">
    </form>
</div>
<a class="back" href="/routes/adminPanel/">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>
