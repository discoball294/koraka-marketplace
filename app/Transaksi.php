<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transaksi
 *
 * @property int $id
 * @property int $user_id
 * @property int $total
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transaksi whereUserId($value)
 * @mixin \Eloquent
 */
class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['user_id', 'total'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_transaksi')->withPivot('price', 'qty', 'total')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
