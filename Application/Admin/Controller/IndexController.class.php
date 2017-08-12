<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
		public function index(){
			if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
				$this->display();
			}else{
				$this->redirect('Admin/Index/showAdmin');
			}
		}

		public function showAdmin(){
			if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
				$this->error('非法进入',U('Admin/Index/index'));
			}
			$this->assign('name',I('session.name','',''));
			$this->display();
		}
}