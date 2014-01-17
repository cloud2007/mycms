<?php

/**
 * 图片上传类
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class UploadAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index(){
        $config = array(
            'uploadPath' => 'a',
            'thumbSize' => array(
                'small' => array(
                    'width' => '200',
                    'height' => '200',
                    'watermark' => 1,
                ),
                'middle' => array(
                    'width' => '400',
                    'height' => '400',
                    'watermark' => 1,
                )
            )
        );
        $uploader = new Uploader($config);
        //$uploader->needWaterMark = Uploader::WATER_MARK_IMAGE;
        //$uploader->needResize = true;
        //$uploader->save();
        echo $uploader->save();
    }

}

?>