<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UnitRumah;
class ProductController extends Controller
{
    function CreateUnit(){
        $eloq = new UnitRumah;
		$eloq->kavling = '3';
		$eloq->blok = '3';
        $eloq->no_rumah = '3';
        $eloq->harga_rumah = 125000;
        $eloq->luas_tanah = 100;
        $eloq->luas_bangunan = 75;
        $eloq->customerid = 1;
		$eloq->save();
    }
    function DeleteUnit(){
        $rawsql = DB::delete('delete from unit_rumahs');
    }
}