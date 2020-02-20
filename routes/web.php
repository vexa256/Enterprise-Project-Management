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


Route::get('/AdminCP', 'StatsController@Stats')->name('Stats')->middleware('authenticated');
Route::get('/home', 'StatsController@Stats')->name('home')->middleware('authenticated');
Route::get('/Home', 'StatsController@Stats')->name('Home')->middleware('authenticated');


Route::get('/', 'MiniReportsController@front_z')->name('MiniReports');
//Route::get('/home', 'HomeController@index')->name('Home')->middleware('authenticated');

Route::get('MiniReports', 'MiniReportsController@MiniReports')->name('MiniReports')->middleware('authenticated');
































Route::get('ResolutionUnderJPC/{id}', 'JPCResolutionsController@ResolutionUnderJPC')->name('ResolutionUnderJPC')->middleware('authenticated');


Route::get('ResolutionsUnderEvent/{id}', 'ProjectEventResolutionController@ResolutionsUnderEvent')->name('ResolutionsUnderEvent')->middleware('authenticated');



Route::get('EventsUnderProjects/{id}', 'ProjectEventsController@EventsUnderProjects')->name('EventsUnderProjects')->middleware('authenticated');


Route::get('ResolutionsUnderPower/{id}', 'PowerResolutionController@ResolutionsUnderPower')->name('ResolutionsUnderPower')->middleware('authenticated');



Route::get('PowerUnderInitiative/{id}', 'PowerStructureController@PowerUnderInitiative')->name('PowerUnderInitiative')->middleware('authenticated');


Route::get('ProjectsUnderInitiatives/{id}', 'ProjectsController@ProjectsUnderInitiatives')->name('ProjectsUnderInitiatives')->middleware('authenticated');


Route::get('DeleteJPCresolutionD/{id}', 'JPCResolutionsController@DeleteJPCresolutionD')->name('DeleteJPCresolutionD')->middleware('authenticated');

Route::get('UpdateJPCresolutionForm/{id}', 'JPCResolutionsController@UpdateJPCresolutionForm')->name('UpdateJPCresolutionForm')->middleware('authenticated');

Route::post('UpdateJPCresolution/{id}', 'JPCResolutionsController@UpdateJPCresolution')->name('UpdateJPCresolution')->middleware('authenticated');


Route::post('UpdateJPCresolutionStatus/{id}', 'JPCResolutionsController@UpdateJPCresolutionStatus')->name('UpdateJPCresolutionStatus')->middleware('authenticated');


Route::get('CreateJPCresolutionForm/{id}', 'JPCResolutionsController@CreateJPCresolutionForm')->name('CreateJPCresolutionForm')->middleware('authenticated');


Route::post('CreateJPCresolution', 'JPCResolutionsController@CreateJPCresolution')->name('CreateJPCresolution')->middleware('authenticated');


Route::get('ManageJPCresolution', 'JPCResolutionsController@ManageJPCresolution')->name('ManageJPCresolution')->middleware('authenticated');









































Route::get('DeleteJPC/{id}', 'JPCController@DeleteJPC')->name('DeleteJPC')->middleware('authenticated');

Route::post('SubmitJPC', 'JPCController@SubmitJPC')->name('SubmitJPC')->middleware('authenticated');

Route::post('UpdateJPC/{id}', 'JPCController@UpdateJPC')->name('UpdateJPC')->middleware('authenticated');

Route::get('ManageJPC', 'JPCController@ManageJPC')->name('ManageJPC')->middleware('authenticated');

Route::get('DeleteProjectEventResolution/{id}', 'ProjectEventResolutionController@DeleteProjectEventResolution')->name('DeleteProjectEventResolution')->middleware('authenticated');

Route::post('UpdateProjectEventResolutionWhole/{id}', 'ProjectEventResolutionController@UpdateProjectEventResolutionWhole')->name('UpdateProjectEventResolutionWhole')->middleware('authenticated');


