<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BuktiTransfer
 *
 * @property int $id
 * @property int $transaksi_id
 * @property string $gambar
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Transaksi $transaksi
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuktiTransfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuktiTransfer whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuktiTransfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuktiTransfer whereTransaksiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BuktiTransfer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BuktiTransfer extends Model
{
    protected $table = 'bukti_transfer';
    protected $fillable = ['transaksi_id', 'gambar'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
