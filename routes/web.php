<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')->name('home.page');
// featured job
Route::get('/jobs/{name}', 'App\Http\Controllers\Backend\JobController@featuredJob')->name('job.featured');
// show single job
Route::get('/job/{id}', 'App\Http\Controllers\Backend\JobController@show')->name('job.show');
// show single Task
Route::get('/task/{id}', 'App\Http\Controllers\Backend\TaskController@show')->name('task.show');
// home page freelancer
Route::group( ['prefix' => 'freelancers'], function(){
	Route::get('/{id}', 'App\Http\Controllers\Frontend\FreelancerController@show')->name('single.freelancer.profile');
	//Cover litter download
	Route::get('coverlLitter/{id}', 'App\Http\Controllers\Frontend\FreelancerController@coverLitterDownload')->name('freelancer.coverlLitter.download');
});
// home page employer
Route::group( ['prefix' => 'employer'], function(){
	Route::get('/{id}', 'App\Http\Controllers\Frontend\EmployerController@show')->name('single.employer.profiledg');
});

// registation
Route::get('/register', 'App\Http\Controllers\Backend\UserController@create')->name('register.create');

Route::post('/store', 'App\Http\Controllers\Backend\UserController@store')->name('register.store');


Route::middleware(['auth:sanctum', 'verified'])->group( function () {
		//dashbord
		Route::get('/dashbord', 'App\Http\Controllers\Backend\PagesController@index')->name('user.dashbord');

		

		// admin route start
		Route::group( ['prefix' => 'admin'], function(){
		//update admin
			Route::get('/settingss', 'App\Http\Controllers\Backend\AdminController@edit')->name('admin.edit');

			Route::post('/', 'App\Http\Controllers\Backend\AdminController@update')->name('admin.update');

			//category 
			Route::group( ['prefix' => 'category'], function(){

				//manage cateoy
				Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');

				//create category
				Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
				Route::post('/create', 'App\Http\Controllers\Backend\CategoryController@store')->name('category.store');

				//update category
				Route::get('/update/{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');

				Route::post('/edit/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('category.update');

				//delete category
				Route::post('/delete', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
			});

			//user management start

			// all freelancer
			Route::get('/freelancers', 'App\Http\Controllers\Backend\FreelancerController@all')->name('freelancer.all');

			// valid freelancer
			Route::post('/freelancersd/{$freelancer}', 'App\Http\Controllers\Backend\FreelancerController@active')->name('freelancer.active');

			//en-valid freelancer
			Route::post('/{id}', 'App\Http\Controllers\Backend\FreelancerController@enActive')->name('freelancer.enActive');

			// all employer
			Route::get('/employers', 'App\Http\Controllers\Backend\EmployerController@all')->name('employer.all');


			//user management End
			Route::get('/messages', 'App\Http\Controllers\Backend\PagesController@message')->name('admin.message');
			Route::get('/bookmarks', 'App\Http\Controllers\Backend\PagesController@bookmark')->name('admin.bookmark');
			Route::get('/reviews', 'App\Http\Controllers\Backend\PagesController@review')->name('admin.review');
			
			Route::get('/setting', 'App\Http\Controllers\Backend\PagesController@setting')->name('admin.setting');
		// admin route end
	});
		//Freelancer route start
	Route::group( ['prefix' => 'freelancer'], function(){ 
		Route::get('/setting', 'App\Http\Controllers\Backend\FreelancerController@edit')->name('freelancer.edit');
		Route::post('/setting', 'App\Http\Controllers\Backend\FreelancerController@update')->name('freelancer.update');
		//apply job
		Route::post('/apply/{id}', 'App\Http\Controllers\Backend\JobController@applyJob')->name('job.apply');
		
		//apply Task
		Route::post('/task/apply/{id}', 'App\Http\Controllers\Backend\TaskController@applyTask')->name('task.apply');
		// manage request task
		Route::get('/task/manage', 'App\Http\Controllers\Backend\TaskController@requestTaskManage')->name('request.task.manage');

		//applied job
		Route::get('/applied/job', 'App\Http\Controllers\Backend\JobController@appliedJob')->name('applied.job.manage');

	});
	//Freelancer route End

	//employer route start
	Route::group( ['prefix' => 'employere'], function(){
		//update employer
		Route::get('/settings', 'App\Http\Controllers\Backend\EmployerController@edit')->name('employer.edit');

		Route::post('/settings', 'App\Http\Controllers\Backend\EmployerController@update')->name('employer.update');

		//Job post
		Route::get('/post/job', 'App\Http\Controllers\Backend\JobController@create')->name('job.post');
		Route::post('/post/job', 'App\Http\Controllers\Backend\JobController@store')->name('job.store');

		// manage job
		Route::get('/manage/job', 'App\Http\Controllers\Backend\JobController@manageJob')->name('job.manage');
		//manage Cadidate
		Route::get('/manage/candidates/{id}', 'App\Http\Controllers\Backend\JobController@manageCandidates')->name('candidate.manage');

		//remove cadidate
		Route::post('/manage/candidate/{id}', 'App\Http\Controllers\Backend\JobController@removeCandidate')->name('candidate.remove');

		//approve cadidate
		Route::post('/manage/candidate/approve/{id}', 'App\Http\Controllers\Backend\JobController@approveCandidate')->name('candidate.approve');
		//download cadidate cv
		Route::get('/download/candidate/cv/{id}', 'App\Http\Controllers\Backend\JobController@downloadCandidateCv')->name('candidate.cv.download');

		//Task Post
		Route::get('/post/task', 'App\Http\Controllers\Backend\TaskController@create')->name('task.post');
		Route::post('/post/task', 'App\Http\Controllers\Backend\TaskController@store')->name('task.store');
		//offer job 
		Route::post('/{id}', 'App\Http\Controllers\Backend\TaskController@offerTask')->name('task.offer');
	}); 
	//employer route End
});
 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');
