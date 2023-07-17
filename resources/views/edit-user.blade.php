<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Form User</title>
<style>
.container,
.row {
height: 100%;
min-height: 100%;
}
html,
body {
height: 100%;
}
</style>
</head>
<body>
<div class="container">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit User
</div>
<div class="card-body">
<form method="post" action="{{ route('users.update', $user->id) }}" id="myForm">
@method('PUT')
@csrf
<div class="form-group">
<label for="name">Name</label>
<input type="text" value="{{ $user->name }}" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" value="{{ $user->email }}" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="password">Password</label>
<input disabled type="password" value="{{ $user->password }}" name="password" class="form-control" id="password" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>