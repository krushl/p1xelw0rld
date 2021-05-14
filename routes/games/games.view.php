<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
    <div class="container flex-column" id="container">
        <h2 class="title">GAMES</h2>
        <div class="gallery  js-flickity"
             data-flickity-options='{"pageDots":" false","freeScroll":"true"}' style="padding:0">
            <?php foreach ($sliderCeil as $ceil): ?>
            <div class="gallery-cell">
                    <div class="container-games">
                        <?php foreach ($ceil as $game): ?>
                            <a href="/routes/games/game/?id=<?= $game->id ?>">
                                <div style="background-image:url('/assets/gamesImages/<?= $game->name ?>/banner/<?= $game->banner ?>')"
                                     class="game">
                                    <div class="content">
                                        <h2><?= $game->name ?></h2>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <a class="back"  href="/">BACK</a>
    <script src="/assets/js/flicky.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>