<?php

/**
 * Created by PhpStorm.
 * User: byng
 * Date: 23/07/15
 * Time: 12:57
 */

use Website\Controller\Action;

class DefaultController extends Action
{

    public function defaultAction () {

        $this->enableLayout();
        $items = Pimcore\Model\Object\Story::getList();
        $this->view->content = $items;

    }



}