Route::get('UpdateProjectEventResolutionStatus/{id}', 'ProjectEventResolutionController@UpdateProjectEventResolutionStatus')->name('UpdateProjectEventResolutionStatus')->middleware('authenticated');

Route::get('UpdateProjectEventResolutionForm/{id}', 'ProjectEventResolutionController@UpdateProjectEventResolutionForm')->name('UpdateProjectEventResolutionForm')->middleware('authenticated');

Route::get('ManageProjectsEventsResolutions', 'ProjectEventResolutionController@ManageProjectsEventsResolutions')->name('ManageProjectsEventsResolutions')->middleware('authenticated');

Route::post('CreateProjectEventResolution', 'ProjectEventResolutionController@CreateProjectEventResolution')->name('CreateProjectEventResolution')->middleware('authenticated');

Route::get('CreateProjectEventResolutionForm/{id}', 'ProjectEventResolutionController@CreateProjectEventResolutionForm')->name('CreateProjectEventResolutionForm')->middleware('authenticated');

Route::post('UpdateResolutionValue/{id}', 'PowerResolutionController@UpdateResolutionValue')->name('UpdateResolutionValue')->middleware('authenticated');

Route::get('UpdateResolutionForm/{id}', 'PowerResolutionController@UpdateResolutionForm')->name('UpdateResolutionForm')->middleware('authenticated');

Route::get('DeletePowerRosultion/{id}', 'PowerResolutionController@DeletePowerRosultion')->name('DeletePowerRosultion')->middleware('authenticated');


Route::post('UpdatePowerResolution/{id}', 'PowerResolutionController@UpdatePowerResolution')->name('UpdatePowerResolution')->middleware('authenticated');


Route::get('AttachPowerResolutionForm/{id}', 'PowerResolutionController@AttachPowerResolutionForm')->name('AttachPowerResolutionForm')->middleware('authenticated');

Route::post('CreatePowerResolution', 'PowerResolutionController@CreatePowerResolution')->name('CreatePowerResolution')->middleware('authenticated');

Route::get('ManagePowerResolution', 'PowerResolutionController@ManagePowerResolution')->name('ManagePowerResolution')->middleware('authenticated');
























Route::get('AddPowerStructuresForm/{id}', 'PowerStructureController@AddPowerStructuresForm')->name('AddPowerStructuresForm')->middleware('authenticated');
Route::post('AddPowerStructures', 'PowerStructureController@AddPowerStructures')->name('AddPowerStructures')->middleware('authenticated');
Route::get('ManagePowerStructures', 'PowerStructureController@ManagePowerStructures')->name('ManagePowerStructures')->middleware('authenticated');


Route::get('UpdatePowerStructureForm/{id}', 'PowerStructureController@UpdatePowerStructureForm')->name('UpdatePowerStructureForm')->middleware('authenticated');

Route::post('UpdatePowerStructure/{id}', 'PowerStructureController@UpdatePowerStructure')->name('UpdatePowerStructure')->middleware('authenticated');

Route::get('DeletePowerStructure/{id}', 'PowerStructureController@DeletePowerStructure')->name('DeletePowerStructure')->middleware('authenticated');
















Route::get('/ProjectInitiatives/{id}', 'ProjectinitiativesController@ProjectInitiatives')->name('ProjectInitiatives')->middleware('authenticated');


Route::get('/ProjectEvents/{id}', 'ProjectEventsController@ProjectEvents')->name('ProjectEvents')->middleware('authenticated');

Route::post('/UpdateActualBudget/{id}', 'ProjectsController@UpdateActualBudget')->name('UpdateActualBudget')->middleware('authenticated');

Route::post('/UserRole/{id}', 'UsersController@UserRole')->name('UserRole')->middleware('authenticated');
Route::get('/DeleteUser/{id}', 'UsersController@DeleteUser')->name('DeleteUser')->middleware('authenticated');
Route::get('/ManageUsers', 'UsersController@ManageUsers')->name('ManageUsers')->middleware('authenticated');
Route::get('/AddInitiative', 'HomeController@AddInitiative')->name('AddInitiative')->middleware('authenticated');


