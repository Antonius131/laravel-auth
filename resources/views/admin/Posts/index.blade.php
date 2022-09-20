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
                <th></th>
              </tr>
            </thead>
            <tbody>
               @forelse ($posts as $post)                  
                  <tr>
                     <td>
                        {{ $post->id }}
                     </td>
                     <td>
                        {{ $post->author }}
                     </td>
                     <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}">
                           {{ $post->title }}
                        </a>
                     </td>
                     <td>
                        {{ $post->date }}
                     </td>
                     <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>
                     </td>
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