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

	//科研项目列表
	public function showResearchList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='research'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='research'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//显示科研项目文章
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

	//学术论文列表
	public function showAcademicList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='academic'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='academic'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//专著材料列表
	public function showTreatiseList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='treatise'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='treatise'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//知识产权列表
	public function showPropertyList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='property'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='property'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//学生项目列表
	public function showStudentProjectList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='studentProject'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='studentProject'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//竞赛获奖列表
	public function showCompetitionList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='competition'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='competition'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//学生论文列表
	public function showStudentThesisList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='studentThesis'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='studentThesis'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}

	//知识产权列表
	public function showStudentPropertyList(){
		$list_passages = M('list_passages'); // 实例化Data数据对象  date 是你的表名
	    $count = $list_passages->where("second='studentProperty'")->count();// 查询满足要求的总记录数 $map表示查询条件
	    $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $list = $list_passages->where("second='studentProperty'")->order('time desc')->page($_GET['p'].',1')->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    //去除内容的html标记
	    for($i=0;$i<count($list);$i++){
	    	$list[$i]['content'] = strip_tags($list[$i]['content']);
	    }

	    $this->assign('list',$list);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display('showList'); // 输出模板
	}


}