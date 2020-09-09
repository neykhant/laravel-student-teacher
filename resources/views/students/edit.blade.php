<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Student</title>
</head>

<body>

    <style>
        .wrapper {
            width: 500px;
            max-width: 400px;
            margin: 10px auto;
        }

        body {
            padding-top: 50px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="wrapper">

                    <h1 class="text-center">Edit student</h1>
                    <hr>
                    @if(session('sms'))
                    <div class="alert alert-success">
                        {{ session('sms') }}
                    </div>
                    @endif

                    {{ Form::model($student, array('url' => '/update/'. $student->id )) }}
                    @method('put')
                    <div class="form-group">
                        {{ Form::label('studentname', 'Student Name')}}
                        {{ Form::text('studentname', $student->student_name, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('studentclass', 'Student Class')}}
                        {{ Form::text('studentclass', $student->student_class, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('studentage', 'Student Age')}}
                        {{ Form::text('studentage', $student->student_age, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('classteacher', 'Class Teacher')}}
                        {{ Form::text('classteacher', $student->class_teacher, ['class' => 'form-control'])}}
                    </div>
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {{ Form::reset('Cancel',  ['class' => 'btn btn-light'])}}

                    {{ Form::close() }}

                    <!-- <form method="post" action="{{ url('/update/'. $student->id ) }}" >
                   
                        @csrf
                        @method('put')
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student Name</label>
                            <input value="{{ $student->student_name }}" type="text" class="form-control" name="studentname" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Student Class</label>
                            <input value="{{ $student->student_class }}" type="text" name="studentclass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword12">Student Age</label>
                            <input value="{{ $student->student_age }}" type="text" name="studentage" class="form-control" id="exampleInputPassword12">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword13">Class Teacher</label>
                            <input value="{{ $student->class_teacher }}" type="text" name="classteacher" class="form-control" id="exampleInputPassword13">
                        </div>
                        <button type="submit" class="btn btn-danger">Edit</button>
                        <a href="{{ url('show', $student->id ) }}" class="btn btn-secondary">Cancel</a>
                        
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