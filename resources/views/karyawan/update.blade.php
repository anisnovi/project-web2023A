<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Karyawan</title>
</head>
    <body>
        <figure class="text-center">
            <blockquote class="blockquote">
                <h1> UPDATE DATA KARYAWAN </h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                tampilan dari data karyawan yang akan diubah
            </figcaption>
        </figure>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/karyawan">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                        </ul>
                            
                        <form action="{{ route ('logout') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('delete')
                        
                            <button class="btn btn-danger" type="submit">{{ Auth::user()->name }} Logout</button>
                        </form>
                    </div>  
                    
            </nav>   
                <form action="/karyawan/{{$karyawan->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div>
                        <label for="disabledTextInput" class="form-label">ID</label>
                        <input type="text" name="id" class="form-control" placeholder="kosongkan saja" value="{{$karyawan->id}}">
                    </div>

                    <div>
                        <label for="disabledTextInput" class="form-label">NAMA</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukkan data" value="{{$karyawan->nama}}">
                    </div>
                    
                    <div>
                        <label for="disabledTextInput" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="masukkan data" value="{{$karyawan->nik}}">
                    </div>

                    <div class="mb-3">
                    <label for="disabledSelect" class="form-label">JENIS KELAMIN</label>
                    <select name="jenkel" class="form-select" >
                        <option value="Laki-Laki" @if($karyawan->jenkel == "Laki-Laki") selected @endif >Laki - Laki</option>
                        <option value="Perempuan" @if($karyawan->jenkel == "Perempuan") selected @endif >Perempuan</option>
                    </select>
                    </div>

                    <div>
                        <label for="disabledTextInput" class="form-label">USIA</label>
                        <input type="text" name="usia" class="form-control" placeholder="masukkan data" value="{{$karyawan->usia}}">
                    </div>

                    <div class="mb-3">
                    <label for="disabledSelect" class="form-label">STATUS PERNIKAHAN</label>
                    <select name="status" class="form-select">
                        <option value="Belum Menikah" @if($karyawan->status == "Belum Menikah") selected @endif >Belum Menikah</option>
                        <option value="Nikah" @if($karyawan->status == "Nikah") selected @endif >Nikah</option>
                    </select>
                    </div>

                    <div>
                        <label for="disabledTextInput" class="form-label">AGAMA</label>
                        <input type="text" name="agama" class="form-control" placeholder="masukkan data" value="{{$karyawan->agama}}">
                    </div>

                    <div class="mb-3">
                    <label for="disabledSelect" class="form-label">JABATAN</label>
                    <select name="jabatan" class="form-select" >
                        <option value="HRD" @if($karyawan->jabatan == "HRD") selected @endif >HRD</option>
                        <option value="Marketing" @if($karyawan->jabatan == "Marketing") selected @endif >Marketing</option>
                        <option value="IT" @if($karyawan->jabatan == "IT") selected @endif >IT</option>
                        <option value="Manager" @if($karyawan->jabatan == "Manager") selected @endif >Manager</option>
                    </select>
                    </div>
                   
                    <div>
                        <label for="disabledTextInput" class="form-label">GAJI</label>
                        <input type="text" name="gaji" class="form-control" placeholder="masukkan data" value="{{$karyawan->gaji}}">
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ALAMAT</label>
                        <textarea name="alamat" class="form-control" placeholder="masukkan alamat lengkap" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <input type="submit" name="submit" value="Save" class="btn btn-success">

                </form>
                                
        </div>
                    
    </body>
</html>






