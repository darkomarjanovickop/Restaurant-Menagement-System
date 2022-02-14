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

        <div style="position: relative; top: 60px; right:-150px">
            <form action="{{ url('uploadfood') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="title">Title</label>
                    <input style="color: blue" type="text" name="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input style="color: blue" type="number" name="price" placeholder="Price" required>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label for="description">Description</label>
                    <input style="color: blue" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>

            <div>
                <table>
                    <tr bgcolor="black">
                        <th style="padding: 30px">Food name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                    </tr>

                    @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img height="200" width="250" src="/foodimage/{{ $data->image }}" alt=""></td>
                        <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>

    </div>

    @include("admin.adminscript")
</body>

</html>
