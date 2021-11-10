@extends('user.main')
@section('logout')
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-md-4">
    @csrf
    <button href="#" class=" btn-danger btn-sm">
     Logout
    </button>
</form>
@endsection
