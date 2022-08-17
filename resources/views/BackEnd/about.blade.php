<!DOCTYPE html>
<html lang="en">
<head>
    @section('title','about')
</head>
@extends('BackEnd.master')
<body>

        @section('content')
        <form action="{{route('about_store','$abouts->id')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="about_desp" class="form-label">About-myself</label>
            <textarea class="form-control" id="about_desp" name="about_desp" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="title2" class="form-label">title2</label>
            <input type="text" class="form-control" id="title2"  name="title2" placeholder="title2">
          </div>
          <div class="mb-3">
            <label for="desp2" class="form-label">desp2</label>
            <textarea class="form-control" id="desp2" name="desp2" rows="3"></textarea>
          </div>
          <button type="submit" value="submit" class="btn btn-secondary">Submit</button>
        </form>


        @endsection


</body>
</html>








