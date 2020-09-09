<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>List Teacher</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="navbar-brand" href="{{ url('/index') }}">List of Students</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/teachers/create') }}">Create <span class="sr-only">(current)</span></a>
                </li>
                
            </ul>
        </div>
    </nav>
    <!-- navbar -->
    <style>
        .wrapper2 {
            width: 800px;
            max-width: 700px;
            margin: 10px auto;
        }

        /* body {
            padding-top: 50px;
        } */
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="wrapper2">

                    <h1 class="text-center">List of Teacher</h1>
                    <hr>
                    @if(session('sms'))
                    <div class="alert alert-success">
                        {{ session('sms') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col-1"> Teacher Name</th>
                                <th scope="col-1">Teacher of Class</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td><a href="">{{ $teacher->teacher_name }}</a></td>
                                <td>{{$teacher->classteacher_of }}</td>
                                <td>{{$teacher->salary }}</td>
                                <td>
                                    <a href="{{ url('/teachers/edit', $teacher->teacher_id) }}" class="btn btn-secondary">edit</a>
                                    <a href="#"
                                        class="btn btn-danger"
                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit(); "
                                        >delete</a>
                                    <form style="display:none" id="delete-form"
                                        method="post" action="{{ url('/teachers/delete', $teacher->teacher_id) }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>