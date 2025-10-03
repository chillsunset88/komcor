@extends('layouts.app')
@section('title','Buat Post')

@section('content')
<h1 class="text-2xl font-bold mb-4">Buat Post</h1>
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="space-y-4">
  @csrf
  <input type="text" name="title" placeholder="Judul" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
  
  <select name="category_id" class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <option value="">Pilih Kategori</option>
    @foreach($categories as $c)
      <option value="{{ $c->id }}">{{ $c->name }}</option>
    @endforeach
  </select>
  
  <textarea name="content" rows="10" placeholder="Isi konten" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800"></textarea>
  
  <input type="file" name="cover_image" class="w-full">
  
  <select name="status" class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <option value="draft">Draft</option>
    <option value="published">Published</option>
  </select>
  
  <button class="px-4 py-2 bg-slate-900 text-white rounded-lg">Simpan</button>
</form>
@endsection
