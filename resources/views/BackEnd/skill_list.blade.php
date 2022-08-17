<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      @section('title','skills-list')
</head>
@extends('BackEnd.master')
<body>

    @section('content')
    <table class="table table-success table-striped table-broader">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">skills_desp</th>
                <th scope="col">s_title</th>
                <th scope="col">perscnts</th>
                <th scope="col"> update</th>
                <th scope="col">Action</th>
          </tr>
        </thead>
            <tbody>

                @foreach($skls as $key => $Dskills)
                    <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $Dskills->skills_desp }}</td>
                    <td>{{ $Dskills->s_title }}</td>
                    <td>{{ $Dskills->perscnts }}</td>
                    <td>
                       <a href="{{route('skills_destroy',$Dskills->id)}}" class="btn btn-sm btn-danger" >delete</a>
                       <a href="#" class="btn btn-sm btn-success">Update</a>
                    </td>
                    <td>
                        @if ( $Dskills->status == 1 )
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
