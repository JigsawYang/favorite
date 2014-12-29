<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/16
 * Time: 10:52
 */
import('TagLib');

//自定义标签库
class TagLibFw extends TagLib {
    protected $tags = array(
        'clist' => array('attr' => 'limit,order', 'close' => true)
    );

    public function _clist($attr, $content) {
        $attr = $this->parseXmlAttr($attr);
        $str = <<<str
<?php
    \$_clist_cate = M('cate')->order("{$attr['order']}")->select();
    import('Class.Category', APP_PATH);
    \$_clist_cate = Category::unlimitedForLayer(\$_clist_cate);
    foreach (\$_clist_cate as \$_clist_v):
        extract(\$_clist_v);
?>
str;
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }
}