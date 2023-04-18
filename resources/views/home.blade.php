@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id_gallery</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Tech used</th>
        <th scope="col">Project URL</th>
        <th scope="col">Git Repo</th>
        <th scope="col">Responsibility</th>
        <th scope="col">Challenge</th>
        <th scope="col">Accomplishment</th>
        <th scope="col">Lesson Learned</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
          <th scope="row">1</th>
          <td>{{ $product->id_gallery }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->tech_used }}</td>
          <td>{{ $product->project_url }}</td>
          <td>{{ $product->git_repo }}</td>
          <td>{{ $product->responsibility }}</td>
          <td>{{ $product->challenge }}</td>
          <td>{{ $product->accomplishment }}</td>
          <td>{{ $product->lesson_learned }}</td>
          <td>
            <a href="">edit</a>
            <a href="">hapus</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop