<?php
//DisplayDataController.php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Session;
use DataTables;


class DisplayDataController extends Controller
{

    public function index()
    {
        $users = User::select(['id','name','email','created_at','updated_at']);
        return Datatables::of($users)->make();
        //return DataTables::of(User::query())->make(true);
    }


    public function create()
    {
        return view('displaydata');
    }
}
?>
