<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transaksi
 *
 * @property int $id
 * @property int $user_id
 * @property int $total
 * @property int $status
 * @property int $resi
 * @property string $invoice_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereResi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereStatus($value)
 * @property-read \App\BuktiTransfer $bukti
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereInvoiceId($value)
 */
class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['user_id', 'total', 'status', 'resi', 'invoice_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_transaksi')->withPivot('price', 'qty', 'total')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bukti()
    {
        return $this->hasOne(BuktiTransfer::class);
    }
}
