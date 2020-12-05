<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PublishName;

class AudienceController extends Controller
{
	private $request;

	public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('audience');
    }

    public function submitNameForm(){
    	$preparedData = array('id' => 0, 'username'=>'', 'name'=>'');
    	$name = $this->request->input('example_name', false);
    	if($name){
            $username = str_replace(" ", "_", strtolower($name));
            $id = rand().substr($username, -3);
            $preparedData = array('id' => $id, 'username'=>$username, 'name'=>$name);
    		broadcast(new PublishName(
    			$preparedData
    		));
    	}
    	return response()->json($preparedData);
    }
}
