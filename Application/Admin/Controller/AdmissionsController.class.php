<?php
namespace Admin\Controller;
use Think\Controller;
class AdmissionsController extends Controller {

    public function showAdd(){
        if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
            $this->error('非法进入',U('Admin/Index/index'));
        }
        $this->assign('name',I('session.name','',''));
        $this->display();
    }
        
    public function add(){
        $admissions = M('admissions');
        $result = $admissions->create();
		$result['content'] = I('post.editorValue','','');
	
        //得到id
		$id = $admissions->max('id')+1;
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
        
        $flag = $admissions->add($result);
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
        $admissions = M('admissions');
        $result = $admissions->select();
        //var_dump($result);
        $this->assign('name',I('session.name','',''));
        $this->assign('result',$result);
        $this->display();
    }

    public function showModify(){
        if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
            $this->error('非法进入',U('Admin/Index/index'));
        }
        $admissions = M('admissions');
        $id = I('get.id','','');
        $result = $admissions->find($id);
        $this->assign('name',I('session.name','',''));
        $this->assign('result',$result);
        $this->display();
    }

    public function modify(){
        $admissions = M('admissions');
        $result = $admissions->create();
        $content = I('post.editorValue','','');

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
        
        $flag = $admissions->save($result);
        if($flag){
            $this->success('修改成功',U('Admin/Admissions/showManage'));
        }else{
            $this->erro('修改失败');
        }


    }

    public function delete(){
        $admissions = M('admissions');
        $id = I('get.id','','');
        $flag = $admissions->delete($id);
        if($flag){
            $this->success('删除成功',U('Admin/Notice/showManage'));
        }else{
            $this->error('删除失败');
        }
    }
}