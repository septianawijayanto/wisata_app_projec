<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Wisata') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if (session()->has('massage'))
                <div class="alert alert-success">
                    {{ session('massage') }}</div>
            @endif
            <form wire:submit.prevent="createWisata" id="form-tambah" enctype="multipart/form-data">
                <div class="py-1">
                    <label for="nama">Nama</label>
                    <input type="text" wire:model="nama"
                        class=" shadow appearance-none border rounded w-full text-gray-500 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Nama">
                    @if ($errors->has('nama'))
                        <span class="text-red-700">{{ $errors->first('nama') }}</span>
                    @endif
                </div>
                <div class="py-1">
                    <label for="gambar">Gambar</label>
                    <input type="file" wire:model="gambar"
                        class=" shadow appearance-none border rounded w-full   focus:outline-none focus:shadow-outline">
                    @if ($errors->has('gambar'))
                        <span class="text-red-700">{{ $errors->first('gambar') }}</span>
                    @endif
                </div>
                <div class="py-1">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" wire:model="deskripsi"
                        class=" shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4" placeholder="Deskripsi"></textarea>
                    @if ($errors->has('deskripsi'))
                        <span class="text-red-700">{{ $errors->first('deskripsi') }}</span>
                    @endif
                </div>
                <div class="py-1">
                    <label for="harga_tiket">Harga Tiket</label>
                    <input type="text" wire:model="harga_tiket"
                        class=" shadow appearance-none border rounded w-full text-gray-500 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Harga Tiket (Rp/Tiket)">
                    @if ($errors->has('harga_tiket'))
                        <span class="text-red-700">{{ $errors->first('harga_tiket') }}</span>
                    @endif
                </div>
                <div class="py-1">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" wire:model="alamat"
                        class=" shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4" placeholder="Alamat"></textarea>
                    @if ($errors->has('alamat'))
                        <span class="text-red-700">{{ $errors->first('alamat') }}</span>
                    @endif
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="rounded-lg px-4 py-2 bg-blue-800 text-white hover:bg-blue-500 ">Simpan</button>

                </div>
            </form>
        </div>
    </div>
</div>
