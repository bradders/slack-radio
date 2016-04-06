<?php
namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller {

  public function index(Request $request) {

    $token = $request->input("token");
    $response = [];

    if( $token == "d5jLyxZFDwljzpgm6ydW2oo4" || $token == "5Orks22WyYqGRAFdYtc8TcvJ" ) {

      $response["response_type"] = "in_channel";

      $code = $request->input("text", "10-4");

      if( $code == "random" || $code == "?") {

        // Pick one at random
        $object = Code::orderByRaw("RAND()")->first();
        $response["text"] = "{$object->code}: {$object->definition}";

      } else {

        if($object = Code::where("code", "=", $code)->first()) {
          // Code found
          $response["text"] = "{$object->code}: {$object->definition}";
        } else {
          // Code not found
          $response["text"] = "Code not found";
        }

      }

    }

    return response()->json($response);

  }

}
