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
                <h1> CREATE DATA KARYAWAN </h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                tampilan untuk menambahkan data karyawan
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
                    
        
                 <div class="mb-3">
                    <table class="table table-striped">
                        <form action="/karyawan/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">ID</label>
                                <input type="text" name="id" class="form-control" placeholder="kosongkan saja">
                            </div>

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">NAMA</label>
                                <input type="text" name="nama" class="form-control" placeholder="masukkan data">
                            </div>

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="masukkan data">
                            </div>

                            <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih jenis kelamin</label>
                            <select name="jenkel" class="form-select" id="">
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">USIA</label>
                                <input type="text" name="usia" class="form-control" placeholder="masukkan data">
                            </div>

                            <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Pilih status pernikahan</label>
                            <select name="status" class="form-select" id="">
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Nikah">Nikah</option>
                            </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">AGAMA</label>
                                <input type="text" name="agama" class="form-control" placeholder="masukkan data">
                            </div>

                            <div>
                            <label for="disabledSelect" class="form-label">Pilih jabatan</label>
                            <select name="jabatan" class="form-select" id="">
                                <option value="HRD">HRD</option>
                                <option value="Marketing">Marketing</option>
                                <option value="IT">IT</option>
                                <option value="Manager">Manager</option>
                            </select> 
                            </div>
                           
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">GAJI</label>
                                <input type="text" name="gaji" class="form-control" placeholder="masukkan data">
                            </div>

                            <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">ALAMAT</label>
                            <textarea name="alamat" class="form-control" placeholder="masukkan alamat lengkap" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>

                            <div class="mb-3">
                            <input type="submit" name="submit" value="Save" class="btn btn-info">
                            </div>
                        </form>
                    </table>
                    </div>
                    
        </div>
                    
    </body>
</html>




