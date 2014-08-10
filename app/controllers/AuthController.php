<?php
/**
 * Created by PhpStorm.
 * User: pooyasaberian
 * Date: 8/9/14
 * Time: 9:15 PM
 */

class AuthController extends BaseController {

  public function showLogin() {
    // Check if we already logged in
    if (Auth::check())
    {
      // Redirect to homepage
      return Redirect::to('')->with('success', 'You are already logged in');
    }

    // Show the login page
    return View::make('auth/login');
  }

  public function postLogin() {
    // Get all the inputs
    // id is used for login, username is used for validation to return correct error-strings

    $credentials = Input::only('username', 'password');
    $remember = Input::has('remember');

    // Declare the rules for the form validation.
    $rules = array(
      'username'  => 'Required',
      'password'  => 'Required'
    );

    // Validate the inputs.
    $validator = Validator::make($credentials, $rules);

    // Check if the form validates with success.
    if ($validator->passes())
    {
      // Try to log the user in.
      if (Auth::attempt($credentials, $remember))
      {
        // Redirect to homepage
        return Redirect::to('')->with('success', 'You have logged in successfully');
      }
      else
      {
        // Redirect to the login page.
        return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
      }
    }

    // Something went wrong.
    return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
  }

  public function getLogout() {
    // Log out
    Auth::logout();

    // Redirect to homepage
    return Redirect::to('')->with('success', 'You are logged out');
  }


}