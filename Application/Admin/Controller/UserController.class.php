<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
		public function login(){

       		 	$account=I('post.account','','');  
       			$password=I('post.password','','');
       			if($account == "")  
        		{     
            		$this->error('账号为空');     
        		} 
	
        		else if($password == "")  
        		{  
          			$this->error('密码为空');
        		}
	
        		else  
        		{
        			$user = M('user');
					$condition['account'] = $account;
					$result = $user->where($condition)->select();

            		if(is_null($result[0]))  
                	{   
                    	$this->error('账号不存在');      
                	}
			 
            		else  
		    		{
				     	if($result[0]['password']===md5($password))
                		{
							$_SESSION['account']=$account;
							$_SESSION['name']=$result[0]['name'];
							//$today = $obj->getTime();
							$this->success('登录成功',U('Admin/Index/showAdmin'));

                		}else{
				    		$this->error('密码错误!!!');		 
                		}
		    		}
        		}

		}

		public function logout(){
			session(null);
			$this->success('注销成功',U('Admin/Index/index'));
		}
}