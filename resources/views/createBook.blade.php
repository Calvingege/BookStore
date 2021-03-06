<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    div {
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 20px;
  margin-left: 20px;
    }
    </style>
</head>
<body>
    <form action="{{route('storeBook')}}" method="POST">
        @csrf
        <h1>Create Book</h1>
        <div class="mb-3">
          <label for="bookTitle" class="form-label">Book Title (5 sd 20 character)</label>
          <input type="text" class="form-control" id="bookTitle" name="bookTitle">
        </div>
        <div class="mb-3">
          <label for="releaseDate" class="form-label">Release Date (tahun 2000 hingga 2021)</label>
          <input type="text" class="form-control" id="releaseDate" name="releaseDate">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author (5 - 20 karakter)</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="totalPages" class="form-label">Total Pages (lebih besar dari 0)</label>
            <input type="text" class="form-control" id="totalPages" name="totalPages">
        </div>
        <div class="vertical-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>