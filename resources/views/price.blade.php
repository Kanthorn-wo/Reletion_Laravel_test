<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">

    <form action="{{ route('price.add') }}" method="post">
      @csrf

      @if (session('success'))
      <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert" id="alert">
        <ul class="pl-4 my-2">
          <li id="success">{{ session('success') }}</li>
        </ul>
      </div>
      @endif

      @if ($errors->any())
      <div class="alert alert-danger border-left-danger" role="alert" id="alert">
        <ul class="pl-4 my-2">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <h1>Price Page</h1>
      <div class="form-group">
        <label for="choose">Product</label>
        <select class="custom-select my-1 mr-sm-2" name="product_fk">
          <option selected>Choose...</option>
          @foreach ($product_data as $row)
          <option value="{{ $row->id }}">{{ $row->product_name }}</option>
          @endforeach

        </select>

        <label for="exampleInputEmail1">Buy</label>
        <input type="text" class="form-control" name="buy">
        <label for="exampleInputEmail1">Sell</label>
        <input type="text" class="form-control" name="sell">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @php
    $i = 1;
    @endphp
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product Name Buy Artt</th>
          <th scope="col">Product Name By Model</th>
          <th scope="col">Buy</th>
          <th scope="col">Sell</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($price_data as $row)
        <tr>
          <td scope="row">{{ $i++ }}</td>
          <td>{{ $row->product_id }}</td>
          <td>{{ $row->product->product_name }}</td>
          <td>{{ $row->buy }}</td>
          <td>{{ $row->sell }}</td>


        </tr>
        @endforeach
    </table>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>