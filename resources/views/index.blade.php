@extends('layouts.app')
@section('section')
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@if(isset($users) && $users != null)
	  	@foreach($users as $key => $user)
	    <tr>
	      <td>{{ $user->first_name }}</td>
	      <td>{{ $user->last_name }}</td>
	      <td><button type="button" class="btn btn-danger delete_record" data-route="{{ route('admin.user.destroy',\Crypt::encryptString($user->_id)) }}">Delete</button> <a href="{{route('admin.user.edit',\Crypt::encryptString($user->_id))}}" class="btn btn-warning">Edit</a></td>
	    </tr>
	    @endforeach
	    @endif
	  </tbody>
	</table>
</div>
@endsection
