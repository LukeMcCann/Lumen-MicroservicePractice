<?php 

namespace app\Http\Controller;

use App\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * CampaignController
 * 
 * Controller class for handling Campaign database functions.
 */
class CampaignController extends Controller {

    public function showAllCampaigns() {
        return response()->json(Campaign::all());
    }

    public function showOneCampaign($id) {
        return response()->json(Campagin::find($id));
    }

    public function createCampaign(Request $request) {
        $campaign = Campaign::create($request0>all());
        return response()->json($person);
    }

    public function deleteCampaign($id) {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();
        return response()->json('Successfully Removed: ' . $id);
    }

    public function index() {
        $campaign = Campaign::all();
        return response()->json($campaign);
    }
}
