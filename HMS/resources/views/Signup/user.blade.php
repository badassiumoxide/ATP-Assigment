<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add User | HMS</title>
</head>
<body>
  <h1>ADD USER</h1>
  @if (Session::has('Register'))
    <h3>
      {{ Session::get('Register') }}
    </h3>
    <a href="{{ route('Admin.index') }}">BACK</a>
  @else
    <form method="post" action="{{ route('Admin.addUser') }}">
      {{ csrf_field() }}
      <table>
        <tr>
          <td><strong>Name</strong></td>
          <td><input type="text" name="name" id="name" placeholder="Mark Strong" required></td>
        </tr>
        <tr>
          <td><strong>Password</strong></td>
          <td><input type="password" name="password" id="password" placeholder="● ● ● ● ● ● ●  " required></td>
        </tr>
        <tr>
          <td><strong>Confirm Password</strong></td>
          <td><input type="password" name="cpassword" id="cpassword" placeholder="● ● ● ● ● ● ● " required></td>
        </tr>
        <tr>
          <td><strong>Contact</strong></td>
          <td><input type="text" name="contact" id="contact" placeholder="+978454057" required></td>
        </tr>
      </table>
      <br>
      @if (Session::has('Problem'))
        <h3>
          {{ Session::get('Problem') }}
        </h3>
      @endif
      <div style="padding-left: 50px;">
        <input type="submit" name="addButton" value="ADD">
        &nbsp;
        <button onclick="location.href = `{{ route('Admin.index') }}`;">BACK</button>
      </div>
    </form>
  @endif
</body>
</html>