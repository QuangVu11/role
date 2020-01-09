@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('role.new')}}" method="post">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @csrf
                    <div class="card">
                        <div class="card-header">Roles</div>
                        <div class="card-body">
                            <select name="role_id" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer"><input type="submit" class="btn btn-success" name="add_role"
                                                        value="Add Roles"/></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Permissions</div>
                        <div class="card-body">
                            <ul>
                                @foreach ($permissions as $permission)
                                    <li><input type="checkbox" name="permissions[]"
                                               value="{{$permission->id}}">{{$permission->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
