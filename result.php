<?php
require_once "functions.php";


if (! playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="Salutation joueur">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " Victoire";
                    }
                    else {
                        echo "défaite";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo playerName('x')?>'s score: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo playerName('o')?>' score: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Rejouer</a><br />

                <a href="index.php" class="reset-btn">Retour menu</a>
            </div>

        </td>
    </tr>
</table>

</body>
</html>

