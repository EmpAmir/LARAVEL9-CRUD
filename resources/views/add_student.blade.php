<!doctype html>
<html lang="en">

<head>
    <title>Add Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">Add Student</div>
                        <div class="card-body">

                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="" class="form-control" placeholder="Phone">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Student</button>
                            </form>
                        </div>
                    </div>
                    @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">Student List</div>
                        <div class="card-body">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                {{-- edit button --}}
                                                <a href="{{ url('edit-student/' . $student->id) }}"
                                                    data-toggle="modal" data-target="#myModal"
                                                    class="btn btn-warning btn-sm">Edit </a>
                                                {{-- delete button --}}
                                                <a href="{{ url('delete-student/' . $student->id) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--Edit Modal-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('update-student/' . $student->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group mb-3">
                                        <label for="">Student Name</label>
                                        {{-- <input type="text" name="id" id="" value="{{ $student->id }}"> --}}
                                        {{-- <input type="text" name="name" id="name" value="{{ $student->name }}"
                                            class="form-control"> --}}

                                        <input type="text" name="name" value="{{ old('name') ?? $student->name }}"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Student Email</label>
                                        <input type="text" name="email" id="email" value="{{ $student->email }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Student Course</label>
                                        <input type="text" name="phone" id="phone" value="{{ $student->phone }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary">Update Student</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Edit Modal-->
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
