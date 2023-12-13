<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
<form action="{{ url('sepatu/save') }}" method="post" accept-charset="utf-8">
@csrf 
    <input type="hidden" name="id" value="{{ $query->Kode_sepatu }}" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    <br/><br/>Brand : <select name="brand">
        @foreach ($optbrand as $key => $value)
            @if ($query->brand == $key)
            <option value="{{ $key }}" selected>{{ $value }}</option>
            @else
            <option value="{{ $key }}">{{ $value }}</option>
            @endif
        @endforeach
    </select>
    <br><br>Nama : <input type="text" name="nama" value="{{ $query->nama }}" size="70" maxlenght="100" />
    <br/><br/>Jenis : <select name="jenis">
    @foreach ($optjenis as $key => $value)
        @if ($query->jenis == $key)
        <option value="{{ $key }}" selected>{{ $value }}</option>
        @else
        <option value="{{ $key }}">{{ $value }}</option>
        @endif
    @endforeach  
    </select>
    <br/><br/>Stok : <input type="text" name="stok" value="{{ $query->stok }}" size="5" maxlenght="20" />
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
    <br/><br/><a href="{{ url('sepatu') }}">Batal</a>
</form>
</body>
</html>