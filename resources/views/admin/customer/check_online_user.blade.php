@extends('admin.layouts.master')

@section('content')
    <div class="card-header">Users</div>

    {{-- @php $users = User::get(); @endphp --}}
<br><br><br>
    <table id="product-list" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{$user->name}}</th>
                        <td>{{$user->email}}</td>
                        <td>
                            @if(Cache::has('user-is-online-' . $user->id))
                                <span class="text-success"><img src="https://image.winudf.com/v2/image1/d2hhdHNlZW4uc3dpZnRzYWZlLm9yZy53aGF0c2Vlbl9pY29uXzE1NDc0MDI1MTBfMDU3/icon.png?w=&fakeurl=1" width="40px" alt=""> Online</span>
                            @else
                                <span class="text-secondary"><img src="http://cdn.onlinewebfonts.com/svg/img_107628.png" width="40px" alt=""> Offline</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
@push('css')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@endpush