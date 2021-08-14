@extends('admin.layouts.master')


@section('content')
<br><br><br><br>
    @include('admin.customer.search')
    {{-- <button class="btn btn-warning" ><a  href="{{route('admin.customerExcel')}}">Export File Customer</a></button> --}}
        <table id="product-list" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    {{-- <th>password</th> --}}
                    <th>SDT</th>
                    <th>Ngày tạo </th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=> $user)
                    <tr>
                        <th>{{$key+1}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>

                        {{-- <th>{{$user->password}}</th> --}}
                        <th>{{$user->phone_number}}</th>
                        <th>{{$user->created_at}}</th>
                        <td>
                            <form action="{{ route('admin.customer.destroy', $user->id) }}" method="post" onclick="return confirm('Are you sure DELETE ?')>
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
@endsection        