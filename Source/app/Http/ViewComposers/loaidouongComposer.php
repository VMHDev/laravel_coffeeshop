<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class loaidouongComposer
{
    public function compose(View $view)
    {
		$loaidouong = DB::select('select * from loaidouong');
        $view->with('loaidouong', $loaidouong);
    }
    public function loai(View $view)
    {
    	$loai = $view->getdata()['IDLoaiDoUong'];
		$loaidouong = DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $loai)
			->get();
        $view->with('loaidouong', $loaidouong);
    }
}