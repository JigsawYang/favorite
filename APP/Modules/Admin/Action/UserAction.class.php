<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 22:35
 */
class UserAction extends CommonAction {
    public function index() {
        import('ORG.Util.Page');
        $count = M('user')->count();
        $page = new Page($count, 3);
        $limit = $page->firstRow . ',' . $page->listRows;
        $field = array('password');
        $user = M('user')->field($field, true)->limit($limit)->select();
        $page->setConfig('theme',"<ul class='pagination pull-right'><li><a>%totalRow% %header% %nowPage%/%totalPage% 页</a></li><li>%upPage%</li><li>%first%</li><li>%prePage%</li><li>%linkPage%</li><li>%nextPage%</li><li>%end%</li><li>%downPage%</li></ul>");
        $this->iuser = $user;
        $this->page = $page->show();
        $this->count = $count;
//        p($aduser);die;
        $this->display();
    }

    public function addUser() {
        $this->display();
    }

    /**
     * 处理添加用户
     */
    public function addUserHandle() {
        if(!IS_POST) {
            _404("页面不存在!");
        }
        $db = M('user');
        $username = I('username');
        $password = I('password', '', 'md5');
        $user = $db->where(array('username' => $username))->find();
        if($user) {
            $this->error("用户名存在", U('Admin/User/index'), 100);
        }
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => I('email'),
            'logintime' => time(),
            'loginip' => get_client_ip(),
        );
        if($db->add($data)) {
            $this->success("添加成功", U('Admin/User/index'), 100);
        }else {
            $this->error('添加失败', U('Admin/User/index'));
        }
    }

    /**
     * 显示要修改的用户表单
     */
    public function editUser() {
        $id = (int)$_GET['id'];
        $field = array('username', 'id', 'email');
        $this->user = M('user')->field($field)->where(array('id' => $id))->select();
        $this->display();
    }


    /**
     * 处理修改用户
     */
    public function editUserHandle() {
        if(!IS_POST) {
            _404("页面不存在!");
        }
        $db = M('user');
        $username = I('username');
        $password = I('password', '', 'md5');
        $id = (int)$_GET['id'];
        $user = $db->where(array('username' => $username))->find();
        if($user) {
            $this->error("用户名存在");
        }
        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'email' => I('email'),
            'logintime' => time(),
            'loginip' => get_client_ip(),
        );
        if(M('user')->save($data)) {
            $this->success("修改成功", U('Admin/User/index'));
        }else {
            $this->error('修改失败');
        }
    }


    public function delete() {
        $id = (int)$_GET['id'];
        $del = M('user')->where(array('id' => $id))->delete();
        if($del) {
            $this->success("删除成功", U('Admin/User/index'));
        }else {
            $this->error("删除失败");
        }
    }
}