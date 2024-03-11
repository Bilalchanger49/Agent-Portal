<!DOCTYPE html>
<html lang="en">
<head>

  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

  <h2>Sign Up</h2>
  <form action="{{route('store')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" placeholder="Enter Full Name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="phone">Enter Phone Number:</label>
      <input type="number" class="form-control"  placeholder="Enter phone" name="phone">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>

    {{-- <button type="submit" class="btn btn-default">Submit</button> --}}
    <input type="submit">
  </form>
</div>

</body>
