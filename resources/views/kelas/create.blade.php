@extends('layouts.navAdmin')
@section('content')
    <div class="bg-grey-200 min-h flex items-center mt-5">
        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
            <form action="{{ route('kelas.store') }}" method="post">
                @csrf
                <div class="flex items-center mb-5">
                    <label for="kls" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Kelas</label>
                    <input type="text" name="kls" class="form-control @error('kls') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
                    @error('kls')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex items-center mb-5">
                    <label for="n_kls" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Nama
                        Kelas</label>
                    <input type="text" name="n_kls" value=""
                        class="form-control @error('n_kls') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">

                </div>

                <div class="flex items-center mb-5">
                    <label for="ruangan"
                        class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Ruangan</label>
                    <input type="text" name="ruangan" value=""
                        class="form-control @error('ruangan') is-invalid @enderror"
                        class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
                </div>
                <div class="flex items-center mb-5">
                    <label for="wakel" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Wali
                        Kelas</label>
                    <input type="text" name="wakel" value=""
                        class="form-control @error('wakel') is-invalid @enderror"
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
@endsection
