<?php

/*
 *
 * for
 * while
 * do while
 * foreach()
 */

//for ($x = 1; $x <= 10; $x++) {
//    echo $x;
//}

$numberOfBox = 10;

//while ()

//test


?>
<style>
    .box {
        background: red;
        height: 100px;
        width: 100px;
        float: left;
        margin: 5px;
    }

    .greenBox {
        background: green;
        height: 100px;
        width: 100px;
        float: left;
        margin: 5px;
    }
</style>

<blockquote>
    <?php for ($x = 0; $x < $numberOfBox; $x++) : ?>
        <?php if ($x % 2 == 0) : ?>
            <div class="greenBox"></div>
        <?php else: ?>
            <div class="box"></div>

        <?php endif; ?>

    <?php endfor; ?>

</blockquote>
