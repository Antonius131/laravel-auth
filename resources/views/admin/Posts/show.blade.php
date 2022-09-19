@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-8 offset-2">
         <div class="row">
            <div class="col-12">
               <h6>{{ $post->author }}</h6>
               <h1>{{ $post->title }}</h1>
               <small>{{ $post->date }}</small>
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-12">
               <p>{{ $post->article_text }}</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection