<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Permission;

class AdminBaseController extends Controller
{

	public function __construct(){
		//return $this->getMeunList();
	}

	// 获取菜单列表
	public function getMeunList() {
		$meunlist = Permission::with('childrenPid')->where('is_display','=','1')->where('pid','=','0')->orderBy('id')->orderBy('sort_order')->get();
		return $meunlist;
	}
}
