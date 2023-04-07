<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cherenkov Lab2</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark p-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Lab2</a>
        <form class="d-flex" role="search">
            <button class="btn btn-primary" onclick="location.href='/posts'" type="button">Показать&nbspвсе</button>
        </form>
    </div>
</nav>

<div class="container">
    <h2>Статьи</h2>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Заголовок</th>
            <th>Код</th>
            <th>Содержание</th>
            <th>Дата/Время создания</th>
            <th>Автор</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($documents as $doc)
            <tr>
                <td>{{ $doc->title }}</td>
                <td>{{ $doc->code }}</td>
                <td>{{ $doc->content }}</td>
                <td>{{ $doc->td_creation }}</td>
                <td>{{ $doc->author }}</td>

            </tr>
        @endforeach
    </table>

</div>
</body>
</html>
