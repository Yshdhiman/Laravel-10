<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Students Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($students as $student => $val)
                    <tr>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->age }}</td>
                        <td>{{ $val->email }}</td>
                        <td>{{ $val->city }}</td>
                        <td>{{ $val->phone }}</td>
                        <td>{{ $val->password }}</td>
                        <td><a href="{{ route('view.student', ['id' => $val->id]) }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
