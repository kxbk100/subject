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
		$news_data = $news->order('istop desc,time desc')->limit(9)->select();
		$notice_data = $notice->order('istop desc,time desc')->where("type='0'")->limit(5)->select();
		$notice_study = $notice->order('istop desc,time desc')->where("type='1'")->limit(5)->select();

	    //去除news内容的html标记
	    for($i=0;$i<count($news_data);$i++){
	    	$news_data[$i]['content'] = strip_tags($news_data[$i]['content']);
	    }

	    //格式化news的数据
	    $i=0;$j=0;
	    foreach ($news_data as $data) {
	    	$news_result[$i][$j] = $data;
	    	if($j>=2){
	    		$i++;
	    		$j=0;
	    	}else{
	    		$j++;
	    	}
	    }

	    //去除notice内容的html标记
	    for($i=0;$i<count($notice_data);$i++){
	    	$notice_data[$i]['content'] = strip_tags($notice_data[$i]['content']);
	    }
	   	for($i=0;$i<count($notice_study);$i++){
	    	$notice_study[$i]['content'] = strip_tags($notice_study[$i]['content']);
	    }
	    $list = $student->order('time desc')->limit(8)->select();
	    //去除student内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    //显示页面
	    $this->assign('news',$news_result);
	    $this->assign('notice',$notice_data);
	    $this->assign('study',$notice_study);
	    $this->assign('list',$list);
	    $this->assign('picture',$picture_data);
		$this->display();

	}


}