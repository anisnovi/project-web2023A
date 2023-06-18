
<h1>Update Data Karyawan</h1>

<form action="/karyawan/{{$karyawan->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id" placeholder="Nama" value="{{$karyawan->id}}"><br>
    <input type="text" name="nama" placeholder="Nama" value="{{$karyawan->nama}}"><br>
    <input type="text" name="nik" placeholder="NIK" value="{{$karyawan->nik}}"><br>
    <select name="jenkel" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki" @if($karyawan->jenkel == "Laki-Laki") selected @endif >Laki - Laki</option>
        <option value="Perempuan" @if($karyawan->jenkel == "Perempuan") selected @endif >Perempuan</option>
    </select><br>
    <input type="text" name="usia" placeholder="Usia" value="{{$karyawan->usia}}"><br>
    <select name="status" id="">
        <option value="Belum Menikah" @if($karyawan->status == "Belum Menikah") selected @endif >Belum Menikah</option>
        <option value="Nikah" @if($karyawan->status == "Nikah") selected @endif >Nikah</option>
    </select><br>
    <input type="text" name="agama" placeholder="Agama" value="{{$karyawan->agama}}"><br>
    <select name="jabatan" id="">
        <option value="HRD" @if($karyawan->jabatan == "HRD") selected @endif >HRD</option>
        <option value="Marketing" @if($karyawan->jabatan == "Marketing") selected @endif >Marketing</option>
        <option value="IT" @if($karyawan->jabatan == "IT") selected @endif >IT</option>
        <option value="Manager" @if($karyawan->jabatan == "Manager") selected @endif >Manager</option>
    </select><br>
    <input type="text" name="gaji" placeholder="Gaji" value="{{$karyawan->gaji}}"><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save">

</form>