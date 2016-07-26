<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\AdminBaseController;

class AdminController extends AdminBaseController
{
	private $data;

	public function __construct(){
		$this->data['menus'] = $this->getMeunList()->toArray();
	}

	//获取管理员列表
	public function index() {
		$this->data['lists'] = Admin::all();
		return view('admin.admins.adminlist',$this->data);
	}
}
