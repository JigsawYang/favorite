<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/16
 * Time: 22:08
 */
class ShowAction extends Action {
    public function index() {
        if(isset($_SESSION['userid'])) {
            $this->name = $_SESSION['iuser'];
        }
        $id = (int)$_GET['id'];
        M('webinfo')->where(array('cid' => $id))->setInc('click');
        $where = (array('cid' => $id));
        $info = M('webinfo')->where($where)->select();
        $sql = 'select title, address, click from fw_webinfo where title in (select name from fw_cate where pid = (select pid from fw_cate s, fw_webinfo p where s.id = p.cid and p.cid =' . $id . '))';
        $sim_link = M('webinfo')->query($sql);
        $hot = M('webinfo')->field(array('address', 'title', 'click'))->order('click DESC')->limit(5)->select();
        $this->hot = $hot;
        $this->sim_link = $sim_link;
        $this->info = $info;
        $this->display();

    }

    public function keyword() {
        if(isset($_SESSION['userid'])) {
            $this->name = $_SESSION['iuser'];
        }
        $key = I('keyword');
        $where = (array('title' => $key));
        $info = M('webinfo')->where($where)->select();
        $info_id = $info[0]['cid'];
        $sql = 'select title, address, click from fw_webinfo where title in (select name from fw_cate where pid = (select pid from fw_cate s, fw_webinfo p where s.id = p.cid and p.cid =' . $info_id . '))';
        $sim_link = M('webinfo')->query($sql);
        $hot = M('webinfo')->field(array('address', 'title', 'click'))->order('click DESC')->limit(5)->select();
        $this->hot = $hot;
        $this->sim_link = $sim_link;
        $this->info = $info;
        $this->display();

    }
}