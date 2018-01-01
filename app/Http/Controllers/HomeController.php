<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->get('superadmin_login') == true 
            || $request->session()->get('admin_login') == true 
            || $request->session()->get('user_login') == true) {
            return view('index', [
                    'name' => $this->getUserName(),
                    'user' => $this->getUser()
                ]);
        } else {
            return view('login');
        }
    }

    public function login(Request $request)
    {
      
        $email = $request->email;
        $password = $request->password;
        // echo $password;
        // echo sha1($password);die;
        $user = DB::table('user')
            ->where([
                ['email', $email],
                ['password', sha1($password)]
            ])->first();
        if ($user && $user->type == 2) {
            $superadmin_id = $user->id;
            $request->session()->push('superadmin_login', true);
            $request->session()->push('superadmin_id', $superadmin_id);
            // var_dump($request->session()->get('superadmin_login'));die;
            return \redirect()->to('/home');

        } else {
            if ($user && $user->type == 1) {
                $admin_id = $user->id;
                $admin_login = TRUE;

                $request->session()->push('admin_id', $admin_id);
                $request->session()->push('admin_login', $admin_login);

                return redirect()->action('HomeController@home');
            } else {
                if ($user) {
                    $id = $user->id;
                    $user_login = TRUE;

                    $request->session()->push('user_id', $id);
                    $request->session()->push('user_login', $user_login);

                    return redirect()->action('HomeController@home');
                } else {
                    $request->session()->flash('message', 'Invalid Email/Password');
                    return redirect()->action('HomeController@index');
                }
            }
        }
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->flash('message', 'Logged out successfully');
        return redirect()->action('HomeController@index');
    }

    public function home(Request $request)
    {
        $superadmin = $request->session()->get('superadmin_login');
        $admin = $request->session()->get('admin_login');
        $user = $request->session()->get('user_login');
        if (!$superadmin || !$admin || !$user) {
            return redirect()->action('HomeController@index');
        }

        return view('index');
    }

    public function access_denied()
    {
        return view('denied');
    }

}
