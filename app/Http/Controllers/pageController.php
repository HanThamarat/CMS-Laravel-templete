<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CONST\TB_PrefixName;
use App\Models\CONST\TB_Gender;
use App\Models\CONST\TB_Nationality;
use App\Models\CONST\TB_Religion;
use App\Models\CONST\TB_MaritalStatus;
use App\Models\MAIN_DATA\Customers;
use App\Models\User;

class pageController extends Controller
{

    public function index(Request $req)
    {
        $pages = @$req->page;
        if (@$pages === 'create-cus') {
            $breadcrumbs = [
                ['url' => null, 'label' => 'Home'],
                ['url' => null, 'label' => 'Customer System'],
                ['url' => null, 'label' => 'Create new customer'],
            ];

            $prefixName = TB_PrefixName::all();
            $gender = TB_Gender::all();
            $nationality = TB_Nationality::all();
            $religion = TB_Religion::all();
            $marital_status = TB_MaritalStatus::all();
            return view('pages.content-cus.create-cus.view', compact('prefixName', 'gender', 'nationality', 'religion', 'marital_status', 'breadcrumbs'));
        } else if (@$pages === 'cus-list') {
            $breadcrumbs = [
                ['url' => null, 'label' => 'Home'],
                ['url' => null, 'label' => 'Customer System'],
                ['url' => null, 'label' => 'Customer Lists'],
            ];

            $cus = Customers::all();
            return view('pages.content-cus.cus-list.view', compact('cus', 'breadcrumbs'));
        } else if (@$pages === 'cus-info') {
            $breadcrumbs = [
                ['url' => null, 'label' => 'Home'],
                ['url' => null, 'label' => 'Customer System'],
                ['url' => null, 'label' => 'Customer Lists'],
                ['url' => null, 'label' => 'Customer Information'],
            ];

            $cusId = $req->cusID;

            // Query รวมข้อมูล customers กับ users และ gender
            $cus = Customers::select(
                    'customers.*',
                    'users.name as userinsert_name',
                    'TB_Genders.Name_TH as gender_name',
                    'TB_Nationalities.Name_TH as nationality_name',
                    'TB_Religions.Name_TH as religion_name',
                    'TB_marital_statuses.name_status_marital_th as marital_status_name',
                )
                ->leftJoin('users', 'customers.UserInsert', '=', 'users.id')
                ->leftJoin('TB_Genders', 'customers.Gender', '=', 'TB_Genders.id')
                ->leftJoin('TB_Nationalities', 'customers.Nationality', '=', 'TB_Nationalities.id')
                ->leftJoin('TB_Religions', 'customers.Religion', '=', 'TB_Religions.id')
                ->leftJoin('TB_marital_statuses', 'customers.Marital_Status', '=', 'TB_marital_statuses.id')
                ->where('customers.id', @$cusId)
                ->get();

            return view('pages.content-cus.cus-info.view', compact('cus', 'breadcrumbs'));
        } else if (@$pages === 'system-configs') {
            $breadcrumbs = [
                ['url' => null, 'label' => 'Home'],
                ['url' => null, 'label' => 'System Configs']
            ];

            return view('pages.system-settings.view', compact('breadcrumbs'));
        }
    }
}

