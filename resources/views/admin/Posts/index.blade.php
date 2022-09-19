@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-8 offset-2">
         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($posts as $post)                  
                  <tr>
                     <td>{{ $post->id }}</td>
                     <td>{{ $post->author }}</td>
                     <td>{{ $post->title }}</td>
                     <td>{{ $post->date }}</td>
                  </tr>
               @empty
                  <h2 class="text-center">No posts to show</h2>
               @endforelse
            </tbody>
          </table>
      </div>
   </div>
</div>
@endsection