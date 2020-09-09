<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Show Student</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="navbar-brand" href="{{ url('/index') }}">List of Students</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        </div>
    </nav>

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

                    <h1 class="text-center">Show of a Student</h1>
                    <hr>
                
                    <div class="card col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->student_name }}</h5>
                            <h6 class="card-title">{{ $student->student_class }}</h6>
                            <h7 class="card-title">{{ $student->student_age }}</h7>
                            <h5 class="card-text">{{ $student->class_teacher }}</h5>
                            <p class="cart-text"></p>
                            <a href="{{ url('edit', $student->id ) }}" class="btn btn-primary">Edit</a>
                            <a href="#"
                            onclick="event.preventDefault(); document.getElementById('delete-form').submit(); "
                            class="btn btn-danger">Delete</a>
                            <form id="delete-form" action="{{ url('/delete/'. $student->id ) }}"
                            method="post" style="display: none " >
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>
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