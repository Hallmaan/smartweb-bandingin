<?php

namespace App\Http\Controllers;

use App\SiteCategory;
use App\Classes\Scraping\TokopediaScraping;
use App\HistorySearch;
use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function history(Request $r, $user_id){
        $user = User::findorfail($user_id);

        $history = HistorySearch::where('user_id', Auth::user()->id)->get();
        
        return view('users.history.index', ['data' => $history]);
    }

    public function save_history(Request $r){

        $data = $r->scrap_data;
        $x = [];
        foreach($data as $key){
            $decoded = json_decode($key, true);
            $decoded['user_id'] = Auth::user()->id;
            $x[] = $decoded;
        }

        HistorySearch::insert($x);
        $site_category = SiteCategory::all();
        return redirect()->route('dashboard', ['site' => $site_category])->with('message', 'Berhasil menyimpan pencarian');
    }

    public function search(Request $r){
        // dd($r->all());
        $site_category = SiteCategory::all();
        $site_id = $r->site_id;
        $isTokped = false;
        $isBukalapak = false;
        
        foreach($site_id as $key){
            // dd($key);
            switch($key) {
                case 1:
                    $scrapTokped = new TokopediaScraping([
                        'limit' => $r->limit_data,
                        'nama_barang' => $r->nama_barang,
                        'harga_maximum' => $r->harga_maximum
                    ]);
                    $isTokped = true;
                    break;
                case 2:
                    $scrapBukalapak = '';
                    $isBukalapak = false;
                    break;
            }
        }

        $x = [];

        $scrap_data = [];

        
        $tokopedia = $isTokped == true ? $scrapTokped->call() : [];
        $bukapalak = $isBukalapak == true ? $scrapBukalapak : [];

        $scrap_data_tokped['site_name'] = 'Tokopedia';
        $scrap_data_tokped['data_scrap'] = $tokopedia;

        $scrap_data_bl['site_name'] = 'Bukalapak';
        $scrap_data_bl['data_scrap'] = $bukapalak;

        if($isTokped){
            array_push($scrap_data, $scrap_data_tokped);
        }if($isBukalapak){
            array_push($scrap_data, $scrap_data_bl);
        }


        $x[] = $scrap_data;
        
        return view('users.dashboard.index',['site' => $site_category, 'data' => $scrap_data, 'data_count' => $r->limit_data]);
    }


    public function home()
    {
        $site_category = SiteCategory::all();
        // dd($site_category);
        return view('users.dashboard.index',['site' => $site_category]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
