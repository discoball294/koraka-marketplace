<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\PageViewCounter\Traits\HasPageViewCounter;

/**
 * App\Product
 *
 * @property int $id
 * @property int $store_id
 * @property int $kategori_id
 * @property string $nama_barang
 * @property string $deskripsi
 * @property int $harga
 * @property string $gambar
 * @property int $stok
 * @property string $url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Kategori $kategori
 * @property-read \App\Store $stores
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Transaksi[] $transaksi
 * @property-read \Illuminate\Database\Eloquent\Collection|\CyrildeWit\PageViewCounter\Models\PageView[] $views
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereKategoriId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereNamaBarang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStok($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUrl($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasPageViewCounter;
    protected $table = 'products';
    protected $fillable = ['store_id', 'kategori_id', 'nama_barang', 'deskripsi', 'harga', 'gambar', 'stok', 'url'];

    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
