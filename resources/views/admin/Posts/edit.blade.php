@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row py-5">
         <div class="col-8 offset-2">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
               @csrf
               @method('PUT')
               @include('admin.Posts.includes.form')
               <button type="submit" class="btn btn-primary">Edit post</button>
            </form>
         </div>
      </div>
   </div>
@endsection