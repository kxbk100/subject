<?php
namespace Home\Controller;
use Think\Controller;
class PassagesController extends Controller {

	public function showPassages(){
		$passages = M('passages');
		$news = M('news');
		$notice = M('notice');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$notice_data = $notice->order('time desc')->limit('0,5')->select();

		$id = I('path.2','','');
		$result = $passages->find($id);

		$max = $passages->Max('id');
		$result['pre'] = ($id-1<=0)?$id:$id-1;
		$result['next'] = ($id+1>$max)?$max:$id+1;

		$sons = $passages->where("first='{$result['first']}'")->select();

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('sons',$sons);
		$this->assign('result',$result);
		$this->display();
	}

	public function time(){
	    $this->display();
	}

}