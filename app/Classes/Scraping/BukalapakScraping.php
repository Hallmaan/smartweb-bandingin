<?php

namespace App\Classes\Scraping;

class BukalapakScraping
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
        $accessToken = "R8QNHVyZnjkqvHknKo7gW_akpy8TmgGGBF8kQL2WX0-x0w";
        // $location = 'jakarta';

        $search = str_replace(' ', '%20', $search);

        $url = "https://api.bukalapak.com/multistrategy-products?prambanan_override=true&keywords=". $search ."&limit=". $show_amount ."&offset=0&page=1&facet=true&filter_non_popular_section=true&access_token=" . $accessToken;

        $data = $this->http_request($url);
        // dd($data);

        
        // ubah string JSON menjadi array
        $data = json_decode($data, TRUE);
        $sliced = array_slice($data['data'], 0, $show_amount);

        
        $arrayProduct = [];
        
        foreach($sliced as $key){
            $x['shop_click'] = '';
            $x['product_wishlist_url'] = '';
            $x['product_click_url'] = $key['url'];
            $x['product_name'] = $key['name'];
            $x['product_uri'] = $key['url'];
            $x['product_img_url'] = $key['images']['large_urls'][0];
            $x['product_price_format'] =  "Rp " . number_format($key['price'],2,',','.');
            $x['shop_location'] = $key['store']['address']['city'];
            $x['shop_name'] = $key['store']['name'];
            $x['site_category_id'] = 2;
            $arrayProduct[] = $x;
        }
        
        // dd($arrayProduct);
        return $arrayProduct;

        $data['site_name'] = 'Bukalapak';
        $data['data'] = $arrayProduct;

        return $data;
    }
}