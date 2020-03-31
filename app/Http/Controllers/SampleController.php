<?php
namespace App\Http\Controllers;

class SampleController extends \App\Http\Controllers\Controller {


    public function index() {
        return view('welcome');
    }
    public function api_user(Request $request) {
        return $request->user();
    }
    public function api_ping() {
        return json_encode(['status' => 'ok', 'msg' => 'pong']);
    }
}

