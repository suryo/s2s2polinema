<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to the Laravel Application</h1>
    <p>isi dari variable angka adalah : {{ $iniangka }}</p>
    <p>This is a simple welcome page.</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>buku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rakbuku as $item)
                <tr>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Current Date and Time: {{ now() }}</p>
    <p>Laravel Version: {{ app()->version() }}</p>
    <p>PHP Version: {{ phpversion() }}</p>
    <p>isinya tampil adalah : {{ $tampil }}</p>
</body>

</html>
