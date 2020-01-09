@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('role')}}" class="btn btn-success">Add Role</a>
                <a href="{{route('user')}}" class="btn btn-primary">Add User Role</a>
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Roles</th>
                                <th>Permissions</th>
                                <th>User</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        @if(count($role->permissions)>0)
                                            @foreach($role->permissions as $permission)
                                                <span class="badge badge-success">{{$permission->name}}</span>
                                            @endforeach
                                        @else
                                            <span class="badge badge-danger">No permission</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul>
                                            @if(count($role->users)>0)
                                                @foreach($role->users as $user)
                                                    <li class="badge badge-success">{{$user->name}}</li>
                                                @endforeach
                                            @else
                                                <li class="badge badge-danger">No user</li>
                                            @endif
                                        </ul>
                                    </td>
                                    <td><a href="" class="badge badge-warning">Edit</a></td>
                                    <td><a href="" class="badge badge-danger">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
