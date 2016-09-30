<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;
use Think\Page;

class VideoController extends Controller{

    public function index(){
//        $video = D('Videolib');

//            $data = $video->find($vid);
//          var_dump($data);

//        $this->assign('data',$data);
        $vid = $_GET['vid'];
        if($vid!=null){
            $vm = D('Videolib');
            $video = $vm->where(['id'=>$vid])->find();
            $pic = $vm->where(['id'=>$vid])->relation('videopic')->find()['videopic']['poster_pic'];
//        $videoSrcArr = $video->relation('videosrc')->find()['videosrc'];



            $vms = D('Videosrc');
            $videos = $vms->where(['vid'=>$vid])->select();
//            var_dump($videos);
            //分页
//            $p = new Page($count,4);
//            $list = $videos->limit($p->firstRow, $p->listRows)->select();
//            $this->assign('list', $list); // 赋值数据集
//            $this->assign('page', $p->show()); // 赋值分页输出
            //由于thinkphp的分页太死板。。
            //视频集数
            $count = count($videos);

            //这里传递一个默认视频源
            $default_src  = $videos[0]['each_vidsrc'];

            $this->assign(['video'=>$video,'pic'=>$pic,'videos'=>$videos,'count'=>$count,'default_src'=>$default_src]);
            //        var_dump(count($videoSrcArr));
            $this->display();
        }
        else{//如果未传入视频id，则返回首页
            $this->display('index/index');
        }




    }
    public function player(){
        //通过传递的视频id  得到对应的vid，并查到该视频的src
        $vid = $_GET['vid'];

//        var_dump($vid);

        $episode_num = $_GET['num'];
//        var_dump($episode_num);
        $video = D('Videosrc');
        $videos = $video->where(['vid'=>$vid,'episode_num'=>$episode_num])->find();
//        $videos_pic = $video->relation('videosrc')->find()['videosrc'];
//        var_dump($src);
//        var_dump($videos);
//        $src = $videos['each_vidsrc'];
//        var_dump($src);

            $src = $videos['each_vidsrc'];
//            var_dump($src);

////
        $this->assign('src',$src);
        $this->display();
    }
//    public function video_player(){
//        $this->display('player');
//    }
}