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
    	$preparedData = array('id' => 0, 'name'=>'');
    	$name = $this->request->input('example_name', false);
    	if($name){
    		$id = rand().substr($name, -3);
    		$name = str_replace(" ", "_", $name);
    		$preparedData = array('id' => $id, 'name'=>$name);
    		broadcast(new PublishName(
    			$preparedData
    		));
    	}
    	return response()->json($preparedData);
    }
}