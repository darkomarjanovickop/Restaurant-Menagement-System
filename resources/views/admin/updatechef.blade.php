<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar")

        <form action="{{ url('/updatefoodchef', $data->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="">Chef Name</label>
                <input style="color: blue" type="text" name="name" id="name" value="{{ $data->name }}">
            </div>
            <div>
                <label for="">Speciality</label>
                <input style="color: blue" type="text" name="speciality" id="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label for="">Old image</label>
                <img height="200" width="200" src="/chefimage/{{ $data->image }}" alt="">
            </div>
            <div>
                <label for="">New image</label>
                <input type="file" name="image" id="">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>

    </div>

    @include("admin.adminscript")
</body>

</html>
