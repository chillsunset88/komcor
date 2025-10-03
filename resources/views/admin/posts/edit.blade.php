@extends('layouts.app')
@section('title','Edit Post')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Post</h1>
<form method="POST" action="{{ route('posts.update',$post) }}" enctype="multipart/form-data" class="space-y-4">
  @csrf @method('PUT')
  <input type="text" name="title" value="{{ $post->title }}" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
  
  <select name="category_id" class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <option value="">Pilih Kategori</option>
    @foreach($categories as $c)
      <option value="{{ $c->id }}" @selected($post->category_id==$c->id)>{{ $c->name }}</option>
    @endforeach
  </select>
  
  <textarea name="content" rows="10" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">{{ $post->content }}</textarea>
  
  @if($post->cover_image)
    <img src="{{ asset('storage/'.$post->cover_image) }}" class="w-32 h-32 object-cover rounded mb-2">
  @endif
  <input type="file" name="cover_image" class="w-full">
  
  <select name="status" class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <option value="draft" @selected($post->status==='draft')>Draft</option>
    <option value="published" @selected($post->status==='published')>Published</option>
  </select>
  
  <button class="px-4 py-2 bg-slate-900 text-white rounded-lg">Update</button>
</form>
@endsection
