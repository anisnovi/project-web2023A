
<h1>Create Data Karyawan</h1>

<form action="/karyawan/store" method="POST">
    @csrf
    <input type="text" name="id" placeholder="ID"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <select name="jenkel" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <input type="text" name="usia" placeholder="Usia"><br>
    <select name="status" id="">
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Nikah">Nikah</option>
    </select><br>
    <input type="text" name="agama" placeholder="Agama"><br>
    <select name="jabatan" id="">
        <option value="HRD">HRD</option>
        <option value="Marketing">Marketing</option>
        <option value="IT">IT</option>
        <option value="Manager">Manager</option>
    </select><br>
    <input type="text" name="gaji" placeholder="Gaji"><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save">

</form>