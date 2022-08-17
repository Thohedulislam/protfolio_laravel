<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      @section('title','ADDskill')
</head>
@extends('BackEnd.master')
<body>

    @section('content')
    <form action="{{route('skill_store','$Dskills->id')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="skills_desp" class="form-label">skills_desp</label>
        <textarea class="form-control" id="skills_desp" name="skills_desp" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="s_title" class="form-label">s_title</label>
        <input type="text" class="form-control" id="s_title"  name="s_title" placeholder="Skill title">
      </div>
      <div class="mb-3">
        <label for="perscnts" class="form-label">perscnts</label>
        <input type="text" class="form-control" id="perscnts"  name="perscnts" placeholder="perscnts">
      </div>
      <button type="submit" value="submit" class="btn btn-secondary">Submit</button>
    </form>
    @endsection





</body>
</html>
