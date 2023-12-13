<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Sneakers</title>
    @include('cdn')
    <link rel="stylesheet" type="text/css" href="{{ url('style.css') }}">
</head>
<body>
<section class="intro">    
    <div class="bg-image h-100" style="background-image: url('forest.jpg');">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-dark shadow-2-strong">
                            <div class="card-body">
                                <div class="table-responsive">
                                <a class="btn btn-primary" href="{{ url('sepatu/add') }}" role="button" id="btn0" onmouseover="gantiteks()" onmouseout="balek()"> Tambah Data </a>
                                    <table class="table table-dark table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Brand</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php 
                                            $no = 0;
                                        @endphp
                                        @foreach($query as $row)
                                            @php 
                                                $no++;
                                            @endphp
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $optbrand[$row['brand']] }}</td>
                                            <td>{{ $row['nama'] }}</td>
                                            <td>{{ $optjenis[$row['jenis']] }}</td>
                                            <td>{{ $row['stok'] }}</td>
                                            <td><a href={{ url('sepatu/edit/'.$row['Kode_sepatu']) }}>Edit</a>
                                                <a href={{ url('sepatu/delete/'.$row['Kode_sepatu']) }}
                                                onclick="alert('Yakin gak?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <p>{{ $query->links('vendor.pagination.ourpage')}}<p>
                                    <a class="btn btn-primary" href="{{ url('store') }}" role="button"> Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    const gw =  document.querySelector('btn0')
    
    function gantiteks(){
    btn0.innerText = "Add Data Table"
    }
    function balek(){
        btn0.innerText = "Tambah Data"
    }
</script>
</html>