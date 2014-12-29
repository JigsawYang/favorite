<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/7
 * Time: 19:07
 */

class Category {
    //组合一维数组
    Static public function unlimitedForLevel($cate, $html = '--', $pid = 0, $level = 0) {
        $arr = array();
//        p($cate);die;
        foreach ($cate as $v) {
            if($v['pid'] == $pid) {
                $v['level'] = $level + 1;
                $v['html'] = str_repeat($html, $level);
                $arr[] = $v;
                $arr = array_merge($arr, self::unlimitedForLevel($cate, $html, $v['id'], $level + 1));
            }
        }
        return $arr;

    }
    //多维
    Static public function unlimitedForLayer($cate, $name = 'child', $pid = 0) {
        $arr = array();
        foreach($cate as $v) {
            if($v['pid'] == $pid) {
                $v[$name] = self::unlimitedForLayer($cate, $name, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }

    //从子ID找父
    static public function getParents($cate, $id) {
        $arr = array();
        foreach($cate as $v) {
            if($v['id'] == $id) {
                $arr[] = $v;
                $arr = array_merge(self::getParents($cate, $v['pid']), $arr);
            }
        }
        return $arr;
    }

    //传递父ID 返回子集
    Static public function getChildId($cate, $pid){
        $arr = array();
        foreach($cate as $v) {
            if($v['pid'] == $pid) {
                $arr[] = $v['id'];
                $arr = array_merge($arr, self::getChildId($cate, $v['id']));
            }
        }
        return $arr;
    }
}