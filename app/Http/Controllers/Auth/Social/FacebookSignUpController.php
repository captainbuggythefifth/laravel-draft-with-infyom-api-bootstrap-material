<?php

namespace App\Http\Controllers\Auth\Social;

use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Socialite;

class FacebookSignUpController extends Controller{

    function create(){
        return view('social-media/facebook/create');
    }

    function store(Request $request){


        $iUserID = Auth::user()->id;
        $aUser = $request->all();
        $aUser['status'] = User::USER_STATUS_NOT_VERIFIED;

        User::where('id', $iUserID)->first()->update($aUser);

        Flash::success('Alright! Let em be rollin!');

        redirect('/');
    }
}