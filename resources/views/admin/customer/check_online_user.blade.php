@extends('admin.layouts.master')

    @section('content')
        <div class="card-header">Users</div>
        @php $users = DB::table('users')->paginate(8); @endphp
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
                                @if(Cache::has('user-is-online-' .$user->id))
                                    <span class="text-success">Online</span>
                                @else
                                    <span class="text-secondary">Offline</span>
                                @endif
                                {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        {{$users->links()}}
    @endsection
@push('css')
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@endpush