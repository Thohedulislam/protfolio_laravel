<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      @section('title','about-list')
</head>
@extends('BackEnd.master')
<body>

    @section('content')
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">about_desp</th>
                <th scope="col">title2</th>
                <th scope="col">desp2</th>
                <th scope="col"> update</th>
                <th scope="col">Action</th>
          </tr>
        </thead>
            <tbody>

                @foreach($date as $key => $abouts)
                    <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $abouts->about_desp }}</td>
                    <td>{{ $abouts->title2 }}</td>
                    <td>{{ $abouts->desp2 }}</td>
                    <td>
                       <a href="{{route('about_destroy',$abouts->id)}}" class="btn btn-sm btn-danger" >delete</a>
                       <a href="#" class="btn btn-sm btn-success">Update</a>
                    </td>
                    <td>
                        @if ( $abouts->status == 1 )
                        <a href="">Active</a>
                            @else
                            <a href="" >Deactive</a>
                         @endif
                    </td>
              </tr>
        </tbody>

    @endforeach
</table>
    @endsection





</body>
</html>
