<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php" ?>
<div class="container">
    <div class="panel">
        <h2 class="panel-logo">ADMIN PANEL</h2>
        <button class="panel-button"> Games </button>
        <div class="panel-menu">
            <ul>
                <li class="panel-item"><a href="games/ADD/">ADD</a></li>
                <li class="panel-item"><a href="games/VIEW/">VIEW </a></li>
            </ul>
        </div>
        <button class="panel-button"> Emulators </button>
        <div class="panel-menu">
            <ul>
                <li class="panel-item"><a href="emulators/ADD/">ADD</a></li>
                <li class="panel-item"><a href="emulators/VIEW/">VIEW</a></li>
            </ul>
        </div>
        <button class="panel-button"> Genres </button>
        <div class="panel-menu">
            <ul>
                <li class="panel-item"><a href="genres/ADD/">ADD</a></li>
                <li class="panel-item"><a href="genres/VIEW/">VIEW</a></li>
            </ul>
        </div>
        <button class="panel-button"> Platforms</button>
        <div class="panel-menu">
            <ul>
                <li class="panel-item"><a href="platforms/ADD/">ADD</a></li>
                <li class="panel-item"><a href="platforms/VIEW/">VIEW</a></li>
            </ul>
        </div>
        <button class="panel-button"><a href="newAdmin/">Add new admin</a></button>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php" ?>
