<?php 

namespace app\Http\Controller;

use App\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * PersonController
 * 
 * Controller class for handling Person database functions.
 */
class PersonController extends Controller {

    public function createPerson(Request $request) {
        $person = Person::create($request0>all());
        return response()->json($person);
    }

    public function deletePerson($id) {
        $person = Person::find($id);
        $person->delete();
        return response()->json('Successfully Removed: ' . $id);
    }

    public function index() {
        $person = Person::all();
        return response()->json($person);
    }
}
