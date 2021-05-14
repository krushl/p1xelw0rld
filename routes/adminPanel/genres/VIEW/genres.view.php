<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.view.php"; ?>
<div class="container">


    <table>
        <tr>
            <th>Game name</th>
            <th colspan="2">Instruments</th>
        </tr>
        <?php foreach ($genres as $genre):?>
            <tr>
                <td><?=$genre->genre?></td>
                <td><a href="edit.php?id=<?=$genre->id?>">EDIT</a></td>
                <td><a href="delete.php?id=<?=$genre->id?>">DELETE</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>

<a class="back" href="/routes/adminPanel/">BACK</a>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.view.php"; ?>



