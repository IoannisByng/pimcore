<?php
/**
 * Created by PhpStorm.
 * User: byng
 * Date: 24/07/15
 * Time: 16:56
 */

use Website\Controller\Action;

class RenderletController extends Action {


    public function storyAction () {
        $this->view->story = Object::getById($this->_getParam("id"));
    }


}

