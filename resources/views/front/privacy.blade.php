<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>{!! $condition->description1 !!}﻿</p>
        </div>
    </div>
</div>

</body>
</html>
