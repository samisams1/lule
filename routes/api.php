<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/donore','DonoreController');
Route::apiResource('/ProgramCategories','ProgramCategoryController');
Route::apiResource('/Programmes','ProgrammesController');
Route::apiResource('/ProjectCategories','ProjectCategoryController');
Route::apiResource('/Project','ProjectController');
Route::apiResource('/ProgrammDetails','ProgrameDetailsController');
Route::apiResource('/Activites','ActivityCategoryController');
Route::apiResource('/ActivityList','ActivityListController');
//Route::apiResource('/SubActivityListCategories','SubActivityListCategoryController');
Route::apiResource('/SubActivityList','SubActivityListController');
Route::apiResource('/OutComeCategory','OutComeCategoryController');
Route::apiResource('/OutComeList','OutComeListController');
Route::apiResource('/SubOutComeList','SubOutComeListController');
Route::apiResource('/OutputCategory','OutputCategoryController');
Route::apiResource('/OutputList','OutputListController');
Route::apiResource('/SuboutputList','SuboutputListController');
Route::apiResource('/Year','YearController');
Route::apiResource('/Quarter','QuarterController');
Route::apiResource('/Month','MonthController');
Route::apiResource('/Weak','WeakController');
Route::apiResource('/Country','CountryController');
Route::apiResource('/Cluster','ClusterController');
Route::apiResource('/Region','RegionController');
Route::apiResource('/Zone','ZoneController');
Route::apiResource('/Wereda','WeredaController');
Route::apiResource('/Kebele','KebeleController');
Route::apiResource('/BeneficiaryProfile','BeneficiaryProfileController');
Route::apiResource('/GroupBeneficiary','GroupBeneficiaryController');
Route::apiResource('/GroupMember','GroupMemberController');

Route::apiResource('/ProjectDonore','ProjectDonoreController');
Route::apiResource('/DonoreProfile','DonoreProfileController');

Route::apiResource('/implimentPartiners','ImplimentPartinersController');
Route::apiResource('/projectstuf','ProjectStufController');
Route::apiResource('/ProjectImplimenter','ProjectImplimenterController');

Route::apiResource('/InputType','InputTypeController');
Route::apiResource('/InputList','InputListController');
Route::apiResource('/InputSubList','InputSubListController');
Route::apiResource('/InputDetail','InputDetailController');
Route::apiResource('/Location','LocationController');
//Route::apiResource('/ProgrameDetails','ProgrameDetailsController');

Route::apiResource('/samisams','ProjectCategoryController\3');


Route::get('Region/{id}',function($id){
	return 'Region '.$id;
	//Route::apiResource('{Activites}/ActivityList','RegionController');
});