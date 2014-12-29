<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 19:28
 */

class MyCommonAction extends Action {
    public function _initialize() {
        if(!isset($_SESSION['userid'])) {
            $this->redirect('Index/Login/index');
        }
        $this->name = $_SESSION['iuser'];
    }
}