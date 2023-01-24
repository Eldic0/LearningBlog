@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
         
          
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $category)
            
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            
            
            
          </td>
          
        </tr>
        @endforeach
    
      </tbody>
    </table>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Posts</h1>
    </div>

  <table class="table table-striped table-sm">
      <thead>
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
              
              </tr>
            </thead>
      <tbody>

          @foreach ($adminx as $post)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                

                @method('delete')
                @csrf

                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
              </form>

            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>

@endsection