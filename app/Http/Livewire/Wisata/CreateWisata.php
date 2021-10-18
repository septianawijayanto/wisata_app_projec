<?php

namespace App\Http\Livewire\Wisata;

use App\Models\Wisata;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateWisata extends Component
{
    use WithFileUploads;
    public $nama, $deskripsi, $harga_tiket, $alamat;
    public $gambar;
    public function render()
    {
        return view('livewire.wisata.create-wisata');
    }
    public function createWisata()
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
            'unique' => ':attribute sudah terdaftar!',
            'foto.mimes' => 'Format Foto jpg/jpeg/png',
        ];
        $this->validate([
            'nama' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'harga_tiket' => 'required',
            'alamat' => 'required',
        ], $messages);

        Wisata::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            // 'gambar' => $this->gambar->store('gambar', 'public'),
            'gambar' => $this->gambar->store('gambar', 'public'),
            'harga_tiket' => $this->harga_tiket,
            'alamat' => $this->alamat,
        ]);
        session()->flash('massage', 'Data Berhasil Ditambah');
        //Kosongin Form
        // $this->nama = "";
        // $this->deskripsi = "";
        // $this->harga_tiket = "";
        // $this->alamat = "";
        $this->emit('CreatedWisata');
    }
}
