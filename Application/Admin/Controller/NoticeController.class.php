<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {

	public function showAdd(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$this->assign('name',I('session.name','',''));
		$this->display();
	}
		
	public function add(){
		$notice = M('notice');
		$result = $notice->create();
		$content = I('post.editorValue','','');
		$istop = I('post.first','','');
		$type = I('post.type','','');

		$result['content'] = $content;
		$result['istop'] = $istop;
		$result['type'] = $type;
		//得到id
		$id = 0;
		$con = $notice->query("select id from notice");
		foreach ($con as $arr) {
			if($arr['id']>$id)
				$id = $arr['id'];
		}
		$id = $id+1;
		$result['id'] = $id;

		date_default_timezone_set('PRC');
		$time = date("Y-m-d H:i:s");
		$result['time'] = $time;

		//获得月和日
		$time = str_replace(" ", "-", $time);
		$date = explode('-',$time);
		$month = $date[1];
		$day = $date[2];
		$result['month'] = $month;
		$result['day'] = $day;

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
		$notice = M('notice');
		$result = $notice->select();
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$notice = M('notice');
		$id = I('get.id','','');
		$result = $notice->find($id);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$notice = M('notice');
		$result = $notice->create();
		$content = I('post.editorValue','','');
		$istop = I('post.first','','');
		$type = I('post.type','','');

		$result['content'] = $content;
		$result['istop'] = $istop;
		$type['type'] = $type;

		date_default_timezone_set('PRC');
		$time = date("Y-m-d H:i:s");
		$result['time'] = $time;

		//获得月和日
		$time = str_replace(" ", "-", $time);
		$date = explode('-',$time);
		$month = $date[1];
		$day = $date[2];
		$result['month'] = $month;
		$result['day'] = $day;
		
		$flag = $notice->save($result);

		if($flag){
			$this->success('修改成功',U('Admin/Notice/showManage'));
		}else{
			$this->erro('修改失败');
		}

	}

	public function delete(){
		$notice = M('notice');
		$id = I('get.id','','');
		$flag = $notice->delete($id);
		if($flag){
			$this->success('删除成功',U('Admin/Notice/showManage'));
		}else{
			$this->error('删除失败');
		}
	}

}