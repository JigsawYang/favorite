<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 19:53
 */

class RegAction extends Action {
    public function index() {
        $this->display();
    }

    /**
     * 验证码显示
     */
    public function verify() {
        import('Class.Image', APP_PATH);
        Image::verify();
    }

    /**
     * 接受注册
     */
    public function reg() {
        if(!IS_POST) {
            _404("页面不存在!");
        }
        if(I('code', '', 'strtolower') != session('verify')) {
            $this->error('验证码错误');
        }
        $db = M('user');
        $username = I('username');
        $password = I('password', '', 'md5');
        $user = $db->where(array('username' => $username))->find();
        if($user) {
            $this->error("用户名存在");
        }
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => I('email'),
            'logintime' => time(),
            'loginip' => get_client_ip(),
        );
        if($db->add($data)) {
            $this->success("注册成功", U('Index/Login/index'));
        }else {
            $this->error('注册失败');
        }
    }
}