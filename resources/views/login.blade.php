<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
=======
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
>>>>>>> a7cb6910be5f53456e4911ca904e852d6abc7a53
</head>
<body>

<div class="container">
<<<<<<< HEAD
  <h2>Sign In</h2>
  <form action="{{route('logincheck')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="paswsword">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
=======
    <h2>Sign In</h2>
    <form action="{{route('logincheck')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="paswsword">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
>>>>>>> a7cb6910be5f53456e4911ca904e852d6abc7a53
