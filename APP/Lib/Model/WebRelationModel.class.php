<?php
/**
 * Created by PhpStorm.
 * User: Jigsaw
 * Date: 2014/12/15
 * Time: 16:41
 */

class WebRelationModel extends RelationModel {
    protected $tableName = 'webinfo';
    protected $_link = array(
        'cate' => array(
            'mapping_type' => BELONGS_TO,  //多对1
            'foreign_key' => 'cid',
            'mapping_fields' => 'name',
            'as_fields' => 'name:cate'
        )
    );
}