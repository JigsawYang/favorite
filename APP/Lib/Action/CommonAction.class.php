<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/7
 * Time: 15:50
 */

class CommonAction extends Action {
    public function _initialize() {
        if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
            $this->redirect('Admin/Login/index');
        }
        $this->name = $_SESSION['username'];
    }
}