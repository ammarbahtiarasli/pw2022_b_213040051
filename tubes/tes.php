<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 5</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />


    <!-- include summernote css/js-->
    <link href="./summernote/summernote-bs4.css" rel="stylesheet">


</head>

<body>
    <div id="summernote"></div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    </script>
</body>
<script src="./summernote/summernote-bs4.min.js"></script>

</html>
