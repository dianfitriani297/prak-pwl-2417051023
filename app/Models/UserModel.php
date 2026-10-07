<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';                    
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')   
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas') 
                    ->get();
    }

    public function edit($id)
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->where('user.id', $id)
                    ->first();
    }

    public function updateUser($request, $id)
    {
        return $this->where('id', $id)->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
    }

    public function destroyUser($id)
    {
        return $this->where('id', $id)->delete();
    }
}