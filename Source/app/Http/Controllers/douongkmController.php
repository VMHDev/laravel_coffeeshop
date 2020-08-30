<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\ViewComposers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class douongkmController extends Controller
{
    public function chitiet($iddouong, $idctkm)
    {
        $tuongtu = DB::table('douongkm')
            ->join ('douong', 'douongkm.IDDoUongKM', 'douong.IDDoUong')
            ->take(3)
            ->get();
        $douong = DB::table('douongkm')
            ->join ('douong', 'douongkm.IDDoUongKM', 'douong.IDDoUong')
            ->where([['douong.IDDoUong', '=', $iddouong], ['douongkm.IDCTKM', '=', $idctkm]])
            ->get();
        $douongtb = DB::table('douong')
            ->join('douongtb', 'douong.IDDoUong', 'douongtb.IDDoUongTB')
            ->where('douong.IDDoUong', '=', $iddouong)
            ->paginate(2);
        return view('details_km', ['douong' => $douong, 'tuongtu' => $tuongtu, 'douongtb' => $douongtb]);
    }
}