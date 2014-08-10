<?php
/**
 * Created by PhpStorm.
 * User: pooyasaberian
 * Date: 8/9/14
 * Time: 11:24 PM
 */

class ContactsController extends BaseController {

  public function getCreateContact() {
    // Show the add contact page
    return View::make('contact/add');
  }

  public function postCreateContact() {

    $rules = array(
      'first_name' => 'required',
      'email' => 'email'
    );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()) {
      return Redirect::to('contact/add')->withErrors($validation)->withInput();
    }

    $contact = new Contact;
    $contact->user_id = Auth::id();
    $contact->first_name = Input::get('first_name');
    $contact->last_name = Input::get('last_name');
    $contact->company = Input::get('company');
    $contact->cellphone = Input::get('cellphone');
    $contact->home_tell = Input::get('home_tell');
    $contact->work_tell = Input::get('work_tell');
    $contact->email = Input::get('email');
    $contact->website = Input::get('website');
    $contact->address_home = Input::get('address_home');
    $contact->address_work = Input::get('address_work');
    $contact->save();

    // Redirect to homepage
    return Redirect::to('')->with('success', 'New contact added successfully.');

  }

  public function showAllContacts() {
    $contacts = Contact::where('user_id', '=', Auth::id())
      ->orderBy('updated_at')
      ->get();

    // Show Contacts
    return View::make('contact/show_all', compact('contacts'));
  }

  public function deleteContact(Contact $contact) {
    if($contact->user_id == Auth::id()) {
      $contact->delete();
      // Redirect to homepage
      return Redirect::to('')->with('success', 'Contact deleted successfully.');
    }
    // Redirect to homepage
    return Redirect::to('')->with('error', 'Can not delete this contact');
  }
}