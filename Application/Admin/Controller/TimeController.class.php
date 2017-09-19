<?php
namespace Admin\Controller;
use Think\Controller;
class TimeController extends Controller {
	public function showAdd(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$this->assign('name',I('session.name','',''));
		$this->display();
	}

	public function add(){
		$time = M('time');

		$content = I('post.editorValue','','');
		$date = I('post.date','','');
		$title = I('post.title','','');

		$strs = explode('-',$date);
		$year = $strs[0];
		$month = $strs[1];
		$day = $strs[2];

		$result['content'] = $content;
		$result['year'] = $year;
		$result['month'] = $month;
		$result['day'] = $day;
		$result['title'] = $title;
		$result['time'] = $date;

		//得到id
		$id = 0;
		$con = $time->query("select id from time");
		foreach ($con as $arr) {
			if($arr['id']>$id)
				$id = $arr['id'];
		}
		$id = $id+1;
		$result['id'] = $id;
		
		$flag = $time->add($result);
		if($flag){
			$this->success('添加成功','');
		}else{
			$this->erro('添加失败','');
		}
	}

	public function showManage(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$time = M('time');
		$result = $time->order('year desc,month desc')->select();
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$time = M('time');
		$id = I('get.id','','');
		$result = $time->find($id);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$time = M('time');

		$content = I('post.editorValue','','');
		$date = I('post.date','','');
		$title = I('post.title','','');

		$strs = explode('-',$date);
		$year = $strs[0];
		$month = $strs[1];
		$day = $strs[2];

		$result['content'] = $content;
		$result['id'] = I('post.id','','');
		$result['year'] = $year;
		$result['month'] = $month;
		$result['day'] = $day;
		$result['title'] = $title;
		$result['time'] = $date;

		$flag = $time->save($result);
		if($flag){
			$this->success('修改成功',U('Admin/Time/showManage'));
		}else{
			$this->erro('修改失败');
		}
		
	}

	public function delete(){
		$time = M('time');
		$id = I('get.id','','');

		$flag = $time->delete($id);
		if($flag){
			$this->success('删除成功',U('Admin/Time/showManage'));
		}else{
			$this->error('删除失败');
		}
	}
}