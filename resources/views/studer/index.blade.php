@extends('layouts.navStudent')
@section('content')
    <div class="container-fluid">


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="card">
                    <div class="card-header">
                        Data student
                    </div>
                    <a href="{{ route('student.cetak') }}" class="btn btn-sm btn-outline-primary float-right"
                        target="_blank">Cetak Data</a>

                    <div class="container-fluid">
                        <p>Cari Data Pegawai :</p>
                        <form action="{{ route('student.cari') }}" method="GET">
                            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                            <input type="submit" value="CARI">
                        </form>
                    </div>
                    <div class="car-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="student">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama student</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1 @endphp
                                    @foreach ($student as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->jk }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
