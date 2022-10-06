@extends('layouts.app')


@section('content')

    <h1>Ini Halaman Extracurricular</h1>
    <h3>Extracurricular List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
