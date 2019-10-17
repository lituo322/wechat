<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Tool\Wechat;
use Illuminate\Support\Facades\Cache;
use DB;
class WechatController extends Controller
{
	
	public function indexa()
	{
       $key="wechat_access_token";
       //判断缓存是否存在
       if (Cache::has($key)) {
       		// 取缓存
       		$wechat_access_token=Cache::get($key);
       }else{
       	//取不到，调接口，缓存
       		$re=file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxdfbf1a2f4a1ae73a&secret=6852862ef51147030ab56877aa5fe85d');
       		$resurl=json_decode($re,1);
       		Cache::put($key,$resurl['access_token'],$resurl['expires_in']);
       		$wechat_access_token=$resurl['access_token'];
       }
       return $wechat_access_token; 
	}

    //获取用户信息
	public function wechat_add(){
		$token=$this->indexa();
		$data=file_get_contents('https://api.weixin.qq.com/cgi-bin/user/get?access_token='.$token.'&next_openid=');
		$user=json_decode($data,1);
		$dtinfo=[];
		foreach($user['data']['openid'] as $v){
              $userinfo=file_get_contents('https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$token.'&openid='.$v.'&lang=zh_CN');
              $dtinfo[]=json_decode($userinfo,1);

	     }
	     //dd($dtinfo);
	    return view('wechat_list',['dtinfo'=>$dtinfo]);
	}

	//网页授权
	public function wechat_login(){
		$a = "www.lt322.cn/wechat_login";
		$a = urlencode($a);
		//dd($a);
		$code=redirect("https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdfbf1a2f4a1ae73a&redirect_uri=http://www.lt322.cn%2Fwechat_login&response_type=code&scope=snsapi_userinfo&state=#wechat_redirect");
		//dd($code);
		return $code;
	}
    //get请求
    public function get(){
       $url="http://www.baidu.com";
       $curl=curl_init($url);
       curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
       $result = curl_exec($curl);
       var_dump($result);
       curl_close($curl);
    }
  //post请求
    public function post(){
    	$url="http://www.baidu.com";
    	$curl=curl_init($url);
    	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    	curl_setopt($curl,CURLOPT_POST,true);
    	$post_data=[
              'name'=>222
    	];
    	curl_setopt($curl,CURLOPT_POSTFIELDS,$post_data);
    	$result=curl_exec($curl);
    	var_dump($result);
    	curl_close($curl);
    }

    public function aadd(){
      
    }
} 