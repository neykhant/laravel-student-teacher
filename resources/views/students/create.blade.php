<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Create Student</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

            </ul>
        </div>
    </nav>
    <!-- navbar -->
    <style>
        .wrapper {
            width: 500px;
            max-width: 400px;
            margin: 10px auto;
        }

        /* body {
            padding-top: 5px;
        } */
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h1 class="text-center">Add new student</h1>
                    <hr>


                    @if(session('sms'))
                    <div class="alert alert-success">
                        {{ session('sms') }}
                    </div>
                    @endif

                    {{ Form::open(array('url' => '/store')) }}
                        <div class="form-group">
                            {{ Form::label('studentname', 'Student Name')}}
                            {{ Form::text('studentname', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('studentclass', 'Student Class')}}
                            {{ Form::text('studentclass', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('studentage', 'Student Age')}}
                            {{ Form::text('studentage', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{ Form::label('classteacher', 'Class Teacher')}}
                            {{ Form::text('classteacher', '', ['class' => 'form-control'])}}
                        </div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        {{ Form::reset('Reset', ['class' => 'btn btn-light'])}}
                    {{ Form::close() }}

                    <!-- <form method="post" action="{{ url('/store') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control" name="studentname" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Class</label>
                        <input type="text" name="studentclass" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword12">Student Age</label>
                        <input type="text" name="studentage" class="form-control" id="exampleInputPassword12">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword13">Class Teacher</label>
                        <input type="text" name="classteacher" class="form-control" id="exampleInputPassword13">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-light">Canel</button>
                    
                </form> -->
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