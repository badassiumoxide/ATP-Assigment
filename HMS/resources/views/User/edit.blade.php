<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Info | HMS</title>
</head>
<body>
  <form method="post" action="{{ route('User.editUser') }}">
    {{ csrf_field() }}
    <table>
      <tr>
        <td><strong>Name</strong></td>
        <td><input type="text" name="name" id="name" placeholder="{{ Session::get('info')->name }}" required></td>
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
        <td><input type="text" name="contact" id="contact" placeholder="Session::get('info')->contact" required></td>
      </tr>
    </table>
    <br>
      @if (Session::has('Problem'))
        <h3>
          {{ Session::get('Problem') }}
        </h3>
      @endif
    <div style="padding-left: 50px;">
      <input type="submit" name="editButton" value="EDIT">
      &nbsp;
      <button onclick="location.href = `{{ route('Custom.index') }}`;">BACK</button>
    </div>
  </form>
</body>
</html>