<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 11/30/2016
 * Time: 10:33 AM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class timkiemController extends Controller
{
    /*public function index(Request $request)
    {
        $q=$request->input('q');
        return view('Search.index',['q'=>$q]);
    }*/

    /*public function index($q)
    {
        return view('Search.index',['q'=>$q]);
    }*/
    /* để lấy được thông tin đối tượng, ta phải truyền đối tượng request vào bên trong */
    public function index(Request $request)
    {
        $ten = $request->input('ten');
        $loai = $request->input('loai');
        $giatu = $request->input('giatu');
        $giaden = $request->input('giaden');
        if ($giaden == null) {
            $giaden = 999999;
        }
        if ($giatu == null) {
            $giatu= 0;
        }
        if ($giaden == 30001) {
            $giatu = $giaden;
            $giaden = 999999;
        }
        $douong = DB::table('douong')
            ->where([['IDLoaiDoUong','like', '%' . $loai .'%'],['TenDoUong', 'like', '%' . $ten . '%'], ['GiaTien', '>=', $giatu], ['GiaTien', '<', $giaden]])
            ->paginate(5);

        //Câu truy vấn trong MySQL: SELECT * FROM banhangcf.douong where tenDoUong like "%berry%";

        /*Mẫu:
        $results = DB::table('users')
        ->where($column, 'LIKE', '%' . $value . '%')
        ->get();
        */
        return view('/search',['douong' => $douong]);
    }
}