<?php
namespace Admin\Controller;
use Think\Controller;
//栏目管理
class PassagesController extends Controller {

	public function showManage(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$passages = M('passages');
		$result = $passages->select();
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$passages = M('passages');
		$id = I('get.id','','');
		$result = $passages->find($id);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$passages = M('passages');
		$result = $passages->create();
		$content = I('post.editorValue','','');
		$result['content'] = $content;

		date_default_timezone_set('PRC');
		$time = date("Y-m-d H:i:s");

		$result['time'] = $time;

		$flag = $passages->save($result);

		if($flag){
			$this->success('修改成功',U('Admin/passages/showManage'));
		}else{
			$this->erro('修改失败');
		}
	}

}