Route::get('/Stats', 'StatsController@Stats')->name('Stats')->middleware('authenticated');

Route::get('/CompletedEvents', 'EventsController@CompletedEvents')->name('CompletedEvents')->middleware('authenticated');
Route::get('/TerminatedEvents', 'EventsController@TerminatedEvents')->name('TerminatedEvents')->middleware('authenticated');
Route::get('/OngoingEvents', 'EventsController@OngoingEvents')->name('OngoingEvents')->middleware('authenticated');
Route::get('/DelayedEvents', 'EventsController@DelayedEvents')->name('DelayedEvents')->middleware('authenticated');
Route::get('/PendingEvents', 'EventsController@PendingEvents')->name('PendingEvents')->middleware('authenticated');



Route::get('/CompletedProjects', 'ProjectsController@CompletedProjects')->name('CompletedProjects')->middleware('authenticated');
Route::get('/PendingProjects', 'ProjectsController@PendingProjects')->name('PendingProjects')->middleware('authenticated');
Route::get('/DelayedProjects', 'ProjectsController@DelayedProjects')->name('DelayedProjects')->middleware('authenticated');
Route::get('/TerminatedProjects', 'ProjectsController@TerminatedProjects')->name('TerminatedProjects')->middleware('authenticated');
Route::get('/OngoingProjects', 'ProjectsController@OngoingProjects')->name('OngoingProjects')->middleware('authenticated');



Route::post('/UpdateEventStatus/{id}', 'EventsController@UpdateEventStatus')->name('UpdateEventStatus')->middleware('authenticated');
Route::get('/DeleteEvent/{id}', 'EventsController@DeleteEvent')->name('DeleteEvent')->middleware('authenticated');
Route::post('/UpdateEvent/{id}', 'EventsController@UpdateEvent')->name('UpdateEvent')->middleware('authenticated');
Route::get('/UpdateEventForm/{id}', 'EventsController@UpdateEventForm')->name('UpdateEventForm')->middleware('authenticated');
Route::get('/ManageEvents', 'EventsController@ManageEvents')->name('ManageEvents')->middleware('authenticated');
Route::post('/SubmitEvent', 'ProjectsController@SubmitEvent')->name('SubmitEvent')->middleware('authenticated');
Route::get('/CreateEvent/{id}', 'ProjectsController@CreateEvent')->name('CreateEvent')->middleware('authenticated');
Route::get('/DeleteProject/{id}', 'ProjectsController@DeleteProject')->name('DeleteProject')->middleware('authenticated');
Route::post('/UpdateProject/{id}', 'ProjectsController@UpdateProject')->name('UpdateProject')->middleware('authenticated');
Route::get('/UpdateProjectForm/{id}', 'ProjectsController@UpdateProjectForm')->name('UpdateProjectForm')->middleware('authenticated');



Route::post('/UpdateProjectStatus/{id}', 'ProjectsController@UpdateProjectStatus')->name('UpdateProjectStatus')->middleware('authenticated');
Route::get('/AttachProject/{id}', 'ProjectsController@AttachProject')->name('AttachProject')->middleware('authenticated');
Route::post('/CreateProject', 'ProjectsController@CreateProject')->name('CreateProject')->middleware('authenticated');
Route::get('/ManageProjects', 'ProjectsController@ManageProjects')->name('ManageProjects')->middleware('authenticated');
Route::post('/UpdateInitiative/{id}', 'InitiativesController@UpdateInitiative')->name('UpdateInitiative')->middleware('authenticated');
Route::post('/CreateInitiative', 'InitiativesController@CreateInitiative')->name('CreateInitiative')->middleware('authenticated');
Route::get('/ManageInitiatives', 'InitiativesController@ManageInitiatives')->name('ManageInitiatives')->middleware('authenticated');
Route::get('/DeleteInitiative/{id}', 'InitiativesController@DeleteInitiative')->name('DeleteInitiative')->middleware('authenticated');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('bypassall', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');



