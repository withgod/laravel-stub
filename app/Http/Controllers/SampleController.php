<?php

class SampleController extends \App\Http\Controllers\Controller {


    public function index() {
        return view('welcome');
    }
    public function api_user(Request $request) {
        return $request->user();
    }
}

