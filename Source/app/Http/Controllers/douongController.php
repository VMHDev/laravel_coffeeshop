<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class douongController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index()
	{
		$loaidouong = DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', '0')
			->get();
		$loai = DB::table('loaidouong')
			->get();
		$douong = DB::table('douong')
			->where ('douong.IDLoaiDoUong', '=', '0')
			->get();
		return view('douong.index', ['douong' => $douong, 'loaidouong' => $loaidouong, 'loai' => $loai]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

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
		$trung = DB::table('douong')
			->where ('douong.IDDouong', '=', $id)
			->get();
		if (sizeof($trung) != 0)
			return view("admin.thongbao", ['ketqua' => 'Thêm không thành công! vui lòng kiểm tra lại!']);
		$ten = $request->input('ten');
		$mota = $request->input('mota');
		$loai = $request->input('loai');
		$giatien = $request->input('giatien');
		$file = $request->file('hinhanh');
		$filedd = $request->file('anhdaidien');
		$hinhanh = null;
		$daidien = null;
		if ($file != null)
		{
			$duongdan = '/images/upload/';
			$duongdan1 = 'images/upload/';
			$tenhinh = $id . '.' . $file->getClientOriginalExtension();
			$file->move(public_path() . $duongdan, $tenhinh);
			$hinhanh = $duongdan1 . $tenhinh;
		}
		if ($filedd != null)
		{
			$duongdan = '/images/upload/anhdaidien/';
			$duongdan1 = 'images/upload/anhdaidien/';
			$tenhinh = $id . '.' . $filedd->getClientOriginalExtension();
			$filedd->move(public_path() . $duongdan, $tenhinh);
			$daidien = $duongdan1 . $tenhinh;
		}
		DB::table('douong')->insert([
			'IDDoUong' => $id, 'TenDoUong' => $ten, 'MoTa' => $mota, 'IDHinhAnh' => $hinhanh, 'IDLoaiDoUong' =>$loai, 'GiaTien' => $giatien 
		]);
		DB::table('hinhdaidien')->insert([
				'IDDoUong' => $id, 'DuongDan' => $daidien]);
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
		$trung = DB::table('douong')
			->where ('douong.IDDouong', '=', $id)
			->get();
		if (sizeof($trung) == 0)
			return view("admin.thongbao", ['ketqua' => 'Cập nhật không thành công! vui lòng kiểm tra lại!']);
		$ten = $request->input('ten');
		$mota = $request->input('mota');
		$loai = $request->input('loai');
		$giatien = $request->input('giatien');
		$file = $request->file('hinhanh');
		$filedd = $request->file('anhdaidien');
		if ($filedd != null)
		{
			$duongdan = '/images/upload/anhdaidien/';
			$duongdan1 = 'images/upload/anhdaidien/';
			$tenhinh = $id . '.' . $filedd->getClientOriginalExtension();
			$filedd->move(public_path() . $duongdan, $tenhinh);
			$daidien = $duongdan1 . $tenhinh;
			DB::table('douong')
			->where('douong.IDDoUong', '=', $id)
			->update(['TenDoUong' => $ten, 'MoTa' => $mota, 'DuongDan' => $daidien, 'IDLoaiDoUong' => $loai, 'GiaTien' => $giatien]);
		}
		if ($file != null)
		{
			$duongdan = '/images/upload/';
			$duongdan1 = 'images/upload/';
			$tenhinh = $id . '.' . $file->getClientOriginalExtension();
			$file->move(public_path() . $duongdan, $tenhinh);
			$hinhanh = $duongdan1 . $tenhinh;
			DB::table('douong')
			->where('douong.IDDoUong', '=', $id)
			->update(['TenDoUong' => $ten, 'MoTa' => $mota, 'IDHinhAnh' => $hinhanh, 'IDLoaiDoUong' => $loai, 'GiaTien' => $giatien]);
		}
		else
		{
			DB::table('douong')
			->where('douong.IDDoUong', '=', $id)
			->update(['TenDoUong' => $ten, 'MoTa' => $mota, 'IDLoaiDoUong' => $loai, 'GiaTien' => $giatien]);
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
		$trung = DB::table('douong')
			->where ('douong.IDDouong', '=', $id)
			->get();
		if (sizeof($trung) == 0)
			return view("admin.thongbao", ['ketqua' => 'Xóa không thành công! vui lòng kiểm tra lại!']);
		DB::table('douongkm')
			->where('douongkm.IDDoUongKM', '=', $id)
			->delete();
		DB::table('douong')
			->where('douong.IDDoUong', '=', $id)
			->delete();
		return view("admin.thongbao", ['ketqua' => 'Xóa thành công!']);
	}
	public function loai($idLoai)
	{
		$loaidouong = DB::table('loaidouong')
			->where('loaidouong.IDLoaiDoUong', '=', $idLoai)
			->get();
		$loai = DB::table('loaidouong')
		
		->get();
		$douong = DB::table('douong')
			->where ('douong.IDLoaiDoUong', '=', $idLoai)
			->get();
		return view('douong.admin', ['douong' => $douong, 'loaidouong' => $loaidouong, 'loai' => $loai]);
	}
	public function binhluan(Request $request, $id)
	{
		$ten = $request->input('tenbl');
		$ykien = $request->input('ykienbl');
		DB::table('douongtb')->insert([
			'IDDoUongTB' => $id, 'DanhGia' => $ykien, 'UserName' => $ten]);
		return view("admin.thongbao", ['ketqua' => 'Đánh giá thành công!']);
	}
}
