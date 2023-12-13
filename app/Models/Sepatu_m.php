<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu_m extends Model
{
    use HasFactory;

    protected $table = "sepatu";
    protected $primaryKey = "Kode_sepatu";
    public $timestamps= false;

function get_records($criteria='')
{
    $result = self::select('*')
        ->when($criteria, function($query, $criteria){
            return $query->where('Kode_sepatu', $criteria);
        })
        ->get();
    return $result;
}
function insert_records($data)
{
    $result = self::insert($data);
    return $result;
}
function update_by_id($data, $id)
{
    $result = self::where('Kode_sepatu', $id)
        ->update($data);
    return $result;
}
function delete_by_id($id)
{
    $result = self::where('Kode_sepatu', $id)
        ->delete();
    return $result;
}

}
