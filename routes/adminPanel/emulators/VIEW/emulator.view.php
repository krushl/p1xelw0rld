<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
    <div class="container">


        <table>
            <tr>
                <th>Game name</th>
                <th colspan="2">Instruments</th>
            </tr>
            <?php foreach ($emulators as $emulator):?>
                <tr>
                    <td><?=$emulator->name?></td>
                    <td><a href="edit.php?id=<?=$emulator->id?>">EDIT</a></td>
                    <td><a href="delete.php?id=<?=$emulator->id?>">DELETE</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>

    <a class="back" href="/routes/adminPanel/">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>



