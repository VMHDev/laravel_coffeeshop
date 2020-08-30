<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class thaydoiComposer
{
	public function sua(View $view)
	{//
		$id = $view->getdata()['du'];
		var_dump($id);
		die;
		$douong = DB::table('douong')
			->where('douong.IDDoUong', '=', $id)
			->join ('loaidouong', 'douong.IDLoaiDoUong', 'loaidouong.IDLoaiDoUong')
			->select('douong.*' , 'loaidouong.TenDoUong as TenLoai')
			->get();
		$view->with('douongcansua', $douong);
	}
	public function thaydoi(View $view)
	{//
		$douong = DB::table('douong')
			->join ('loaidouong', 'douong.IDLoaiDoUong', 'loaidouong.IDLoaiDoUong')
			->select('douong.*' , 'loaidouong.TenDoUong as TenLoai')
			->get();
		$view->with('douong', $douong);
	}
}