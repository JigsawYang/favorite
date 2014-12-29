<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/13
 * Time: 18:27
 */
class IndexAction extends CommonAction {
    public function index() {
        $count = M('webinfo')->count();
        $hot = M('webinfo')->field(array('address', 'title', 'click'))->order('click DESC')->limit(3)->select();
        $user = M('user')->field(array('id', 'username', 'email', 'loginip', 'logintime'))->limit(3)->select();
        $this->user = $user;
        $this->count = $count;
        $this->hot = $hot;
        $this->display();
    }

    /**
     * 接受AJAX的POST 通过curl 请求天气网的API获得天气数据异步返回
     */
    public function getWeather() {
        if(!IS_AJAX) {
            _404("错误");
        }
        $wcode = $_POST['city'];
        $curlobj = curl_init();
        curl_setopt($curlobj, CURLOPT_URL, "http://www.weather.com.cn/data/cityinfo/".$wcode.".html");
        curl_setopt($curlobj, CURLOPT_HEADER, 0);
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlobj, CURLOPT_TIMEOUT, 3);
        $res = curl_exec($curlobj);
        $weather_arr = json_decode($res, true);
        curl_close($curlobj);
        if($weather_arr) {
            $this->ajaxReturn($weather_arr, 'json', 1);
        }else {
            $this->ajaxReturn(0, '错误', 0);
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/index');
    }

}