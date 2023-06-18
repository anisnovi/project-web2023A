<a href="/karyawan/create">Add Data</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>Jenis Kelamin</td>
        <td>Usia</td>
        <td>Status Pernikahan</td>
        <td>Agama</td>
        <td>Jabatan</td>
        <td>Gaji</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    @foreach($karyawan as $k)
    <tr>
        <td>{{$k->id}}</td>
        <td>{{$k->nama}}</td>
        <td>{{$k->nik}}</td>
        <td>{{$k->jenkel}}</td>
        <td>{{$k->usia}}</td>
        <td>{{$k->status}}</td>
        <td>{{$k->agama}}</td>
        <td>{{$k->jabatan}}</td>
        <td>{{$k->gaji}}</td>
        <td>{{$k->alamat}}</td>
        <td>
            <a href="/karyawan/{{$k->id}}/update">Update</a>
            <form action="/karyawan/{{$k->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" name="submit" value="Delete">
            </form>
        </td>
        
        
    </tr>
    @endforeach
</table>