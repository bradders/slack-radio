<?php
namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller {

  public function index(Request $request) {

    $response = [];

    if( $request->input("token") == env("SLACK_TOKEN") ) {

      $response["response_type"] = "in_channel";

      $code = $request->input("text", "10-4");

      if( $code == "random" ) {

        // Pick one at random
        $object = Code::orderByRaw("RAND()")->first();
        $response["text"] = "{$object->code}: {$object->definition}";

      } else if( $code == "help" ) {

        // List all codes
        $response["response_type"] = "ephemeral";
        $response["text"] = "How to use /radio";
        $response["attachments"][]["text"] = "Type Valid keyword commands: random, list, help\nView all codes at http://slackrad.io";

      } else if( $code == "list" ) {

        $all = Code::all();
        $response["response_type"] = "ephemeral";
        $response["text"] = "All accepted APCO 10 codes:";

        $str = "";
        foreach( $all as $code ) {
          $str .= "{$code->code}: {$code->definition}\n";
        }
        $response["attachments"][]["text"] = $str;

      } else {

        if( $object = Code::where("code", "=", $code)->first() ) {
          // Code found
          $object->increment("count");
          $response["attachments"][]["text"] = "{$object->code}: {$object->definition}";
        } else {
          // Code not found
          $response["response_type"] = "ephemeral";
          $response["text"] = "Code not found, try `/radio help` for options";
        }

      }

    }

    return response()->json($response);

  }

}
