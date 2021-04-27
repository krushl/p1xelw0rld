<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
    <div class="container" id="container">

        <div class="gallery  js-flickity"
             data-flickity-options='{"pageDots":" false","freeScroll":"true"}'>
            <div class="gallery-cell">
                <div class="container-games">
                    <?php foreach ($games as $v): ?>
                    <a href="/routes/games/game/?id=<?=$v->id?>">
                        <div style="background-image:url('/assets/gamesImages/<?= $v->name ?>/banner/<?= $v->banner ?>')" class="game" >
                            <div class="content">
                                <h2><?= $v->name ?></h2>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/flicky.js"></script>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>