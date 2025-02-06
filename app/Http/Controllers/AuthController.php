<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginkasir(Request $request)
    {
        if(Auth::guard('kasir')->attempt([
                                    'kode_kasir' => $request->kode_kasir,
                                    'password' => $request->password]))
        {
            dd('Berhasil: '.Auth::guard('kasir')->user());
            Log::info('Login successful');
            //return redirect('/user/dashboard');
        }
        else{
            echo "Login Gagal";
            //return redirect('/user')->with('warning', 'NIS / Password Salah!');
        }
    }

    public function logoutkasir()
    {
        if(Auth::guard('kasir')->check()){
            Auth::guard('kasir')->logout();
            return redirect('/');
        }
    }

    public function loginadmin(Request $request)
    {
        if(Auth::guard('admin')->attempt([
                                    'username' => $request->username,
                                    'password' => $request->password]))
        {
            dd('Berhasil: '.Auth::guard('admin')->user());
            Log::info('Login successful');
            //return redirect('/user/dashboard');
        }
        else{
            echo "Login Gagal";
            //return redirect('/user')->with('warning', 'NIS / Password Salah!');
        }
    }

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Log the admin user out of the application.
     *
     * This method checks if the admin user is currently authenticated.
     * If authenticated, it logs out the admin user and redirects them to the homepage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

/******  e630b2c1-73a1-49da-afef-7ee2ee7ad7c5  *******/
    public function logoutadmin()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect('/');
        }
    }

}
