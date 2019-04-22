<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login')->with('error', 'Please Login with Your Details');
});
//Auth::routes();

Route::post("/", "AdministratorController@userlogin")->name("admin.login");
Route::get("/logout", "AdministratorController@logout")->name("admin.logout");


Auth::routes(['verify' => true]);
//Route::get('/home', 'HomeController@index')->name('home');
Route::group(["prefix" => "administrator", "middleware" => "verified"], function(){
    Route::get("/dashboard", "AdministratorController@index")->name("administrator.dashboard");

    Route::group(["prefix" => "categories"], function(){
        Route::get("/create", "CategoryController@index")->name("category.create");
        Route::post("/save", "CategoryController@store")->name("category.save");
        Route::get("/edit/{category_id}", "CategoryController@edit")->name("category.edit");   
        Route::get("/delete/{category_id}", "CategoryController@destroy")->name("category.delete");
        Route::post("/update/{category_id}", "CategoryController@update")->name("category.update");   
    });

    Route::group(["prefix" => "distributor"], function(){
        Route::get("/create", "DistributorController@index")->name("distributor.create");
        Route::post("/save", "DistributorController@store")->name("distributor.save");
        Route::get("/edit/{distributor_id}", "DistributorController@edit")->name("distributor.edit");   
        Route::get("/delete/{distributor_id}", "DistributorController@destroy")->name("distributor.delete");
        Route::post("/update/{distributor_id}", "DistributorController@update")->name("distributor.update"); 
        Route::get("/assign_outlet", "AssignOutletController@index")->name("assign.outlet.create");  
        Route::post("/save_assign_outlet", "AssignOutletController@store")->name("assign.outlet.save");
        Route::get("/delete/{assign_id}", "AssignOutletController@destroy")->name("assign.outlet.delete");  
    });

    Route::group(["prefix" => "outlets"], function(){
        Route::get("/create", "OutletController@index")->name("outlet.create");
        Route::post("/save", "OutletController@store")->name("outlet.save");
        Route::get("/edit/{outlet_id}", "OutletController@edit")->name("outlet.edit");   
        Route::get("/delete/{outlet_id}", "OutletController@destroy")->name("outlet.delete");
        Route::post("/update/{outlet_id}", "OutletController@update")->name("outlet.update");   
    });

    Route::group(["prefix" => "supplier"], function(){
        Route::get("/create", "SupplierController@index")->name("supplier.create");
        Route::post("/save", "SupplierController@store")->name("supplier.save");
        Route::get("/edit/{supplier_id}", "SupplierController@edit")->name("supplier.edit");   
        Route::get("/delete/{supplier_id}", "SupplierController@destroy")->name("supplier.delete");
        Route::post("/update/{supplier_id}", "SupplierController@update")->name("supplier.update");   
    });

    Route::group(["prefix" => "variants"], function(){
        Route::get("/create", "ProductVariantController@index")->name("variant.create");
        Route::post("/save", "ProductVariantController@store")->name("variant.save");
        Route::get("/edit/{variant_id}", "ProductVariantController@edit")->name("variant.edit");   
        Route::get("/delete/{variant_id}", "ProductVariantController@destroy")->name("variant.delete");
        Route::post("/update/{variant_id}", "ProductVariantController@update")->name("variant.update");   
    });

    Route::group(["prefix" => "warehouse"], function(){
        Route::get("/create", "WareHouseManagementController@index")->name("warehouse.create");
        Route::post("/save", "WareHouseManagementController@store")->name("warehouse.save");
        Route::get("/edit/{ware_house_id}", "WareHouseManagementController@edit")->name("warehouse.edit");   
        Route::get("/delete/{ware_house_id}", "WareHouseManagementController@destroy")->name("warehouse.delete");
        Route::post("/update/{ware_house_id}", "WareHouseManagementController@update")->name("warehouse.update");   
    });

    Route::group(["prefix" => "users"], function(){
        Route::get("/create", "UserController@index")->name("user.create");
        Route::post("/save", "UserController@store")->name("user.save");
        Route::get("/edit/{user_id}", "UserController@edit")->name("user.edit");   
        Route::get("/delete/{user_id}", "UserController@destroy")->name("user.delete");
        Route::post("/update/{user_id}", "UserController@update")->name("user.update");   
    });

    Route::group(["prefix" => "employee"], function(){
        Route::get("/create", "EmployeeController@index")->name("employee.create");
        Route::post("/save", "EmployeeController@store")->name("employee.save");
        Route::get("/edit/{employee_id}", "EmployeeController@edit")->name("employee.edit");   
        Route::get("/delete/{employee_id}", "EmployeeController@destroy")->name("employee.delete");
        Route::post("/update/{employee_id}", "EmployeeController@update")->name("employee.update");   
    });

    Route::group(["prefix" => "products"], function(){
        Route::get("/create", "ProductController@index")->name("product.create");
        Route::post("/save", "ProductController@store")->name("product.save");
        Route::get("/edit/{slug}", "ProductController@edit")->name("product.edit");   
        Route::get("/delete/{slug}", "ProductController@destroy")->name("product.delete");
        Route::post("/update/{slug}", "ProductController@update")->name("product.update");   
    });


    Route::group(["prefix" => "user-roles"], function(){
        Route::get("/create", "UserRoleController@index")->name("roles.create");
        Route::post("/save", "UserRoleController@store")->name("roles.save");
        Route::get("/edit/{roles_id}", "UserRoleController@edit")->name("roles.edit");   
        Route::get("/delete/{roles_id}", "UserRoleController@destroy")->name("roles.delete");
        Route::post("/update/{roles_id}", "UserRoleController@update")->name("roles.update");   
    });
    Route::group(["prefix" => "roles"], function(){
        Route::get("/create", "RoleController@index")->name("role.create");
        Route::post("/save", "RoleController@store")->name("role.save");
        Route::get("/edit/{user_id}", "RoleController@edit")->name("role.edit");   
        Route::get("/delete/{role_id}", "RoleController@destroy")->name("role.delete");
        Route::post("/update/{role_id}", "RoleController@update")->name("role.update");   
    });
});

