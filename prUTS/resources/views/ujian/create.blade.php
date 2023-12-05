<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center">FORM</h3>
        <form method="post"
              action="{{ url('/uts') }}">
            @csrf
            <div class="mb-3">
                <label for="name"
                       class="form-label">Name</label>
                <input type="text"
                       class="form-control"
                       name="name"
                       value="Niko">
            </div>
            <div class="mb-3">
                <label for="name"
                       class="form-label">NIM</label>
                <input type="text"
                       class="form-control"
                       name="NIM"
                       value="21104410083">
            </div>
            <div class="mb-3">
                <label for="prodi"
                       class="form-label">prodi</label>
                <input type="text"
                       class="form-control"
                       name="prodi"
                       value="Teknik Informatika">
            </div>
            <div class="mb-3">
                <label for="semester"
                       class="form-label">semester</label>
                <input type="text"
                       class="form-control"
                       name="semester"
                       value="5">
            </div>

            <div class="mb-3">
                <button type="submit"
                        class="btn btn-success d-block w-100">submit!</button>
            </div>
        </form>
    </div>
    <?php
    $_SESSION["kunci"] = "data berhasil ditambahkan";
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous">
    </script>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
</body>
</html>
