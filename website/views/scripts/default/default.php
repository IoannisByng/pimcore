<div class="container">
    <div class="row">

        <div class="col-md-5">
            <ul class="media-list">
                <?php foreach ($this->content as $story): ?>
                       <li class="media">
                            <div class="media-body">

                                <h4 class='media-heading'> <?= $story->getTitle(); ?> </h4>
                                <?= $story->getBody(); ?>

                            </div>
                       </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-md-5">

            <div class="row">

                <?= $this->areablock("myAreablock");?>

            </div>

            <div class="row">

                <?= $this->renderlet("story", array(
                    "controller" => "renderlet",
                    "action" => "story",
                    "title" => "Drag a story folder here to get a story",
                    "height" => 400
                )); ?>

            </div>



        </div>

    </div>
</div>








