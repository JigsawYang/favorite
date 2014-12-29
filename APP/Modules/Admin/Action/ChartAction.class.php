<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/19
 * Time: 9:45
 */

class ChartAction extends CommonAction {
    public function index() {
        $big_cate = M('cate')->field(array('name', 'sort'))->where(array('pid' => 0))->select();
        $web_cate = M('webinfo')->field(array('title', 'click'))->select();
        $this->web_cate = json_encode($web_cate);
        $this->pie = json_encode($big_cate);
//        p($a);die;
        $this->display();
    }
}