<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class systemController extends Controller
{
    public function index(Request $req) {
        $pages = $req->page;

        if ($pages === 'user-manage') {
            try {
                $users = User::all();
                $roles = Role::all();

                $render = view('pages.system-settings.state-manage.users.user-manage', compact('users', 'roles'))->render();

                return response()->json([
                    "message" => "creating user management content successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating user management content faild",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if ($pages === 'role-manage') {
            try {
                $roles = DB::table('roles')
                ->selectRaw('roles.name as Name_EN, roles.Name_TH, permissions.name as permissionDescription')
                ->leftJoin('role_has_permissions', 'roles.id', 'role_has_permissions.role_id')
                ->leftJoin('permissions', 'role_has_permissions.permission_id', 'permissions.id')->get();

                $render = view('pages.system-settings.state-manage.roles.role-manage', compact('roles'))->render();

                return response()->json([
                    "message" => "creating user management content successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating user management content faild",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$pages === 'car-detail') {

        } else {
            try {
                $render = view('pages.system-settings.state-manage.default')->render();

                return response()->json([
                    "message" => "creating user management content successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating user management content faild",
                    "error" => $e->getMessage(),
                ], 500);
            }
        }
    }

    public function store(Request $req) {
        $conditions = @$req->condition;
        $data = @$req->data;

        if (@$conditions === 'create-roles') {
            try {
                $role = Role::create([
                    'name' => @$data['Name_EN'],
                    'Name_TH' => @$data['Name_TH'],
                ]);

                $permission = Permission::create(['name' => @$data['permissions']]);

                $role->givePermissionTo($permission);

                $roles = DB::table('roles')
                ->selectRaw('roles.name as Name_EN, roles.Name_TH, permissions.name as permissionDescription')
                ->leftJoin('role_has_permissions', 'roles.id', 'role_has_permissions.role_id')
                ->leftJoin('permissions', 'role_has_permissions.permission_id', 'permissions.id')->get();

                $render = view('pages.system-settings.state-manage.roles.table', compact('roles'))->render();

                return response()->json([
                    "message" => "creating roles successfully",
                    "render" => @$render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating roles faild",
                    "error" => $e->getMessage(),
                ], 500);
            }
        }
    }
}
