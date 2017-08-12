<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends Controller {
	public function showModify(){
		if(is_null(I('session.name','',''))||(I('session.name','','')=='')){
			$this->error('非法进入',U('Admin/Index/index'));
		}
		$picture = M('picture');
		$result = $picture->select();

		$this->assign('name',I('session.name','',''));
		$this->assign('result',$result);
		$this->display();
	}

	public function modify(){
		$picture = M('picture');
		for($i=0;$i<3;$i++){
			$old = $picture->find($i+1);
			if($_FILES['picture'.($i+1)]['error']==0){
				//thinkphp上传类
				$upload = new \Think\Upload();// 实例化上传类
		    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
		   		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    	$upload->rootPath  =     './Public/Uploads/picture/'; // 设置附件上传根目录
				$upload->saveName = time().'_'.mt_rand();

		    	// 上传文件 
		    	$info   =   $upload->uploadone($_FILES['picture'.($i+1)]);

		    	if(!$info) {// 上传错误提示错误信息
		        	$this->error($upload->getError());
		    	}else{// 上传成功

		    		//生成缩略图
				   	/*$name = $upload->rootPath.$info['savepath'].$info['savename'];//从上传文件暂存目录下读取文件  
			        $image = new \Think\Image();   
			        $image->open($name);//生成缩略图  
			        $image->thumb(102, 142,\Think\Image::IMAGE_THUMB_FIXED)->save('./Public/Uploads/picture/small_images/'.$info['savename']);*/

			        $result[$i]['photoName'] = $_FILES['picture'.($i+1)]['name'];
			        $result[$i]['id'] = ($i+1);
			        $result[$i]['description'] = I('post.description'.($i+1),'','');
		    		$result[$i]['path'] = C('UPLOADS').'picture/'.$info['savepath'].$info['savename'];
		    		//$result[$i]['small_path'] = C('UPLOADS').'picture/small_images/'.$info['savename'];

		    		$flag = $picture->save($result[$i]);
		    		if(!$flag){
						$this->error('修改失败','');
		    		}else{
			    		unlink(str_replace('/subject/','./',$old['small_path']));
		    			unlink(str_replace('/subject/','./',$old['path']));
		    		}

		    	}
	    	}elseif($_FILES['picture'.($i+1)]['error']==4){
	    		$result[$i]['id'] = ($i+1);
			    $result[$i]['description'] = I('post.description'.($i+1),'','');
		    	//var_dump($result);
		    	$picture->save($result[$i]);
			}else{
				$this->error('文件上传出错');
			}
		}
		$this->success('修改成功');

	}

}