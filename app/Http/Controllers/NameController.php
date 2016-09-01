<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Requests;

  class NameController extends Controller {

    public function people() {
      return '{"1":"John","2":"Mary","3":"Steven"}';
    }
  }
