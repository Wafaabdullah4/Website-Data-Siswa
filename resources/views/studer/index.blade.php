@extends('layouts.navStudent')
@section('content')
    <div class="card mb-5">
        <div class="card-header bg-white shadow-lg">
            Data student
        </div>
        <div class="container-fluid d-grid">
            <form action="{{ route('studer.cari') }}" method="GET"
                class="mt-3 mx-auto max-w-xl py-2 px-6 rounded-full bg-white border flex focus-within:border-gray-300 ">
                <input type="text" name="cari" placeholder="Cari siswa" value="{{ old('cari') }}"
                    class="bg-transparent w-full focus:outline-none pr-4 font-semibold border-0 focus:ring-0 px-0 py-0">
                <input type="submit" value="Search"
                    class="flex flex-row items-center justify-center min-w-[130px] px-4 rounded-full font-medium tracking-wide border disabled:cursor-not-allowed disabled:opacity-50 transition ease-in-out duration-150 text-base bg-black text-white font-medium tracking-wide border-transparent py-1.5 h-[38px] -mr-3">
            </form>


        </div>


        <table class="min-w-full divide-y divide-gray-200 overflow-x-auto mt-2 m-10">
            <thead class="bg">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nomor
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Kelas
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Jenis Kelamin
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php $no=1 @endphp
                @foreach ($student as $data)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    {{ $no++ }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $data->nama }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                {{ $data->kelas }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $data->jk }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        </td>
                    </tr>
                @endforeach

                <!-- More rows... -->

            </tbody>
        </table>
    </div>
@endsection
