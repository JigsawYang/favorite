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
        $no_http = substr($info[0]['address'], 7);
        $sql = 'select title, address, click from fw_webinfo where title in (select name from fw_cate where pid = (select pid from fw_cate s, fw_webinfo p where s.id = p.cid and p.cid =' . $id . '))';
        $sim_link = M('webinfo')->query($sql);
        $hot = M('webinfo')->field(array('address', 'title', 'click'))->order('click DESC')->limit(5)->select();
        $this->hot = $hot;
        $this->no_http = $no_http;
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

    public function qrcode() {
        Vendor("phpqrcode.phpqrcode");
        $adr = $_GET['adr'];//二维码内容
        // echo $value;die;
        $value = 'http://'.$adr;
        $errorCorrectionLevel = 'L';//容错级别
        $matrixPointSize = 4;//生成图片大小
        //生成二维码图片
        QRcode::png($value, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2);
        $logo = './Public/images/logo.png';//准备好的logo图片
        $QR = 'qrcode.png';//已经生成的原始二维码图
         
        if ($logo !== FALSE) {
            $QR = imagecreatefromstring(file_get_contents($QR));
            $logo = imagecreatefromstring(file_get_contents($logo));
            $QR_width = imagesx($QR);//二维码图片宽度
            $QR_height = imagesy($QR);//二维码图片高度
            $logo_width = imagesx($logo);//logo图片宽度
            $logo_height = imagesy($logo);//logo图片高度
            $logo_qr_width = $QR_width / 5;
            $scale = $logo_width/$logo_qr_width;
            $logo_qr_height = $logo_height/$scale;
            $from_width = ($QR_width - $logo_qr_width) / 2;
            //重新组合图片并调整大小
            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
            $logo_qr_height, $logo_width, $logo_height);
        }
        //输出图片
        Header("Content-type: image/png");
        ImagePng($QR);
    }
}