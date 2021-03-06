@extends('admin.layouts.master')
<br>
<br>
    @section('content')
    <br><br>
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav> --}}
        <h1 style="text-align: center"> Danh sách  tài khoản người dùng</h1>
            {{-- show message --}}
            @if(Session::has('success'))
                <p class="text-success">{{ Session::get('success') }}</p>
            @endif

            {{-- show error message --}}
            @if(Session::has('error'))
                <p class="text-danger">{{ Session::get('error') }}</p>
            @endif
            {{-- search link --}}
            @include('admin.user._search')
            
            {{-- <button class="btn btn-warning" ><a href="{{route('admin.importExportView')}}">Export File Admin</a></button> --}}
           
           <br> <p ><a  class="btn btn-outline-success" href="{{ route('admin.user.create') }}">Tạo tài khoản cho người dùng</a></p>
            <table id="user-list" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>role_id</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($admins as $key=> $admin)
                        <tr>
                            <th>{{$key+1}}</th>
                            <th>{{$admin->name}}</th>
                            <th>{{$admin->email}}</th>
                            <th>{{$admin->role_id}}</th>
                            <th> @include('admin.user.alert_admin_status') </th>
                            <th>{{$admin->created_at}}</th>
                            
                            {{-- <td><a class="btn btn-outline-success" href="{{ route('admin.user.show', $admin->id) }}">Detail</a></td> --}}
                            <td><a class="btn btn-outline-secondary" href=" {{ route('admin.user.edit', $admin->id) }}"> Đổi Mật Khẩu</a></td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $admin->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-outline-danger" onclick="return confirm('Are you sure DELETE User?')" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        {{$admins->links()}}
    @endsection    