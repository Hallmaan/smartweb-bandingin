<?php

namespace App\Classes\Scraping;

class TokopediaScraping
{

    private $limit;
    private $max_harga;
    private $nama_barang;

    public function __construct(array $options = [])
    {
        $this->limit = $options['limit'];
        $this->nama_barang = $options['nama_barang'];
        $this->max_harga = $options['harga_maximum'];
    }

    private function http_request($url)
    {
        // persiapkan curl
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        // set user agent    
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // mengembalikan hasil curl
        return $output;
    }

    public function call()
    {
        $search = $this->nama_barang;
        $show_amount = $this->limit;
        // $location = 'jakarta';

        $search = str_replace(' ', '%20', $search);


        $url = "https://ta.tokopedia.com/promo/v1/display/ads?user_id=0&ep=product&item=" . $show_amount . "&src=search&device=desktop&page=2&pmax=" .$this->max_harga. "&q=" . $search . "&fshop=1";

        $data = $this->http_request($url);

        
        // ubah string JSON menjadi array
        $data = json_decode($data, TRUE);
        // dd($data);

        $arrayProduct = [];
        
        foreach($data['data'] as $key){
            $x['shop_click'] = $key['shop_click_url'];
            $x['product_wishlist_url'] = $key['product_wishlist_url'];
            $x['product_click_url'] = $key['product']['uri'];
            $x['product_name'] = $key['product']['name'];
            $x['product_uri'] = $key['product']['uri'];
            $x['product_img_url'] = $key['product']['image']['ms_ecs'];
            $x['product_price_format'] = $key['product']['price_format'];
            $x['shop_location'] = $key['shop']['location'];
            $x['shop_name'] = $key['shop']['name'];
            $x['site_category_id'] = 1;
            $arrayProduct[] = $x;
        }

        return $arrayProduct;
    }
}