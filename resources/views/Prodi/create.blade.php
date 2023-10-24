<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('prodi') }}">
        @csrf
        NAMA <br>
        <input type="text" name="biodatanama" value="pandu"></br>
        <input type="submit" name="btnSubmit" value="KIRIM">

    </form>
</body>
</html>