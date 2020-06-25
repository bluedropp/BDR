@extends('layouts.app')

@section('content')
<div class="has-texted-centered columns">
    
        

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-white">#</th>
            <th scope="col" class="text-white">Pseudo</th>
            <th scope="col" class="text-white">Email</th>
            <th scope="col" class="text-white">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            
       
          <tr>
          <th scope="row" class="text-white">{{ $user->id }}</th>
            <td class="text-white">{{ $user->pseudo }}</td>
            <td class="text-white">{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                
                <form action="{{route('admin.users.destroy', $user)}}" method="post" class="float-left">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>





        

</div>
    
@endsection