<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class loaidouongController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index()
	{
		$loaidouong = DB::table('loaidouong')
			->get();
		return view('loaidouong.index', ['loaidouong' => $loaidouong]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view("loaidouong.thaydoi");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$id = $request->input('id');
		$trung = null;
		$trung = DB::table('loaidouong')
			->where ('loaidouong.IDLoaiDouong', '=', $id)
			->get();
		if (sizeof($trung) != 0)
			return view("admin.thongbao", ['ketqua' => 'Thêm không thành công! vui lòng kiểm tra lại!']);
		$ten = $request->input('ten');
		$filedd = $request->file('anhdaidien');
		$daidien = null;
		if ($filedd != null)
		{
			$duongdan = '/images/upload/anhdaidienldu/';
			$duongdan1 = 'images/upload/anhdaidienldu/';
			$tenhinh = $id . '.' . $filedd->getClientOriginalExtension();
			$filedd->move(public_path() . $duongdan, $tenhinh);
			$daidien = $duongdan1 . $tenhinh;
		}
		DB::table('loaidouong')->insert([
			'IDLoaiDoUong' => $id, 'TenDoUong' => $ten, 'idDaiDien' => $daidien]);
		return view("admin.thongbao", ['ketqua' => 'Thêm thành công!']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$trung = null;
		$trung = DB::table('loaidouong')
			->where ('loaidouong.IDLoaiDouong', '=', $id)
			->get();
		if (sizeof($trung) == 0)
			return view("admin.thongbao", ['ketqua' => 'Cập nhật không thành công! vui lòng kiểm tra lại!']);
		$ten = $request->input('ten');
		$filedd = $request->file('anhdaidien');
		if ($filedd != null)
		{
			$duongdan = '/images/upload/anhdaidienldu/';
			$duongdan1 = 'images/upload/anhdaidienldu/';
			$tenhinh = $id . '.' . $filedd->getClientOriginalExtension();
			$filedd->move(public_path() . $duongdan, $tenhinh);
			$daidien = $duongdan1 . $tenhinh;
			DB::table('loaidouong')
				->where('loaidouong.IDLoaiDoUong', '=', $id)
				->update([
				'TenDoUong' => $ten, 'idDaiDien' => $daidien]);
		}
		else
		{
			DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $id)
			->update(['TenDoUong' => $ten]);
		}
		return view("admin.thongbao", ['ketqua' => 'Cập nhật thành công!']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$trung = null;
		$trung = DB::table('loaidouong')
			->where ('loaidouong.IDLoaiDouong', '=', $id)
			->get();
		if (sizeof($trung) == 0)
			return view("admin.thongbao", ['ketqua' => 'Xóa không thành công! vui lòng kiểm tra lại!']);
		DB::table('douongkm')
			->join('douong', 'douong.IDDoUong', 'douongkm.IDDoUongKM')
			->where('douong.IDLoaiDoUong', '=', $id)
			->delete();
		DB::table('douongtb')
			->join('douong', 'douong.IDDoUong', 'douongtb.IDDoUongTB')
			->where('douong.IDLoaiDoUong', '=', $id)
			->delete();
		DB::table('hinhdaidien')
			->join('douong', 'douong.IDDoUong', 'hinhdaidien.IDDoUong')
			->where('douong.IDLoaiDoUong', '=', $id)
			->delete();
		DB::table('douong')
			->where('douong.IDLoaiDoUong', '=', $id)
			->delete();
		DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $id)
			->delete();
		return view("admin.thongbao", ['ketqua' => 'Xóa thành công!']);
	}
}
