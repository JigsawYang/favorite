<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/13
 * Time: 18:16
 */

class LoginAction extends Action {
    public function index() {
        $this->display();
    }

    /**
     * 接受登陆
     */
    public function login() {
        if(!IS_POST) {
            _404("页面不存在");
        }
        $db = M('aduser');
        $username = I('username');
        $pwd = I('password', '', 'md5');
        $user = $db->where(array('username' => $username))->find();
//        p($user);
        if(!$user || $user['password'] != $pwd) {
            $this->error('用户名或密码错误');
        }
        $data = array(
            'id' => $user['id'],
            'logintime' => time(),
            'loginip' => get_client_ip(),
        );
        $db->save($data);

        session('uid', $user['id']);
        session('username', $user['username']);
        session('logintiem', date('Y-m-d', $user['logintime']));
        session('loginip', $user['loginip']);
        redirect(__GROUP__);
    }
}