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

    public function event(){
     $xml_string = file_get_contents('php://input'); //获取

    }
}
