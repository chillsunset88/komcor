@extends('layouts.app')
@section('title','Kelola User')

@section('content')
<h1 class="text-2xl font-bold mb-4">Users</h1>
<table class="w-full text-left border">
  <thead><tr><th class="p-2">Nama</th><th class="p-2">Email</th><th class="p-2">Role</th><th class="p-2">Aksi</th></tr></thead>
  <tbody>
    @foreach($users as $u)
    <tr>
      <td class="p-2">{{ $u->name }}</td>
      <td class="p-2">{{ $u->email }}</td>
      <td class="p-2">{{ $u->role }}</td>
      <td class="p-2">
        <form method="POST" action="{{ route('admin.users.updateRole',$u) }}">
          @csrf @method('PATCH')
          <select name="role" onchange="this.form.submit()" class="px-2 py-1 rounded">
            <option value="user" @selected($u->role==='user')>User</option>
            <option value="author" @selected($u->role==='author')>Author</option>
            <option value="admin" @selected($u->role==='admin')>Admin</option>
          </select>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="mt-4">
  {{ $users->links() }}
</div>
@endsection

     
