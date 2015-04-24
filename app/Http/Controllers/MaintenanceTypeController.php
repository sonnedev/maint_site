<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MaintenanceType;
use Illuminate\Http\Request;

class MaintenanceTypeController extends Controller {

    public function __construct
    (
        MaintenanceType $maintenance_type
    ) {
        $this->maintenance_type = $maintenance_type;
    }

    public function index()
    {
        return view('account_details.add_maintenance');
    }

    public function store(Request $request)
    {
        $data = $this->maintenance_type->buildMaintenanceTypeData($request);
        MaintenanceType::input($data)->save();

        return redirect('/logs');
    }
}
