<!DOCTYPE html>
<html lang="id">
<head>
    <title>Halaman Login</title>
</head>
<body align="center">
    <h2>Silahkan Login</h2>
    <form action="{{ url('login') }}" method="post" accept-charset="utf-8">
    @csrf 
        <label for="username">Username: </label>
        <input type="text" name="username" value="" size="20">
        <br><label for="password">Password: </label>
        <input type="password" name="password" value="" size="20">
        <br><input type="submit" name="btn_simpan" value="Login">
    </form>
</br></br></br></br></br>
</body>
</html>