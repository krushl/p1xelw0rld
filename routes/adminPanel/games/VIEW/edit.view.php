<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">
    <form method="post" action="edit.php" enctype="multipart/form-data" class="panel-form">-->
                <input type="text"  class="panel-input" name="name" value="<?= $_SESSION['name']?>"placeholder="Имя игры">
               <label class="panel-label" for="banner">
                Добавить баннер
                   <input type="file" name="banner" class="panel-input" id="banner">
               </label>
                <label class="panel-label" for="screenshots">
                    Добавить скриншоты
                <input type="file" name="screenshots[]" multiple class="panel-input" id="screenshots">
                </label>
                <textarea name="description" class="panel-input" placeholder="Описание"><?= $_SESSION['description']?></textarea>
                <select name="platform[]" multiple class="panel-input">
                    <?php foreach ($platforms as $v): ?>
                        <option value="<?= $v->id?>"> <?= $v->name ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="genre[]" multiple class="panel-input">
                    <?php foreach ($genres as $v): ?>
                        <option value="<?= $v->id?>"><?= $v->genre ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="panel-label" for="game">
                    Добавить игру
                <input type="file" name="file" class="panel-input" id="game">
                </label>
                <input type="submit" name="btnSubmit" class="panel-input">
            </form>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>

