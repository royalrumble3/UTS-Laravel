<!-- resources/views/ujian/index.blade.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Project</title>
</head>
<body>
    <h1>DATA DIRI</h1>
    <p>Nama: Niko Riant Cahyono</p>
    <p>NIM: 21104410083</p>
    <p>Jurusan: Teknik Informatika</p>
    <p>Semester: 5</p>
    <h2 id="session"></h2>
    <!-- In any Blade view file -->
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<script>
<!-- Menampilkan token CSRF dalam script JavaScript -->
<script>
    var csrfToken = '{{ csrf_token() }}';
    console.log(csrfToken);
</script>

<!-- Menampilkan token CSRF dalam input hidden -->



</body>
</html>
