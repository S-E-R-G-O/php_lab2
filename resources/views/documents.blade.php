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
            <input class="form-control me-2 .bg-dark-subtle" type="text" name="code" id="code"
                   placeholder="Kод"></input>
            <input class="form-control me-2" type="text" name="title" id="title" placeholder="Заголовок статьи"></input>
            <input class="form-control me-2" type="text" name="tags" id="tags" placeholder="Тэг"></input>
            <button class="btn btn-success mx-2" type="submit">Поиск</button>
            <button class="btn btn-primary" onclick="location.href='/posts'" type="button">Показать&nbspвсе</button>
        </form>
    </div>
</nav>

<div class="container">
    <h2 class="p-4">Статьи</h2>
    <div class="p-4">
        {{$documents->links()}}
    </div>
    <table class="table table-striped">
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
        </tbody>
    </table>
    <div class="p-4">
        {{$documents->links()}}
    </div>
    <h2 class="p-4">Теги</h2>
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>Название</th>
            <th>Символьный код</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->code }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
