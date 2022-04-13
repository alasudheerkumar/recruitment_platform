<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //'passwd' => ['required', 'confirmed', Rules\Password::defaults()],
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'passwd' => ['required', 'string', 'max:255' ],
            'dob' => ['required', 'date', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'dno' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'fromDate' => ['required', 'string', 'max:255'],
            'toDate' => ['required', 'string', 'max:255'],
            'acceptTerms' => ['required', 'string', 'max:255'],
            'acceptPrivacy' => ['required', 'string', 'max:255'],
            'privilige' => ['required', 'string', 'max:255'],

        ]);

        $user = User::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->passwd),
            'date_Of_Birth' => $request->dob,
            'Phone' => $request->mobile,
            'nationality' => $request->nationality,
            'street' => $request->street,
            'doorNumber' => $request->dno,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'country' => $request->country,
            'fromDate' => $request->fromDate,
            'toDate' => $request->toDate,
            'termsAcceptance' => $request->acceptTerms,
            'privacyAcceptance' => $request->acceptPrivacy,
            'privilige' => $request->privilige,
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('success','Account Created');
        //return redirect('/index')->with('success','Account Created');
    }
    public function show()
    {
        $users = DB::select('select * from users');
        return $users;
        // return view('admin_pages.applicants',['users'=>$users]);
    }
}
