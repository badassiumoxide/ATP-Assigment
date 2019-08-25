<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ Session::get('info')->name }} | HMS</title>
</head>
<body>
  <h1>USER INFO</h1>
  <br>
  <a href="{{ route('User.editUserPage') }}">EDIT INFO</a>  
  &nbsp; || &nbsp;
  <a href="{{ route('Logout.index') }}">LOG OUT</a>
  <br>
  <br>
  <table border="1">
    <tr>
      <td>ID</td>
      <td>{{ Session::get('info')->id }}</td>
    </tr>
    <tr>
      <td>NAME</td>
      <td>{{ Session::get('info')->name }}</td>
    </tr>
    <tr>
      <td>CONTACT</td>
      <td>{{ Session::get('info')->contact }}</td>
    </tr>
    <tr>
      <td>BLOCKED</td>
      <td>{{ Session::get('info')->is_blocked }}</td>
    </tr>
  </table>
</body>
</html>