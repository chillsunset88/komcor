@extends('layouts.app')
@section('title','Register')

@section('content')
<div class="max-w-md mx-auto p-6 rounded-lg border dark:border-slate-700">
  <h1 class="text-2xl font-bold mb-4">Register</h1>
  <form method="POST" action="{{ route('register') }}" class="space-y-4">
    @csrf
    <input type="text" name="name" placeholder="Nama" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="Email" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Password" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required class="w-full px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800">
    <button class="w-full px-4 py-2 bg-slate-900 text-white dark:bg-white dark:text-slate-900 rounded-lg">Register</button>
  </form>
  <p class="mt-4 text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="underline">Login</a></p>
</div>
@endsection
