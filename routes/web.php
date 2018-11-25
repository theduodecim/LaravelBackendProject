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

// dedicated controller for sending data to our views 101

// app() & resolve() are the same functions;
/*
app()->singleton('App\Example', function() {

return new \App\Example;
});
 */

//Route::get('/', function(Twitter $twitter){
//});

/*
Route::get('/', function (Twitter $twitter) {
dd($twitter);
});
 */

/*
Route::get('/', function(){
dd(app('example'),app('example'));
});
 */
/*
Route::get('/', function()
{
dd(app('App\Example'));
});
 */
Route::get('/about', 'Pages@about');
Route::get('/contact', 'Pages@contact');
/*
when you make a

/GET /projects that reprecent the desire to feach all the resources, to get all the resources

convention to get first an index
Following the convention
POST /projects (store) this resources
there is also two verbs more
update resoruces

---
PUT update all i want to update a project to the id /projects/1
PATCH update a portion of the code
-----

DELETE /projects/1 (destroy)

Now we want to display a form

Simple get request load a page
display a form

GET /projects/create
GET /projects/1/edit
GET /projects/1 (show)

The 7 Behavior that how we interact whit a project

GET /project (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projects (store)
GET /projects/1/edit (show me to edit)
PATCH /projects/1 (update (edit))
DELETE /project/1 (destroy)

below there are my project resources
 */

Route::resource('project', 'ProjectsController');

Route::patch('tasks/{task}', 'ProjectTasksController@update');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

/*
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
 */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
