@extends('layout.app', ['current' => 'home'])

@section('body')
    
<div class="col-lg-12">
    <div class="main-card card">
        <div class="card-body"><h5 class="card-title">Top 10 New Job/Stories</h5>
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

@endsection