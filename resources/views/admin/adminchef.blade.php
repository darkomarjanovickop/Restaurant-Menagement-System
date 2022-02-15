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

    </div>

    @include("admin.adminscript")
</body>

</html>
