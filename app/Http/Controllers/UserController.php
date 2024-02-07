<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        // dd(User::all());
        $input = [
            'name' => 'Daksh',
            'email' => 'daksh6@gmail.com',
            'password' => bcrypt('123456'),
            'date_of_birth' => '05/07/2001'
        ];
  
        User::create($input);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show()
    {
        $user = User::all();
  
        dd($user->toArray());
    }
}