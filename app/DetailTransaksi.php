<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DetailTransaksi
 *
 * @property int $id
 * @property int $transaksi_id
 * @property int $product_id
 * @property int $price
 * @property int $qty
 * @property int $total
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereTransaksiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DetailTransaksi whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = ['transaksi_id', 'product_id', 'price', 'qty', 'total'];
}
