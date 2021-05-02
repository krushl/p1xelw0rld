<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">
    <div class="wrapper">
        <h1 class="wrapper-title ">OPTIONS</h1>
        <form action="">
            <div class="">
                <div class="option-form">
                    <div class="option-items">
                        <div class="soundMenu">
                            <label for="soundMenu" class="option-label">sound volume</label>
                        </div>
<!--                        <div>-->
<!--                            <label class="option-label">dark theme</label>-->
<!---->
<!--                        </div>-->

                    </div>

                    <div class="option-items">
                        <div>
                            <input type="range" class="soundMenu" name="soundMenu" min="0.0" max="1.0" step="0.05">
                        </div>
<!--                        <div class="switch">-->
<!--                            <input type="checkbox" name="switch" class="switch-checkbox" id="demo-switch"-->
<!--                                   checked="checked">-->
<!--                            <label class="switch-label" for="demo-switch">-->
<!--                                <div class="switch-inner"></div>-->
<!--                                <div class="switch-click"></div>-->
<!--                            </label>-->
<!--                        </div>-->
                    </div>
                </div>
        </form>
        <div class="about">
            <a href="../about/index.php">about</a>
        </div>

    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>
