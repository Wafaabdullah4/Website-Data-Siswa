@extends('layouts.navAdmin')
@section('content')
    <div class="bg-grey-200 min-h flex items-center mt-5">
        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
            <form action="{{ route('student.store') }}" method="post">
                @csrf
                <div class="flex items-center mb-5">
                    <label for="name" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Name</label>
                    <input type="text" name="nama" class="form-control @error('kelas') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex items-center mb-5">
                    <label for="kelas"
                        class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Kelas</label>
                    <input type="text" name="kelas" value=""
                        class="form-control @error('kelas') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>

                <div class="flex items-center mb-5">
                    <label for="name" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">JK</label>
                    <input type="text" name="jk" value=""
                        class="form-control @error('jk') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>

                <div class="text-right">
                    <button
                        class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg"
                        type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>


    {{-- <div class="container-fluid">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="card">
                    <div class="card-header">Data student</div>
                    <div class="card-body">
                        <form action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama student</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    placeholder="Masukkan Nama student">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="">Masukan Kelas</label>
                                <select class="form-select" aria-label="Default select example" name="kelas"
                                    id="">
                                    <option selected>Pilih Kelas</option>
                                    <option>RPL</option>
                                    <option>TKJ</option>
                                    <option>DKV</option>
                                    <option>TKRO</option>
                                    <option>TBSM</option>
                                    <option>TMP</option>
                                    <option>TP</option>
                                    <option>OTKP</option>
                                    <option>HR</option>
                                </select>
                                <label for="">Masukan Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jk"
                                    id="">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
