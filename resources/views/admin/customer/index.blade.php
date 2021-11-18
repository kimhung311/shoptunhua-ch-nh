@extends('admin.layouts.master')


@section('content')
<br><br><br><br>
    {{-- @include('admin.customer.search') --}}
    <div class="input-group mb-3 col-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Tiềm Kiếm</span>
        <input type="text" name="keyword" id="keyword"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    {{-- <button class="btn btn-warning" ><a  href="{{route('admin.customerExcel')}}">Export File Customer</a></button> --}}
        <table id="product-list " class="table table-bordered table-hover table-striped table-responsive">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>SDT</th>
                    <th>Ngày tạo </th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody id="list_user">
                @foreach ($users as $key=> $user)
                    <tr>
                        <th>{{$key+1}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->phone_number}}</th>
                        <th>{{$user->created_at}}</th>
                      
                        <td>
                            <form action="{{ route('admin.customer.destroy', $user->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" onclick="delete({{ $user->id }})" name="submit" value="Delete"  class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}

    
@endsection    
@push('js')

    <script type="text/javascript">

        $(document).ready(function(){
            $('#keyword').on('keyup change',function(){
                var keyword = $(this).val();
                $.ajax({
                    type: "get",
                    url:"{{ route('admin.customer.search') }}",
                    data:{
                        keyword: keyword,
                    },
                    dataType: "json",
                    success: function(response){
                        $('#list_user').html(response);
                        $('#insert_data')[0].reset();
                    }
                });
            });  
        });
        // function destroy($id) {
        //     if(confirm('Are you sure you want to delete this item?')){
        //         $.ajax({
        //             url: '/delete/'+id,
        //             type: 'DELETE',
        //             data: {
        //                 _token: $("input[name=token]").val(),
        //                 success: function(response){
        //                   $("id="+id).remove();  
        //                 }
        //             }
        //         })
        //     }
        // }
    </script>
    
@endpush
  