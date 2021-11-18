<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use PDOException;

class CustomerController extends Controller
{
 

    public function userOnlineStatus()
    {
        $data = [];
        $users = User::get();
    
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
        }
        $data['users'] = $users;

      return view('admin.customer.check_online_user',$data);
    
    }

    public function index(Request $request){
        
        $data = [];
        // get list data of table products
        $users = User::orderBy('id', 'desc')->paginate(8);
        // add new param to search
        // search post name
        if (!empty($request->name)) {

            $users = User::where('name', 'like', '%' . $request->name . '%')
                    ->orderBy('id', 'desc')
                    ->paginate(8);
            // dd($users);
        }
        if (!empty($request->date)) {
            $users = User::where('created_at', 'like', '%' . $request->date . '%')
                    ->orderBy('id', 'desc')
                    ->paginate(8);
        }

        $data['users'] = $users;
        
        return view('admin.customer.index',$data);
    }

    public function searchcustommer(Request $request) {
        $output = '';
        $users  =   User::where('name', 'LIKE','%' .$request->keyword.'%')
                        ->orwhere('email', 'LIKE','%' .$request->keyword.'%') 
                        // ->orwhere('phone_number', 'LIKE','%' .$request->keyword.'%')    
                        ->orwhere('created_at', 'LIKE','%' .$request->keyword.'%')  
                        ->get();
        foreach ($users as $key=> $user) {
            $output .= 
            '<tr>
                <th>'.$user->id.'</th>
                <th>'.$user->name.'</th>
                <th>'.$user->email.'</th>
                <th>'.$user->phone_number.'</th>
                <th>'.$user->created_at.'</th>
            </tr>';
        }
        return response()->json($output);
    }

   
    public function destroy($id){
        // dd(123);
        DB::beginTransaction();
        try{
            $user = User::find($id);
            $user->delete();
            DB::commit();
            return redirect()->route('admin.customer.index')
            ->with('success', 'Delete Category successful!');
            return response()->json(['success' => 'Delete custumer successfully!']);
        }catch(PDOException $ex){
            DB::rollBack();
            return redirect()->back()->with(' delete error', $ex->getMessage());
        }
    }

}