<?php
if (count($model)) {
    foreach ($model as $item) {
        ?>
        <div class="well">
            <h3><?=$item->title?></h3>
            <p>
                <?=$item->description?>
            </p>
        </div>
        <?php
    }
}