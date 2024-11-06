<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterPenggunaController extends Controller
{
    //
}



// <?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;

// class MasterPenggunaController extends Controller
// {
//     public function index(Request $request)
//     {
//         $query = User::query();

//         if ($request->has('search')) {
//             $query->where('name', 'like', '%' . $request->search . '%')
//                   ->orWhere('email', 'like', '%' . $request->search . '%');
//         }

//         $users = $query->get();

//         return view('master-pengguna', compact('users'));
//     }
// }
