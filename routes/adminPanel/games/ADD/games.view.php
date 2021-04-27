<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">
    <form method="post" action="index.php" enctype="multipart/form-data" class="games-form">
        <input type="text"  class="games-input" name="name">
       <label class="games-label" for="banner">
        Добавить баннер
           <input type="file" name="banner" class="games-input" id="banner">
       </label>
        <label class="games-label" for="screenshots">
            Добавить скриншоты
        <input type="file" name="screenshots[]" multiple class="games-input" id="screenshots">
        </label>
        <textarea name="description" class="games-input">
    </textarea>
        <select name="platform[]" multiple class="games-input">
            <?php foreach ($platforms as $v): ?>
                <option value="<?= $v->id?>"> <?= $v->name ?></option>
            <?php endforeach; ?>
        </select>
        <select name="genre[]" multiple class="games-input">
            <?php foreach ($genres as $v): ?>
                <option value="<?= $v->id?>"><?= $v->genre ?></option>
            <?php endforeach; ?>
        </select>
        <label class="games-label" for="game">
            Добавить игру
        <input type="file" name="file" class="games-input" id="game">
        </label>
        <input type="submit" name="btnSubmit" class="games-input">
    </form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>



