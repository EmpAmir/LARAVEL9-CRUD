<!doctype html>
<html lang="en">

<head>
    <title>Edit Student</title>
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

                            <form action="{{ url('update-student/' . $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="text" name="name" id="" value="{{ $item->name }}"
                                        class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="" value="{{ $item->email }}"
                                        class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="" value="{{ $item->phone }}"
                                        class="form-control" placeholder="Phone">
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
