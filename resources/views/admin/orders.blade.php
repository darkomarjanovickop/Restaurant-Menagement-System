<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar")

        <h1>Customers orders</h1>

        <table>
            <tr align="center">
                <td style="padding: 30px">Name</td>
                <td style="padding: 30px">Phone number</td>
                <td style="padding: 30px">Adress</td>
                <td style="padding: 30px">Food Name</td>
                <td style="padding: 30px">Price</td>
                <td style="padding: 30px">Quantity</td>
                <td style="padding: 30px">Total Price</td>
            </tr>
            @foreach ($data as $data)
            <tr align="center" style="background-color: black">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->adress }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}$</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity }}$</td>
            </tr>
            @endforeach
        </table>

    </div>

    @include("admin.adminscript")
</body>

</html>