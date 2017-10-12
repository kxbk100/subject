<?php
namespace Home\Controller;
use Think\Controller;
class PassagesController extends Controller {

	public function showPassages(){
		$passages = M('passages');
		$news = M('news');

		$news_data = $news->order('time desc')->limit('0,3')->select();

		$id = I('path.2','','');
		$result = $passages->find($id);

		$max = $passages->Max('id');
		$result['pre'] = ($id-1<=0)?$id:$id-1;
		$result['next'] = ($id+1>$max)?$max:$id+1;

		$sons = $passages->where("first='{$result['first']}'")->select();

		$this->assign('news',$news_data);
		$this->assign('sons',$sons);
		$this->assign('result',$result);
		$this->display();
	}

	public function showPassages3(){
		$passages = M('passages');
		$news = M('news');
		$notice = M('notice');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$notice_data = $notice->order('istop desc,time desc')->where("type='0'")->limit(5)->select();
		$notice_study = $notice->order('istop desc,time desc')->where("type='1'")->limit(5)->select();

		$id = I('path.2','','');
		$result = $passages->find($id);

		$third = $passages->where("first='{$result['first']}'")->where("second='{$result['second']}'")->select();
		array_splice($third, 4 ,1);

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('study',$notice_study);
		$this->assign('third',$third);
		$this->assign('result',$result);
		$this->display();
	}

	public function showPassagesList(){
		$passages = M('passages');
		$notice = M('notice');
		$admissions = M('admissions');
		$type = I('get.type','','');

		$notice_data = $notice->order('istop desc,time desc')->where("type='0'")->limit(5)->select();
		$notice_study = $notice->order('istop desc,time desc')->where("type='1'")->limit(5)->select();
		if($type==''){
			$admissions_data = $admissions->order('time desc')->limit(6)->select();
		}else{
			$admissions_data = $admissions->where("type='{$type}'")->order('time desc')->limit(6)->select();
		}

		$this->assign('notice',$notice_data);
		$this->assign('study',$notice_study);
		$this->assign('admissions',$admissions_data);
		$this->assign('type',$type);
		$this->display();
	}

	public function time(){
		$time = M('time');

		$ini = $time->order('year desc,month desc')->select();
		foreach ($ini as $item) {
			$year = $item['year'];
			$month = $item['month']."/".$item['day'];
			$result[$year][$month] = $item;
		}

		$years = array_keys($result);

		$this->assign('years',$years);
		$this->assign('result',$result);
	    $this->display();
	}

	public function showTime(){
		$id = I('path.2','','');
		$news = M('news');
		$time = M('time');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$result = $time->find($id);
		$this->assign('result',$result);
		$this->assign('news',$news_data);
		$this->display();
	}

	public function showAdmissions(){
		$admissions = M('admissions');
		$news = M('news');
		$notice = M('notice');

		$news_data = $news->order('time desc')->limit('0,3')->select();
		$notice_data = $notice->order('istop desc,time desc')->where("type='0'")->limit(5)->select();
		$notice_study = $notice->order('istop desc,time desc')->where("type='1'")->limit(5)->select();

		$id = I('path.2','','');
		$result = $admissions->find($id);

		$max = $admissions->Max('id');
		$result['pre'] = ($id-1<=0)?$id:$id-1;
		$result['next'] = ($id+1>$max)?$max:$id+1;

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('study',$notice_study);
		$this->assign('result',$result);
		$this->display();
	}

}