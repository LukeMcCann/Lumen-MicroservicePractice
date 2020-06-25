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

    public function showAllPersons() {
        return response()->json(Person::all());
    }

    public function showOnePerson($id) {
        return response()->json(Person::find($id));
    }

    public function createPerson(Request $request) {
        $person = Person::create($request0>all());
        return response()->json($person);
    }

    public function deletePerson($id) {
        $person = Person::findOrFail($id);
        $person->delete();
        return response()->json('Successfully Removed: ' . $id);
    }

    public function updatePerson($id, Request $request) {
        $person = Person::findOrFail($id);
        $person->update($request->all());
    }

    public function index() {
        $person = Person::all();
        return response()->json($person);
    }
}
