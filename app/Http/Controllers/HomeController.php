<?php

namespace App\Http\Controllers;

use App\SiteCategory;
use App\Classes\Scraping\TokopediaScraping;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $r){
        // dd($r->all());
        $site_category = SiteCategory::all();
        $site_id = $r->site_id;
        $siteScraping = SiteCategory::findorfail($site_id);

        switch($site_id) {
            case 1:
                $site = new TokopediaScraping([
                    'limit' => $r->limit_data,
                    'nama_barang' => $r->nama_barang,
                ]);
                break;
            // case 2:
            //     $site = new BukalapakScraping([
            //         'limit' => $r->limit_data,
            //         'nama_barang' => $r->nama_barang,
            //     ]);
            //     break;
        }
        $x = [];

        $scrap_data['site_name'] = $siteScraping->name;
        $scrap_data['data_scrap'] = $site->call();
        
        $x[] = $scrap_data;
        
        return view('users.dashboard.index',['site' => $site_category, 'data' => $x, 'data_count' => $r->limit_data]);
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
