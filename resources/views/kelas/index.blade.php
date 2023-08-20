@extends('layouts.navAdmin')
@section('content')
    <div class="card mb-5">
        <div class="card-header bg-white shadow-lg">
            Data kelas

            <a href="{{ route('kelas.create') }}"
                class="btn btn-sm btn-outline-primary float-right mx-3   font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
            shadow bg-indigo-500 text-gray-100 rounded-full w-1/6 ">Tambah
                Data</a>
        </div>

        <div class="container-fluid d-grid">
            <form action="{{ route('kelas.cari') }}" method="GET"
                class="mt-3 mx-auto max-w-xl py-2 px-6 rounded-full bg-white border flex focus-within:border-gray-300 ">
                <input type="text" name="cari" placeholder="Cari siswa" value="{{ old('cari') }}"
                    class="bg-transparent w-full focus:outline-none pr-4 font-semibold border-0 focus:ring-0 px-0 py-0">
                <input type="submit" value="Search"
                    class="flex flex-row items-center justify-center min-w-[130px] px-4 rounded-full font-medium tracking-wide border disabled:cursor-not-allowed disabled:opacity-50 transition ease-in-out duration-150 text-base bg-black text-white font-medium tracking-wide border-transparent py-1.5 h-[38px] -mr-3">
            </form>
        </div>


        <table class="min-w-full divide-y divide-gray-200 overflow-x-auto mt-4">
            <thead class="bg">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nomor
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Kelas
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama Kelas
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ruangan
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Wali Kelas
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php $no=1 @endphp
                @foreach ($kelas as $data)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    {{ $no++ }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $data->kls }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                {{ $data->n_kls }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                {{ $data->ruangan }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                {{ $data->wakel }}
                            </span>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                            <form action="{{ route('kelas.destroy', $data->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{ route('kelas.edit', $data->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <button onclick="return confirm('Apakah anda yakin menghapus' )" type="submit"
                                    class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <!-- More rows... -->

            </tbody>
        </table>
    </div>
@endsection
