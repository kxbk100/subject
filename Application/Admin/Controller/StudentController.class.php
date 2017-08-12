<?php
namespace Admin\Controller;
use Think\Controller;
class StudentController extends Controller {
	public function showAdd(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$this->assign('name',I('session.name','',''));
		$this->display();
	}
	public function add(){
		$student = M('student');
		$result = $student->create();
		$content = I('post.editorValue','','');
		$result['content'] = $content;
		$result['photoName'] = $_FILES['titlePhoto']['name'];

		//加入时间
		date_default_timezone_set('PRC');
		$time = date("Y-m-d H:i:s");
		$result['time'] = $time;

		//得到id
		$id = 0;
		$con = $student->query("select id from student");
		foreach ($con as $arr) {
			if($arr['id']>$id)
				$id = $arr['id'];
		}
		$id = $id+1;
		$result['id'] = $id;

		//thinkphp上传类
		$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
   		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->rootPath  =     './Public/Uploads/student/'; // 设置附件上传根目录
    	//$upload->savePath  =     '/subject/Public/admin/images/titlePhoto/'; // 设置附件上传（子）目录
		$upload->saveName = time().'_'.mt_rand();

    	// 上传文件 
    	$info   =   $upload->uploadone($_FILES['titlePhoto']);
    	if(!$info) {// 上传错误提示错误信息
        	$this->error($upload->getError());
    	}else{// 上传成功
			//生成缩略图
		   	$name = $upload->rootPath.$info['savepath'].$info['savename'];//从上传文件暂存目录下读取文件  
	        $image = new \Think\Image();   
	        $image->open($name);//生成缩略图  
	        $image->thumb(263, 217,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Uploads/student/small_images/'.$info['savename']);

    		$result['titlePhoto'] = C('UPLOADS').'student/'.$info['savepath'].$info['savename'];
    		$result['small_path'] = C('UPLOADS').'student/small_images/'.$info['savename'];
    		//var_dump($result);
    		$student->add($result);
       		$this->success('添加成功！',C('GOTO').'Admin/Student/showManage');
    	}
	}

	public function showManage(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$student = M('student');
		$result = $student->select();
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$student = M('student');
		$id = I('get.id','','');
		$result = $student->find($id);
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$student = M('student');

		//获取旧的标题图片的地址
		$id = I('post.id','','');
		$old = $student->find($id);
		$oldPath = $old['titlephoto'];
		$oldSmall = $old['small_path'];

		$result = $student->create();
		$content = I('post.editorValue','','');
		$result['content'] = $content;

		date_default_timezone_set('PRC');
		$time = date("Y-m-d H:i:s");
		$result['time'] = $time;

		if($_FILES['titlePhoto']['error']==0){
			//thinkphp上传类
			$upload = new \Think\Upload();// 实例化上传类
    		$upload->maxSize   =     3145728 ;// 设置附件上传大小
   			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    	$upload->rootPath  =     './Public/Uploads/student/'; // 设置附件上传根目录
	    	//$upload->savePath  =     '/subject/Public/admin/images/titlePhoto/'; // 设置附件上传（子）目录
			$upload->saveName = time().'_'.mt_rand();

    		// 上传文件 
    		$info   =   $upload->uploadone($_FILES['titlePhoto']);
    		if(!$info) {// 上传错误提示错误信息
        		$this->error($upload->getError());
    		}else{// 上传成功
				//生成缩略图
			   	$name = $upload->rootPath.$info['savepath'].$info['savename'];//从上传文件暂存目录下读取文件  
		        $image = new \Think\Image();   
		        $image->open($name);//生成缩略图  
	        	$image->thumb(263, 217,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Uploads/student/small_images/'.$info['savename']);

    			$result['photoName'] = $_FILES['titlePhoto']['name'];
	    		$result['titlePhoto'] = C('UPLOADS').'student/'.$info['savepath'].$info['savename'];
	    		$result['small_path'] = C('UPLOADS').'student/small_images/'.$info['savename'];

    			//var_dump($result);
    			$flag = $student->save($result);
				if($flag){

				}else{
					$this->erro('修改失败','');
				}
				unlink(str_replace('/subject/','./',$oldSmall));
    			unlink(str_replace('/subject/','./',$oldPath));
				$this->success('修改成功',U('Admin/Student/showManage'));
    		}
		}elseif($_FILES['titlePhoto']['error']==4){
			$flag = $student->save($result);
			$this->success('修改成功',U('Admin/Student/showManage'));
		}else{
			$this->erro('文件上传出错');
		}

	}

	public function delete(){
		$student = M('student');
		$id = I('get.id','','');

		//获取旧的标题图片的地址
		$old = $student->find($id);
		$oldPath = $old['titlephoto'];
		$oldSmall = $old['small_path'];

		$flag = $student->delete($id);
		if($flag){
			unlink(str_replace('/subject/','./',$oldSmall));
    		unlink(str_replace('/subject/','./',$oldPath));
			$this->success('删除成功',U('Admin/Student/showManage'));
		}else{
			$this->error('删除失败');
		}
	}

}