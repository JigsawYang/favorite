<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 15:23
 */

class WebinfoAction extends CommonAction {
    public function index() {
        import('ORG.Util.Page');
        $where = array('del' => 0);
        $count = M('webinfo')->where($where)->count();
        $page = new Page($count, 2);
        $limit = $page->firstRow . ',' . $page->listRows;
        $field = array('del');
        $web = D('WebRelation')->field($field, true)->where($where)->relation(true)->limit($limit)->select();
        $page->setConfig('theme',"<ul class='pagination pull-right'><li><a>%totalRow% %header% %nowPage%/%totalPage% 页</a></li><li>%upPage%</li><li>%first%</li><li>%prePage%</li><li>%linkPage%</li><li>%nextPage%</li><li>%end%</li><li>%downPage%</li></ul>");
        $this->web = $web;
        $this->page = $page->show();
//        p($web);die;
        $this->count = $count;
        $this->display();
    }

    public function addWeb() {
        import('Class.Category', APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $web = M('webinfo')->select();
        $webid = array();
        foreach($web as $val) {
            array_push($webid, $val['cid']);
        }

        $cate = Category::unlimitedForLevel($cate);
//        p($cate);die;
        foreach($cate as $val1) {
            if($val1['level'] == 3 && !in_array($val1['id'], $webid)) {
                $arr[] = $val1;
            }
        }
        $this->cate = $arr;
        $this->display();
    }

    public function addWebHandle() {
        if(!IS_POST) {
            _404('网页不存在');
        }
        $data = array(
            'title' => I('title'),
            'content' => I('content'),
            'address' => I('address'),
            'time' => time(),
            'click' => I('click', 0, 'intval'),
            'cid' => I('cid', 0, 'intval')
        );
        if(M('webinfo')->add($data)) {
            $this->success('添加成功', U('Admin/Webinfo/index'));
        }else {
            $this->error("添加失败");
        }
    }

    public function editWeb() {
        $id = (int)$_GET['id'];
        import('Class.Category', APP_PATH);
        $cate = M('cate')->order('sort')->select();
        $this->cate = Category::unlimitedForLevel($cate);
        $this->web = M('webinfo')->where(array('id' => $id))->select();
//        p($web);die;
        $this->display();
    }

    public function editWebHandle() {
        if(!IS_POST) {
            _404("页面不存在!");
        }

        $data = array(
            'id' => (int)$_GET['id'],
            'title' => I('title'),
            'content' => I('content'),
            'address' => I('address'),
            'time' => time(),
            'click' => I('click', 0, 'intval'),
            'cid' => I('cid', 0, 'intval')
        );
        if(M('webinfo')->save($data)) {
            $this->success('修改成功', U('Admin/Webinfo/index'));
        }else {
            $this->error("修改失败");
        }
    }

    public function toTrash() {
        $id = (int)$_GET['id'];
        $update = array(
            'id' => $id,
            'del' => (int)$_GET['type'],
        );
        if(M('webinfo')->save($update)) {
            $this->success('成功', U("Admin/Webinfo/index"));
        }else {
            $this->error('失败');
        }
    }

    public function trash() {
        import('ORG.Util.Page');
        $where = array('del' => 1);
        $count = M('webinfo')->where($where)->count();
        $page = new Page($count, 2);
        $limit = $page->firstRow . ',' . $page->listRows;
        $field = array('del');
        $web = D('WebRelation')->field($field, true)->where($where)->relation(true)->limit($limit)->select();
        $page->setConfig('theme',"<ul class='pagination pull-right'><li><a>%totalRow% %header% %nowPage%/%totalPage% 页</a></li><li>%upPage%</li><li>%first%</li><li>%prePage%</li><li>%linkPage%</li><li>%nextPage%</li><li>%end%</li><li>%downPage%</li></ul>");
        $this->web = $web;
        $this->page = $page->show();
//        p($web);die;
        $this->count = $count;
        $this->display();
    }

    public function delete() {
        $id = (int)$_GET['id'];
        if(M('webinfo')->where(array('id' => $id))->delete()) {
            $this->success('删除成功', U('Admin/Webinfo/trash'));
        }else {
            $this->error('删除失败');
        }
    }
}