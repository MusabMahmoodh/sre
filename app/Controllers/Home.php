<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
    {
		helper("array");
	}
	
	public function index()
	{
		auth_rd();
		return $this->response->redirect(base_url('/account/list_all'));
		//return view('dashboard/project');
	}
}
