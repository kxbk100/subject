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

	public function showPassages3(){
		$passages = M('passages');
		$news = M('news');
		$notice = M('notice');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$notice_data = $notice->order('time desc')->limit('0,5')->select();

		$id = I('path.2','','');
		$result = $passages->find($id);

		$third = $passages->where("first='{$result['first']}'")->where("second='{$result['second']}'")->select();
		array_splice($third, 4 ,1);

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('third',$third);
		$this->assign('result',$result);
		$this->display();
	}

	public function showPassagesList(){
		$passages = M('passages');
		$news = M('news');
		$notice = M('notice');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$notice_data = $notice->order('time desc')->limit('0,5')->select();

		$id = I('path.2','','');
		$result = $passages->find($id);

		$third = $passages->where("first='{$result['first']}'")->where("second='{$result['second']}'")->select();
		array_splice($third, 4 ,1);

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('third',$third);
		$this->assign('result',$result);
		$this->display();
	}

	public function time(){
		$time = M('time');

		$ini = $time->order('year desc,month desc')->select();
		foreach ($ini as $item) {
			$year = $item['year'];
			$month = $item['month'];
			$result[$year][$month] = $item;
		}

		$years = array_keys($result);

		$this->assign('years',$years);
		$this->assign('result',$result);
	    $this->display();
	}

}