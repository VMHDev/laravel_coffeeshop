<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class douongComposer
{
	public function khuyenmai(View $view)
	{
		$khuyenmai = DB::table('douongkm')
			->join ('ctkm', 'douongkm.IDCTKM', 'ctkm.IDCTKM')
			->join ('douong', 'douongkm.IDDoUongKM', 'douong.IDDoUong')
			->paginate(2);
		$view->with('khuyenmai', $khuyenmai);
	}

	public function banchaynhat(View $view)
	{
		$banchaynhat = DB::table('chitietgiohang')
			->join('douong', 'chitietgiohang.iddouong', 'douong.iddouong')
			->take(1)
			->get();
		$view->with('banchaynhat', $banchaynhat);
	}
}