<div class="table-responsive">
    <table class="table table-bordered" id="student" border="1">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Siswa</th>
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
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
