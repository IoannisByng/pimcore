<?php if($this->story) { ?>
    <ul class="media-list">
            <li class="media">
                <div class="media-body">

                    <h4 class='media-heading'> <?= $this->story->getTitle(); ?> </h4>
                    <?= $this->story->getBody(); ?>

                </div>
            </li>
    </ul>
<?php } ?>