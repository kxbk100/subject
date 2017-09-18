<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$news = M('news');
		$notice = M('notice');
		$student = M('student');
		$picture = M('picture');

		$picture_data = $picture->order('id')->select();
		$news_data = $news->order('istop desc,gtime desc')->limit(3)->select();
		$notice_data = $notice->order('istop desc,time desc')->limit(5)->select();

	    //去除news内容的html标记
	    for($i=0;$i<count($news_data);$i++){
	    	$news_data[$i]['content'] = strip_tags($news_data[$i]['content']);
	    }

	    //去除notice内容的html标记
	    for($i=0;$i<count($notice_data);$i++){
	    	$notice_data[$i]['content'] = strip_tags($notice_data[$i]['content']);
	    }
	    $list = $student->order('time desc')->limit(8)->select();
	    //去除student内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }
	    $this->assign('news',$news_data);
	    $this->assign('notice',$notice_data);
	    $this->assign('list',$list);
	    $this->assign('picture',$picture_data);
		$this->display();
	}


}
