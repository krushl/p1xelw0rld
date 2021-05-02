<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php" ?>

<div class="container">
    <div class="wrapper">
        <h1 class="emulator-title "><?=$emulator->name?></h1>
        <div class="emulator">
            <?= $emulator->description?>


        </div>

        <a class="pixel-button" href="/assets/emulators/<?=$emulator->file?>" download>Скачать</a>
</div>
</div>

    <a class="back"  href="../">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php" ?>
