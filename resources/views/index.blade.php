<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Hacker News</title>
</head>
<body>
    <div class="col-lg-12">
        <div class="main-card card">
            <div class="card-body"><h5 class="card-title">News list</h5>
                <table class="mb-0 table table-dark">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>User by</th>
                        <th>Type</th>
                        <th>Score</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $d['id'] }}</td>
                            <td>{{ $d['title'] }}</td>
                            <td>{{ $d['by'] }}</td>
                            <td>{{ $d['type'] }}</td>
                            <td>{{ $d['score'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{asset('js/app.js')}}"></script>