<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Teacher</title>
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
                    
                    <h1 class="text-center">Edit Teacher</h1>
                    <hr>
                    @if(session('sms'))
                    <div class="alert alert-success">
                        {{ session('sms') }}
                    </div>
                    @endif
                    <form method="post" action="{{ url('/teachers/update/'. $teacher->teacher_id ) }}" >
                    
                        @csrf
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Teacher Name</label>
                            <input value="{{ $teacher->teacher_name }}" type="text" class="form-control" name="teacher_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Class Teacher</label>
                            <input value="{{ $teacher->classteacher_of }}" type="text" name="classteacher_of" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword12">Salary</label>
                            <input value="{{ $teacher->salary }}" type="text" name="salary" class="form-control" id="exampleInputPassword12">
                        </div>
                        <button type="submit" class="btn btn-secondary">Update</button>
                        <a href="{{ url('/teachers/index') }}" class="btn btn-light">Cancel</a>
                        
                    </form>
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