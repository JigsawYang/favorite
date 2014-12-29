<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/14
 * Time: 14:35
 */

class CategoryAction extends CommonAction {
    public function index() {
        import('Class.Category', APP_PATH);
        $cate = M('cate')->order('sort ASC')->select();
//        p($cate);die;
        $cate = Category::unlimitedForLevel($cate, '&nbsp----');
        $this->count = M('cate')->count();
//        p($cate);die;
        $this->cate = $cate;
        $this->display();
    }

    public function addCate() {
        $this->pid = I('pid', 0, 'intval');
        $this->display();
    }

    public function addCateHandle() {
        if(!IS_POST) {
            _404("页面不存在");
        }
        if(M('cate')->add($_POST)) {
            $this->success('添加成功', U('Admin/Category/index'));
        }else {
            $this->error("添加失败");
        }
    }

    public function editCate() {
        $id = (int)$_GET['id'];
        $this->name = M('cate')->where(array('id' => $id))->select();

        $this->display();
    }

    public function editCateHandle() {
        $id = (int)$_GET['id'];
        $data = array(
            'id' => $id,
            'name' => $_POST['name'],
        );
        if(M('cate')->save($data)) {
            $this->success('修改成功', U('Admin/Category/index'));
        }else {
            $this->error('添加失败');
        }
    }

    public function sortCate() {
        $db = M('cate');
        foreach($_POST as $id => $sort) {
//            p($_POST);die;
            $db->where(array('id' => $id))->setField('sort', $sort);
        }
        $this->redirect('Admin/Category/index');
    }

    public function delete() {

        $id = (int)$_GET['id'];
        $del = M('cate')->where(array('id' => $id))->delete();
        if($del) {
            $this->success("删除成功", U('Admin/Category/index'));
        }else {
            $this->error("删除失败");
        }
    }
}