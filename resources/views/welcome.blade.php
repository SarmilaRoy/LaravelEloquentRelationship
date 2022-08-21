<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relationships</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3">Eloquent Relationships</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            {{-- <th>Name</th>
                            <th>Phone</th>      --}}
                            {{-- <th>Title</th>
                            <th>Comments</th>   --}}
                            <th>Comments</th>
                            <th>Title</th> 
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($phones as $data) --}}
                        {{-- @foreach ($post as $data) --}}
                        @foreach ($comments as $data)
                        <tr>
                            {{-- <td>{{ $data->name }}</td>
                            <td>{{ $data->phone->name }}</td> --}}
                            {{-- <td>{{ $data->user->name }}</td>
                            <td>{{ $data->name }}</td> --}}
                            {{-- <td>{{ $data->title }}</td>
                            <td>
                                @foreach ($data->comments as $cmt)
                                    {{ $cmt->message }}
                                @endforeach
                            </td> --}}

                            <td>{{ $data->message }}</td>
                            <td>{{ $data->post->title }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>