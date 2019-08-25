<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin | HMS</title>
</head>
<body>
  <h1>ADMIN</h1>
  <a href="{{ route('Admin.addUserPage') }}">ADD USER</a>  
  &nbsp; || &nbsp;
  <a href="{{ route('Logout.index') }}">LOG OUT</a>
  <br>
  <br>
  <h3>USER LIST</h3>
  <table border="1">
    <tr>
      <th>NAME</th>
      <th>CONTACT</th>
      <th>BLOCKED</th>
      <th>ACTIONS</th>
    </tr>
    @foreach (Session::get('users') as $data) 
      <tr>
        <td>{{ $data->name }}</td>
        <td>{{ $data->contact }}</td>
        <td>{{ $data->is_blocked }}</td>
        <td>
          <a href="{{ route('Admin.banUser', $data->id) }}">BAN</a>
          &nbsp;
          <a href="{{ route('Admin.deleteUser', $data->id) }}">DELETE</a>
        </td>
      </tr>
    @endforeach
  </table>
</body>
</html>