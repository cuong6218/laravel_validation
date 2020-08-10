<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{Route('customers.create')}}">Add customer</a>
        <table>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <td colspan="2"></td>
            </tr>
            @forelse($customers as $key => $customer)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->age}}</td>
                    <td>{{$customer->email}}</td>
                    <td><a href="{{Route('customers.edit', $customer->id)}}">Update</a> </td>
            @empty
                <td>No data</td>
                </tr>
            @endforelse
        </table>
    </div>
</body>
</html>
