<?php
    $items = Pimcore\Model\Object\Story::getList(array(
            "offset" => $offset,
            "limit" => 3,
            "orderKey" => "o_creationDate",
            "order" => "desc"
    ));
    var_dump($items);
?>

<?php if ($this->editmode) { ?>
    <!-- with <?= $this->brick->getPath(); ?> you get the path to the area out of the info-object -->
    <link rel="stylesheet" type="text/css" href="<?= $this->brick->getPath(); ?>/editmode.css" />
    <div>
        <ul class="media-list">
            <?php foreach ($this->items as $story): ?>
                <li class="media">
                    <div class="media-body">

                        <h4 class='media-heading'> <?= $story->getTitle(); ?> </h4>
                        <?= $story->getBody(); ?>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php }?>

