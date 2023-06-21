<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Karyawan</title>
</head>
    <body>
    <h1>DATA KARYAWAN</h1>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="/karyawan/create">Create Data</a>
                            </li>
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
                        <tr>
                            <th scope="row" class="table-info">ID</th>
                            <th class="table-info">Nama</th>
                            <th class="table-info">NIK</th>
                            <th class="table-info">Jenis Kelamin</th>
                            <th class="table-info">Usia</th>
                            <th class="table-info">Status Pernikahan</th>
                            <th class="table-info">Agama</th>
                            <th class="table-info">Jabatan</th>
                            <th class="table-info">Gaji</th>
                            <th class="table-info">Alamat</th>
                            <th class="table-info">Aksi</th>
                        </tr>
                        @foreach($karyawan as $k)
                    <div  class="position-absolute top-50 start-50 translate-middle">
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
                                
                                <form action="/karyawan/{{$k->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-warning btn-sm" href="/karyawan/{{$k->id}}/update">Update</a>
                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                            
                            
                        </tr>
                    </div>
                        
                        @endforeach
                    </table>
                    </div>
                    
        </div>
                    
    </body>
</html>

