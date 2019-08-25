<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login | Job Portal</title>
</head>
<body>
  <h1>&nbsp; &nbsp; &nbsp; &nbsp;LOGIN</h1>
  <form method="post">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>
          Username: 
        </td>
        <td>
          <input type="text" name="username" placeholder="Enter username" required>
        </td>
      </tr>
      <tr>
        <td>
          Password:
        </td>
        <td>
          <input type="password" name="password" placeholder="Enter password" required>
        </td>
      </tr>
    </table>
    @if (Session::has('Error'))
      <label>
        <strong>
          <br>
          &nbsp;
          {{ Session::get('Error') }}
        </strong>
      </label>
      <br>
    @endisset
    <br>
    <div style="padding-left: 90px;">
      <input type="submit" name="login" value="LOGIN">
    </div>
  </form>
</body>
</html>