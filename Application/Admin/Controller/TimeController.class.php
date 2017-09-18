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
		$result = $time->create();
		$content = I('post.editorValue','','');
		$result['content'] = $content;

		//得到id
		$id = 0;
		$con = $time->query("select id from time");
		foreach ($con as $arr) {
			if($arr['id']>$id)
				$id = $arr['id'];
		}
		$id = $id+1;
		$result['id'] = $id;

		$flag = $notice->add($result);
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

	}

	public function modify(){

	}

	public function delete(){

	}
}