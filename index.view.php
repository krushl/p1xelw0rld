<?php include $_SERVER['DOCUMENT_ROOT']."/templates/header.view.php";?>
<div id="loadScreen" class="loadScreen" tabindex="0"  >
    <div class="logoScreen__bg">
        <div class="logoStart">
            <h1 class="logoStart__text">
                PIXELWORLD
            </h1>
        </div>
        <h3 id="start" class="start blink">PRESS ANY KEY</h3>
    </div>
</div>

<div class="nav" id="menu">
    <div class="logoMenu">
        <h2 class="logoMenu__text">
            PIXELWORLD
        </h2>
    </div>
    <ul>
        <div id="navMenu">
            <li class="menu" id="games" ><a href="/routes/games/index.php">GAMES</a></li>
            <li class="menu" id="emulators"><a href="/routes/emulators/index.php">EMULATORS</a></li>
            <li class="menu" id="options" ><a href="/routes/options/index.php">OPTIONS</a></li>
            <li class="menu" id="howToPlay"><a href="/routes/howToPlay/index.php">HOW TO PLAY</a></li>

        </div>

    </ul>
</div>
<!--<nosript><p class="">WHERe JAVASCRIPT</p></nosript>-->
<?php include $_SERVER['DOCUMENT_ROOT']."/templates/footer.view.php";?>
