<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
    <div class="container-game" id="container">
        <h1 class="title"><?= $game->name ?></h1>
        <div class="description">
            <?= $game->description ?>
        </div>
        <div class="description-items">
            <div class="screenshots js-flickity"
                 data-flickity-options='{"pageDots":" false","freeScroll":"true"}'>
                <?php foreach ($images as $v): ?>
                    <div class="screenshot-cell">
                        <img class="screenshot"
                             src="/assets/gamesImages/<?= $game->name ?>/screenshots/<?= $v->origName ?>"
                             alt="<?= $v->origName ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="game-items">
                <div>
                    <div>Жанр:
                        <?php foreach ($genre as $v): ?>
                            <a><?= $v->genre ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div>Платформа:
                        <?php foreach ($platform as $v): ?>
                            <a><?= $v->name ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="game-download"><a href="/assets/gamesFiles/<?= $game->name ?>/<?= $game->file ?>" download>Скачать
                        игру</a>
                </div>
            </div>

        </div>

    </div>
    <a class="back"  href="../">BACK</a>
    <script src="/assets/js/flicky.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>