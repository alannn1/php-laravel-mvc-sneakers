<!DOCTYPE html>
<html lang="id">
<head>
    <title>Halaman Utama</title>
    
</head>
<body>
    <h2 align="center">Aplikasi Sneakers Store</h2>
    <center>
    <table border="4" style="width:50%">
    <tr>
    <td colspan="2" align="center"><b>Pilihan Menu</b></td>
    </tr>
    <tr>
    <td>No.</td>
    <td>Link</td>
    </tr>
    <tr>
    <td>1</td>
    <td><a href="{{ url('sepatu') }}">Kelola Data Sepatu</a></td>
    </tr>
    </center>
</table>
    <br><a class="btn btn-primary" href="{{ url('logout') }}" role="button">Logout</a>
</body>
</html>