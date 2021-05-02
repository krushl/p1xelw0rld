<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.view.php' ?>
<div class="container-emulators">
    <?php foreach ($platforms as $platform): ?>
        <a href="/routes/emulators/emulator/index.php?id=<?= $platform->id ?>">
            <div class="emulators">
                <div class="emulators-image"><img src="/assets/img/<?= $platform->name ?>.png" alt="<?= $platform->name ?>">
                </div>
                <div class="emulators-title"><?= $platform->name ?></div>
            </div>
        </a>
    <?php endforeach; ?>

</div>
<a class="back"  href="/">BACK</a>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.view.php' ?>
