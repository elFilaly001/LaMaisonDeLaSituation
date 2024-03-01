@dump($books)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="add_form">
        <form action="/AddBook" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Book Name">
            <input type="text"  name="title" placeholder="Book title">
            <input type="number"  name="price" placeholder="Price">
            <button type="submit">Add</button>
        </form>
    </div>
    <div class="All_books">
        <table>
            <thead>
                <th>name</th>
                <th>title</th>
                <th>price</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th>{{$book->name}}</th>
                        <th>{{$book->title}}</th>
                        <th>{{$book->price}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>