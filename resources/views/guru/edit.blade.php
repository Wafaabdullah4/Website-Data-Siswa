@extends('layouts.navAdmin')

@section('content')
    <div class="bg-grey-200 min-h flex items-center mt-5">
        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
            <form action="{{ route('guru.update', $guru->id) }}" method="post">
                @csrf
                @method('put')

                <div class="flex items-center mb-5">
                    <label for="n_guru" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Nama
                        Guru</label>
                    <input type="text" name="n_guru" value="{{ $guru->n_guru }}"
                        class="form-control @error('n_guru') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
                    @error('n_guru')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex items-center mb-5">
                    <label for="n_wakel" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Wali
                        Kelas</label>
                    <input type="text" name="n_wakel" value="{{ $guru->n_wakel }}"
                        class="form-control @error('n_wakel') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>

                <div class="flex items-center mb-5">
                    <label for="jenis_kelamin" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Jenis
                        Kelamin</label>
                    <input type="text" name="jenis_kelamin" value="{{ $guru->jenis_kelamin }}"
                        class="form-control @error('jenis_kelamin') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>
                <div class="flex items-center mb-5">
                    <label for="mapel"
                        class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Mapel</label>
                    <input type="text" name="mapel" value="{{ $guru->mapel }}"
                        class="form-control @error('mapel') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>

                <div class="text-right">
                    <button
                        class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                    font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                    shadow-lg"
                        type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
