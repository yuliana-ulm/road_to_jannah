<!DOCTYPE html>
<html>
<head>
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-3">
        <div class="title text-center">
            <h1>Maamalkan Sunnah Nabi</h1>
        </div>
        
        <div class="img-container mb-3">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ asset('img/masjid.jpeg') }}" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="content">
        </div>
    </div>
</body>
</html>
