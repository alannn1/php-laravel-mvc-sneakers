<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Sneakers</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
@if ($errors -> any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('sepatu/save') }}" method="post" accept-charset="utf-8">
@csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    <br/><br/>Brand : <select name="brand">
        @foreach ($optbrand as $key => $value)
            @if (old('brand') == $key)
            <option value="{{ $key }}" selected>{{ $value }}</option>
            @else
            <option value="{{ $key }}">{{ $value }}</option>
            @endif
        @endforeach
    </select>
    <br><br>Nama : <input type="text" name="nama" value="{{ old('nama') }}" size="70" maxlenght="100" />
    <br/><br/>Jenis : <select name="jenis">
    @foreach ($optjenis as $key => $value)
    @if(old('jenis') == $key)
        <option value="{{ $key }}" selected>{{ $value }}</option>
    @else
        <option value="{{ $key }}">{{ $value }}</option>
    @endif
    @endforeach  
    </select>
    <br/><br/>Stok : <input type="text" name="stok" value="{{ old('stok') }}" size="5" maxlenght="30" />
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
    <br/><br/><a href="{{ url ('sepatu') }}">Batal</a>
</form>
</body>
</html>