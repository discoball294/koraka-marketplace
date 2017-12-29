<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Store
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama_toko
 * @property string $slogan
 * @property string $deskripsi
 * @property string $gambar
 * @property string $url_toko
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereNamaToko($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUrlToko($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUserId($value)
 * @mixin \Eloquent
 */
class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['user_id', 'nama_toko', 'slogan', 'deskripsi', 'gambar', 'url_toko'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
