@extends('layout.app')
@section('main')

<body>
    <div class="container mt-5">
        <h1>{{$title}}</h1>
        <form action="{{$url}}" class="form-group" method="post">

            @csrf
            <label for="name">Name:</label>
            <input type="name" class="form-control" name="name">

            <span class="text-danger">
                @error('name')
                  {{$message}}
                  @enderror
            </span>
            <br>

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email">

            <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
            </span>
            <br>

            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">

            <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
            </span>
            <br>


            <input type="submit" class="btn btn-info mt-4">

        </form>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
      </script>
    </body>

    </html>
    @endsection
