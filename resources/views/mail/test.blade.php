<!DOCTYPE html>
<html>
<head>
    <title>Gửi mail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Tên</label>
            <input type="text" name="name" placeholder="Tên" />
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Email" />
        </div>
        <div>
            <label for="">Comments</label>
            <textarea name="content" placeholder="Nhập mail cần gửi"></textarea>
        </div>
        <div class="send">
            <button type="submit">Gửi</button>
        </div>
        @csrf
    </form>
</body>
</html>