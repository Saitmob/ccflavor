<?php
namespace Home\Model;

use Think\Model;
use Think\Model\RelationModel;
class VideolibModel extends RelationModel
{
//    protected $trueTableName = 'cc_videolib';
    protected $_link = array(
        'videosrc' => array(
            'mapping_type'=>self::HAS_MANY,
            'foreign_key'=>'vid',
//            'condition'=>'id=1',
        ),
        'videopic'=>array(
            'mapping_type'=>self::HAS_ONE,
            'foreign_key'=>'pid',
        ),
    );
}