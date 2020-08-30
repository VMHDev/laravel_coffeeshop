<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class thongtintaikhoan extends Controller
{
	public function ten(Request $request, $id)
	{
		$ten = $request->input('tentk');
		DB::table('users')
			->where('users.id', '=', $id)
			->update(['name' => $ten]);
		return view("admin.thongbao", ['ketqua' => 'Đổi tên thành công!']);
	}
	public function matkhau(Request $request, $id)
	{
		$mkcc = DB::table('users')
			->where('id','=', $id)
			->pluck('password');
		$mkcu = '';
		foreach($mkcc as $mkccc)
		{
			$mkcu = $mkccc;
		}
		$mkc = $request->input('matkhaucu');
		$mk = $request->input('matkhaumoi');
		$nlmk = $request->input('nhaplaimatkhau');
		if ($mk != $nlmk)
			return view("admin.thongbao", ['ketqua' => 'Đổi mật khẩu không thành công!']);
		$check = crypt($mkc, $mkcu);
		if (hash_equals($check, $mkcu))
		{
			$pass = bcrypt($mk);
			DB::table('users')
			->where('users.id', '=', $id)
			->update(['password' => $pass]);
			return view("admin.thongbao", ['ketqua' => 'Đổi mật khẩu thành công!']);
		}
		else
			return view("admin.thongbao", ['ketqua' => 'Sai mật khẩu cũ!']);
	}
	public function nguoidung()
	{
		$nguoidung = DB::table('users')
			->get();
		return view("nguoidung.quanly", ['nguoidung' => $nguoidung]);
	}
	public function nguoidungsua(Request $request, $id)
	{
		$ten = $request->input('ten');
		$quyen = $request->input('quyen');
		$email = $request->input('email');
		DB::table('users')
			->where('users.id', '=', $id)
			->update(['name' => $ten, 'role' => $quyen, 'email' => $email]);
		return view("admin.thongbao", ['ketqua' => 'Cập nhật thành công!']);
	}
	public function nguoidungxoa($id, $admin)
	{
		if ($id === $admin)
			return view("admin.thongbao", ['ketqua' => 'Không thể xóa tài khoản hiện tại!']);
		DB::table('users')
			->where('users.id', '=', $id)
			->delete();
		return view("admin.thongbao", ['ketqua' => 'Đã xóa!']);
	}
	public function nguoidungthem(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');
		User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
		return view("admin.thongbao", ['ketqua' => 'Thêm thành công!']);
	}
}
