<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Json table data</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <div class="container mt-5">
  <div class="row">
   <h1 class="text-center">User List!</h1>
   <table class="table mt-5 text-center">
    <thead>
     <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Profile Photo</th>
     </tr>
    </thead>
    <tbody>
     @foreach ($collection as $item)
     <tr>
      <th scope="row">{{ $item['id'] }}</th>
      <td>{{ $item['first_name'] }} {{ $item['last_name'] }}</td>
      <td>{{ $item['email'] }}</td>
      <td><img src="{{ $item['avatar'] }}" alt="profile photo"></td>
     </tr>
     @endforeach
    </tbody>
   </table>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>