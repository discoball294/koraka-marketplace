<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Kategori
 *
 * @property int $id
 * @property string $nama_kategori
 * @property string $deskripsi
 * @property string $gambar
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereNamaKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kategori whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori', 'deskripsi', 'gambar'];
}
