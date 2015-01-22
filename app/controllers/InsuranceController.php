<?php

class InsuranceController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Insurance Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome() {  
        $insurance_type = Input::get('insurance_type');
        return View::make("insurance/$insurance_type", array('input' => Input::all()));
    }

}
