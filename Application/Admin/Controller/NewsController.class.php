<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {

	public function showAdd(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$this->assign('name',I('session.name','',''));
		$this->display();
	}

	public function add(){
		$news = M('news');
		$result = $news->create();
		$content = I('post.editorValue','','');
		$istop = I('post.first','','');

		$result['content'] = $content;
		$result['photoName'] = $_FILES['titlePhoto']['name'];
		$result['istop'] = $istop;

		//得到id
		$id = 0;
		$con = $news->query("select id from news");
		foreach ($con as $arr) {
			if($arr['id']>$id)
				$id = $arr['id'];
		}
		$id = $id+1;
		$result['id'] = $id;

		//加入时间
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

		if($_FILES['titlePhoto']['error']==0){
			//thinkphp上传类
			$upload = new \Think\Upload();// 实例化上传类
	    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
	   		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    	$upload->rootPath  =     './Public/Uploads/titlePhoto/'; // 设置附件上传根目录
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
		        $image->thumb(375, 250,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Uploads/titlePhoto/small_images/'.$info['savename']);

	    		$result['titlePhoto'] = C('UPLOADS').'titlePhoto/'.$info['savepath'].$info['savename'];
	    		$result['small_path'] = C('UPLOADS').'titlePhoto/small_images/'.$info['savename'];

	    		$news->add($result);
	       		$this->success('添加成功！',C('GOTO').'Admin/News/showManage');
	    	}
    	}elseif($_FILES['titlePhoto']['error']==4){
	    	$result['titlePhoto'] = C('UPLOADS').'titlePhoto/default/default.png';
	    	$result['small_path'] = C('UPLOADS').'titlePhoto/small_images/default/default.png';
	    	$result['is_default'] = 1;
	    	//var_dump($result);
	    	$news->add($result);
       		$this->success('添加成功！',C('GOTO').'Admin/News/showManage');
		}else{
			$this->erro('文件上传出错');
		}

	}

	public function showManage(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$news = M('news');
		$result = $news->order('time desc')->select();
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		//var_dump($result);
		$this->display();
	}

	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$news = M('news');
		$id = I('get.id','','');
		$result = $news->find($id);
		//var_dump($result);
		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$news = M('news');

		//获取旧的标题图片的地址
		$id = I('post.id','','');
		$old = $news->find($id);
		$oldPath = $old['titlephoto'];
		$oldSmall = $old['small_path'];

		$result = $news->create();
		$content = I('post.editorValue','','');
		$istop = I('post.first','','');

		$result['content'] = $content;
		$result['istop'] = $istop;

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

		if($_FILES['titlePhoto']['error']==0){
			//thinkphp上传类
			$upload = new \Think\Upload();// 实例化上传类
    		$upload->maxSize   =     3145728 ;// 设置附件上传大小
   			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    	$upload->rootPath  =     './Public/Uploads/titlePhoto/'; // 设置附件上传根目录
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
		        $image->thumb(375, 250,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Uploads/titlePhoto/small_images/'.$info['savename']);

    			$result['photoName'] = $_FILES['titlePhoto']['name'];
    			$result['titlePhoto'] = C('UPLOADS').'titlePhoto/'.$info['savepath'].$info['savename'];
	    		$result['small_path'] = C('UPLOADS').'titlePhoto/small_images/'.$info['savename'];
	    		$result['is_default'] = 0;
    			//var_dump($result);
    			$flag = $news->save($result);
				if($flag){

				}else{
					$this->erro('修改失败','');
				}
				if($old['is_default']==0){
					unlink(str_replace('/subject/','./',$oldSmall));
	    			unlink(str_replace('/subject/','./',$oldPath));
	    		}
				$this->success('修改成功',U('Admin/News/showManage'));
    		}
		}elseif($_FILES['titlePhoto']['error']==4){
			$flag = $news->save($result);
			$this->success('修改成功',U('Admin/News/showManage'));
		}else{
			$this->erro('文件上传出错');
		}


	}

	public function delete(){
		$news = M('news');
		$id = I('get.id','','');

		//获取旧的标题图片的地址
		$old = $news->find($id);
		$oldPath = $old['titlephoto'];
		$oldSmall = $old['small_path'];

		$flag = $news->delete($id);
		if($flag){
			if($old['is_default']==0){
				unlink(str_replace('/subject/','./',$oldSmall));
				unlink(str_replace('/subject/','./',$oldPath));
			}
			$this->success('删除成功',U('Admin/News/showManage'));
		}else{
			$this->error('删除失败');
		}
	}

}