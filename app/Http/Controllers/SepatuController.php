<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu_m;

class SepatuController extends Controller
{
    var $data;
    
    public function __construct()
    {
        $this->data['opt_brand']= [
            '' => '-Pilih Brand Sepatu-',
            'nike' => 'Nike',
            'vans' => 'Vans',
            'converse' => 'Converse',
            'adidas' => 'Adidas',
            'reebok' => 'Reebok',
            'nb' => 'New Balance',
            'compass' => 'Compass'
        ];
        $this->data['opt_jenis'] = [
            '' => '-Pilih Jenis Sepatu-', 
            'slip-on' => 'Slip-on Sneakers',
            'high-top basketball' => 'High-Top Basketball Sneakers',
            'authentic' => 'Authentic Sneakers',
            'canvas' => 'Canvas Sneakers',
            'leather' => 'Leather Sneakers',
            'athletic' => 'Athletic Sneakers',
            'dad' => 'Dad Sneakers',
            'retro' => 'Retro Running Sneakers',
            'knit' => 'Knit Sneakers'
        ];
    }
    public function index(Sepatu_m $sepatu)
    {       
        $data = [
            //'query' => $sepatu->get_records(),
            'query' => $sepatu->paginate(5),
            'optbrand' => $this->data['opt_brand'],
            'optjenis' => $this->data['opt_jenis']
        ];
        return view('sepatu.tampil', $data);
    }
    public function add_new()
    {
        $data = [
            'is_update' => 0,
            'optbrand' => $this->data['opt_brand'],
            'optjenis' => $this->data['opt_jenis']
        ];
        return view('sepatu.add', $data);
    }
    public function save(Sepatu_m $sepatu, Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);
        
        $data['brand']   = $request->input('brand');
        $data['nama']   = $request->input('nama');
        $data['jenis']   = $request->input('jenis');
        $data['stok']   = $request->input('stok');
        $is_update = $request->input('is_update');

        if($is_update==0)
        {
            if($sepatu->insert_records($data));
                return redirect('sepatu');
        }
        else
        {
            $id=$request->input('id');
            if($sepatu->update_by_id($data,$id));
                return redirect('sepatu');
        }
    }
    public function edit($id, Sepatu_m $sepatu)
    {
        $data = [
            'query' => $sepatu->get_records($id)->first(),
            'is_update' => 1,
            'optbrand' => $this->data['opt_brand'],
            'optjenis' => $this->data['opt_jenis']
        ];
        return view('sepatu.edit', $data);
    }
    public function delete($id, Sepatu_m $sepatu)
    {
        if($sepatu->delete_by_id($id))
        return redirect('sepatu');
    }
}
