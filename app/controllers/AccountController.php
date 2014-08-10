<?php
/**
 * Created by PhpStorm.
 * User: pooyasaberian
 * Date: 8/9/14
 * Time: 10:19 PM
 */

class AccountController extends BaseController {

  public function getCreateAccount() {
    // Show the create account page
    return View::make('account/create');
  }

  public function postCreateAccount() {

    $rules = array(
      'username' => 'required|alpha_num|unique:users,username',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|min:8|confirmed',
    );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()) {
      return Redirect::to('account/create')->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
    }

    $user = new User;

    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->email = Input::get('email');

    $user->save();

    Auth::attempt(Input::only('username', 'password'));

    // Redirect to homepage
    return Redirect::to('')->with('success', 'You account created successfully.');
  }
}