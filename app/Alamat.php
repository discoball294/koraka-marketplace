<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Alamat
 *
 * @property int $id
 * @property int $user_id
 * @property string $alamat
 * @property string $provinsi
 * @property string $kota
 * @property string $no_telp
 * @property string $kode_pos
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereKelurahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereKodePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereUserId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereNoTelp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Alamat whereProvinsi($value)
 */
class Alamat extends Model
{
    protected $table = 'alamat';
    protected $fillable = [
        'user_id',
        'alamat',
        'provinsi',
        'kota',
        'no_telp',
        'kode_pos'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
