<!DOCTYPE html>
<html>
<head>
    <title>Gửi mail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Gửi Mail</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <form action="" method="post">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Tên" />
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <label for="">Comments</label>
                <textarea name="content" class="form-control" placeholder="Nhập mail cần gửi"></textarea>
            </div>
            <div class="send">
                <button type="submit" class="btn btn-success">Gửi</button>
            </div>
            @csrf
        </form>
    </div>
    
</body>
</html>