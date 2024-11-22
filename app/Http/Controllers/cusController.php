<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\Models\MAIN_DATA\Customers;
use App\Models\MAIN_DATA\Address;

class cusController extends Controller
{
    public function index(DataTables $dataTables)
    {
        $cus = Customers::query();

        return $dataTables->eloquent($cus)
            ->addColumn('action', function ($cusData) {
                $redirect = route('views.index') . '?page=cus-info&cusID=' . $cusData->id;
                // Add action buttons (edit, delete, etc.) using HTML
                return '<a href="'.$redirect .'" class=""><i class="fa-solid fa-circle-info"></i></a>';
            })
            ->addColumn('name', function ($cusData) {
                return "$cusData->FirstName_TH $cusData->LastName_TH";
            })
            ->addColumn('phone', function ($cusData) {
                return $cusData->PhoneNumber_Primary;
            })
            ->addColumn('id', function ($cusData) {
                return $cusData->id;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $req)
    {
        $page = $req->page;
        $userID = auth()->user()->id;
        $userZone = auth()->user()->UserZone;
        $userBranch = auth()->user()->UserBranch;

        if ($page === 'create-cus') {
            try {
                $data = $req->data;

                $response = Customers::create([
                    "PrefixName" => @$data["prefixName"],
                    "FirstName_TH" => @$data["firstName_TH"],
                    "Lastname_TH" => @$data["lastName_TH"],
                    "PhoneNumber_Primary" => @$data["Phone_Primary"],
                    "PhoneNumber_Secondary" => @$data["Phone_Secondary"],
                    "IDCard" => @$data["IDCard"],
                    "IDCard_issus" => @$data["card_issue_date"],
                    "IDCard_expire" => @$data["IDCard_expire"],
                    "Birthday" => @$data["birthdate"],
                    "Gender" => @$data["gender"],
                    "Nationality" => @$data["Nationality"],
                    "Religion" => @$data["Religion"],
                    "Driver_Licence" => @$data["Driver_Licence"],
                    "Social_Facebook" => @$data["Social_Facebook"],
                    "Marital_Status" => @$data["Marital_Status"],
                    "Social_Line" => @$data["Social_Line"],
                    "note" => @$data["note"],
                    "UserInsert" => $userID,
                    "UserBranch" => $userBranch,
                    "UserZone" => $userZone,
                    "Status" => "active",
                ]);

                if (empty($response->id)) {
                    throw new \Exception("creating customer data faild!");
                }

                return response()->json([
                    "message" => "creating new customer successfully!",
                    "data" => $response,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating new customer failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$page === "edit-cus") {
            try {

            } catch (\Exception $e) {
                return response()->json([
                    "message" => "editing customer failed",
                    'error' => $e->getMessage(),
                ], 500);
            }
        }
    }
}
