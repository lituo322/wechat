<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools\Tools;
class EventController extends Controller
{
    public $tools;
    public $request;
	public function __construct(Tools $tools,Request $request){
		$this->tools=$tools;
		$this->request=$request;

	}
    //接受微信消息
    public function event(){
        echo $_GET['echostr'];
       //$info = file_get_contents("php://input");
        // file_put_contents(storage_path('logs/wechat/'.date('Y-m-d').'.log'),"<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n",FILE_APPEND);
        // file_put_contents(storage_path('logs/wechat/'.date('Y-m-d').'.log'),$info,FILE_APPEND);
       // $xml_obj = simplexml_load_string($info,'SimpleXMLElement',LIBXML_NOCDATA);
        // $xml_arr = (array)$xml_obj;
        // //关注操作
        // if($xml_arr['MsgType'] == 'event' && $xml_arr['Event'] == 'subscribe'){
        //     $wechat_user = $this->tools->get_wechat_user($xml_arr['FromUserName']);
        //     $msg = '你好'.$wechat_user['nickname'].'，欢迎关注我的公众号！';
        //     echo "<xml><ToUserName><![CDATA[".$xml_arr['FromUserName']."]]></ToUserName><FromUserName><![CDATA[".$xml_arr['ToUserName']."]]></FromUserName><CreateTime>".time()."</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[".$msg."]]></Content></xml>";

    }
}
