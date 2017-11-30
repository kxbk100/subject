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

	// public function showPassagesList(){
	// 	$second = I('path.2','','');
	// 	$type = I('path.3','','');
	// 	$admissions = M('admissions');

	// 	if($type == ""){	
	// 		$admissions_data = $admissions->where("second='{$second}'")->order('time desc')->limit(6)->select();
	// 	}else{
	// 		$admissions_data = $admissions->where("second='{$second}' AND type='{$type}'")->order('time desc')->limit(6)->select();
	// 	}
		
	// 	$this->assign('second',$second);
	// 	$this->assign('type',$type);
	// 	$this->assign('admissions',$admissions_data);
	// 	$this->display();
	// }

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

		$max = $admissions->max('id');
		$result['pre'] = ($id-1<=0)?$id:$id-1;
		$result['next'] = ($id+1>$max)?$max:$id+1;

		$this->assign('news',$news_data);
		$this->assign('notice',$notice_data);
		$this->assign('study',$notice_study);
		$this->assign('result',$result);
		$this->display();
	}

	/*  显示文章列表
		research 	科研项目
		academic 	学术论文
		treatise 	专著材料
		property 	知识产权

		studentProject 		学生项目
		competition 	竞赛获奖
		studentThesis 	学生论文
		studentProperty 	知识产权
		video 	视频资料
		download 	资料下载
	*/
	public function showPassageList(){
		$type = I('path.2','','');
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='$type'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='$type'")->order('istop desc,time desc')->page(I('path.3','','').',10')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }
	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//显示动态项目文章
	public function showDynamicPassages(){
		$list_passages = M('list_passages');
		$news = M('news');

		$news_data = $news->order('time desc')->limit('0,3')->select();

		$id = I('path.2','','');
		$result = $list_passages->find($id);

		$max = $list_passages->Max('id');
		$result['pre'] = ($id-1<=0)?$id:$id-1;
		$result['next'] = ($id+1>$max)?$max:$id+1;

		//$sons = $passages->where("first='{$result['first']}'")->select();

		$this->assign('news',$news_data);
		//$this->assign('sons',$sons);
		$this->assign('result',$result);
		$this->display("showPassages");
	}

}