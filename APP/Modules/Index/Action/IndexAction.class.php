<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 19:21
 */

class IndexAction extends Action {
    public function index() {
        if(isset($_SESSION['userid'])) {
            $this->name = $_SESSION['iuser'];
        }

        $this->display();
    }

    public function handle() {
        if(!IS_AJAX) {
            _404("错误");
        }
        $pid = (int)$_GET['id'];
        $cate_3 = M('cate')->where(array('pid' => $pid))->select();
        if($cate_3) {
            $this->ajaxReturn($cate_3, 'json', 1);
        }else {
            $this->ajaxReturn(0, '错误', 0);
        }
    }

    public function search() {
        if(!IS_AJAX) {
            _404("错误");
        }

        if(!$list = S('search_list')) {
            $res = M('webinfo')->field(array('title'))->select();
            S('search_list', $res, 40);

            if($res) {
                $this->ajaxReturn($res, 'json', 1);
            }else {
                $this->ajaxReturn(0, "错误", 0);
            }
        }

//        $keyword = $_POST['keyword'];
//
//        $map['title'] = array('like', $keyword.'%');
//        $res = M('webinfo')->where($map)->select();
//        if($res) {
//            $this->ajaxReturn($res, 'json', 1);
//        }else {
//            $this->ajaxReturn(0, "错误", 0);
//        }
        if($list) {

            $this->ajaxReturn($list, 'json', 1);
        }else {
            $this->ajaxReturn(0, "错误", 0);
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect('Index/Login/index');
    }
}