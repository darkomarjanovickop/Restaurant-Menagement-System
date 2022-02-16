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

        <form action="{{ url('uploadchef') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>

                <label for="name">Name</label>
                <input style="color: blue" type="text" name="name" id="name" required placeholder="Enter name">

            </div>
            <div>

                <label for="speciality">Speciality</label>
                <input style="color: blue" type="text" name="speciality" id="speciality" required
                    placeholder="Enter speciality">

            </div>
            <div>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </form>

        <table bgcolor="black" style="text-align: center">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Speciality</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img width="200" height="200" src="/chefimage/{{ $data->image }}" alt=""></td>
                <td><a href={{ url('/updatechef', $data->id) }}">Update</a></td>
            </tr>
            @endforeach
        </table>
        
    </div>

    @include("admin.adminscript")
</body>

</html>
