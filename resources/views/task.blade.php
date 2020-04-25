<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="text-center">
        <h1>Daily tasks</h1>
        <div class="row">
            <div class="col-md-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
                <form action="/saveTask" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="task" , placeholder="Enter your task">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="button" class="btn btn-warning" value="Clear">
                </form>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <th>Action</th>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                                @if($task->isCompleted)
                                    <button class="btn btn-success">Completed</button>
                                @else
                                    <button class="btn btn-warning">Not completed</button>
                                @endif
                            </td>
                            <td>
                                @if(!$task->isCompleted)
                                    <a href="/markAsCompleted/{{$task->id}}" class="btn btn-primary"> Mark as
                                        completed</a>
                                @else
                                    <a href="/markAsNotCompleted/{{$task->id}}" class="btn btn-danger"> Mark as not
                                        completed</a>
                                @endif
                                    <a href="/deleteTask/{{$task->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
</body>
</html>
