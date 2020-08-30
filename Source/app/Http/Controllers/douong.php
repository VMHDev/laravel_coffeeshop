<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\ViewComposers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class douong extends Controller
{
	public function theoloaiL($idLoai)
	{
		$loaidouong = DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $idLoai)
			->get();
		$douong = DB::table('douong')
			->where ('douong.IDLoaiDoUong', '=', $idLoai)
			->paginate(2);
		return view('category-list', ['douong' => $douong, 'loaidouong' => $loaidouong]);
	}

	public function theoloaiG($idLoai)
	{
		$loaidouong = DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $idLoai)
			->get();
		$douong = DB::table('douong')
			->where ('douong.IDLoaiDoUong', '=', $idLoai)
			->paginate(2);
		return view('category-grid', ['douong' => $douong, 'loaidouong' => $loaidouong]);
	}
	public function chitiet($idLoai, $iddouong, $user)
	{
		$tuongtu = DB::table('douong')
			->where ('douong.IDLoaiDoUong', '=', $idLoai)
			->take(3)
			->get();
		$douong = DB::table('douong')
			->where('douong.IDDoUong', '=', $iddouong)
			->get();
		$hinhdaidien = DB::table('hinhdaidien')
			->where('hinhdaidien.IDDoUong', '=', $iddouong)
			->get();
		$solan = 0;
		if ($user != 0)
		{
			DB::table('solan')->insert([
				'IDDoUong' => $iddouong, 'IDUser' => $user
			]);
			$solan = DB::table('solan')
				->select(DB::raw('count(IDUser) as sl'))
				->where([['solan.IDDoUong', '=', $iddouong], ['solan.IDUser', $user]])
				->get();
		}
		$douongtb = DB::table('douong')
			->join('douongtb', 'douong.IDDoUong', 'douongtb.IDDoUongTB')
			->where('douong.IDDoUong', '=', $iddouong)
			->paginate(2);
		return view('details', ['douong' => $douong, 'tuongtu' => $tuongtu, 'douongtb' => $douongtb, 'solan' => $solan, 'hinhdaidien' => $hinhdaidien]);
	}
}