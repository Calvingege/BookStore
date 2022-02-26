<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <!-- Start -->
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Book Title</th>
      <th scope="col">Release Date</th>
      <th scope="col">Author</th>
      <th scope="col">Total Pages</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($books as $book)
      <tr>
        <th scope="row">{{$book->bookTitle}}</th>
        <td>{{$book->releaseDate}}</td></td>
        <td>{{$book->author}}</td>
        <td>{{$book->totalPages}}</td>
        <td>
          <p>
          <a class="btn btn-success" href="{{route('formUpdateBook', $book->id)}}" role="button">update</a>
          </p>
          <form action="{{route('deleteBook', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            
            <button class="btn btn-danger">delete</button>

          </form>

          <!-- Bikin button balik lagi ngeredirect ke create/book diluar table, saya masukan di dalam tabel karena gatau kenapa kalau diluar table kondisi buttob "back nya nge-loop :D" -->
          <div class="container my-3 bg-light">
              <a href="{{route('createBook', $book->id)}}" >Back</a>
          </div>
        </td>
      </tr>
      @endforeach 
    </tbody>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>