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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('Auth/register', 'Auth\RegisterController@insert_form')->name('c_register');
Route::post('Auth/register', 'Auth\RegisterController@store_company');
Route::get('contacts/ContactDetail','ContactController@call_page')->name('contact_detail');
Route::get('contacts/ContactDetail/delete/{id}', 'ContactController@delete_contact')->name('contact_delete');
Route::get('contacts/ContactDetail/edit/{id}', 'ContactController@edit_contact')->name('contact_edit');
Route::post('contacts/ContactDetail/edit/{id}', 'ContactController@edit_save');
Route::get('contacts/ContactDetail/add','ContactController@insert_form')->name('contact_insert');
Route::post('contacts/ContactDetail/add','ContactController@store_contact');


Route::get('users/UserDetail','UserController@call_page')->name('user_detail');
Route::get('users/UserDetail/delete/{id}', 'UserController@delete_user')->name('user_delete');
Route::get('users/UserDetail/edit/{id}', 'UserController@edit_user')->name('user_edit');
Route::post('users/UserDetail/edit/{id}', 'UserController@edit_save');

Route::get('companies/CompanyDetail','CompanyController@call_page')->name('company_detail');
Route::get('companies/CompanyDetail/delete/{id}', 'CompanyController@delete_company')->name('company_delete');
Route::get('companies/CompanyDetail/edit/{id}', 'CompanyController@edit_Company')->name('company_edit');
Route::post('companies/CompanyDetail/edit/{id}', 'CompanyController@edit_save');
 Route::get('companies/CompanyDetail/add','CompanyController@insert_form')->name('company_insert');
Route::post('companies/CompanyDetail/add','CompanyController@store_Company');

Route::get('employees/EmployeeDetail','EmployeeController@call_page')->name('employee_detail');
Route::get('employees/EmployeeDetail/delete/{id}', 'EmployeeController@delete_employee')->name('employee_delete');
Route::get('employees/EmployeeDetail/edit/{id}', 'EmployeeController@edit_employee')->name('employee_edit');
Route::post('employees/EmployeeDetail/edit/{id}', 'EmployeeController@edit_save');
Route::get('employees/EmployeeDetail/add','EmployeeController@insert_form')->name('employee_insert');
Route::post('employees/EmployeeDetail/add','EmployeeController@store_Employee');

Route::get('Department/DepartmentDetail','DepartmentController@call_page')->name('department_detail');
Route::get('Department/DepartmentDetail/delete/{id}', 'DepartmentController@delete_department')->name('department_delete');
Route::get('Department/DepartmentDetail/edit/{id}', 'DepartmentController@edit_department')->name('department_edit');
Route::post('Department/DepartmentDetail/edit/{id}', 'DepartmentController@edit_save'); 
Route::get('Department/DepartmentDetail/add','DepartmentController@insert_form')->name('department_insert');
Route::post('Department/DepartmentDetail/add','DepartmentController@store_department');
Route::get('Department/DepartmentDetail','DepartmentController@call_page')->name('department_detail');

 Route::get('surveys/SurveyDetail','SurveyController@call_page')->name('survey_detail');
Route::get('surveys/SurveyDetail/delete/{id}', 'SurveyController@delete_survey')->name('survey_delete');
Route::get('surveys/SurveyDetail/edit/{id}', 'SurveyController@edit_survey')->name('survey_edit');
Route::post('surveys/SurveyDetail/edit/{id}', 'SurveyController@edit_save');
Route::get('surveys/SurveyDetail/add','SurveyController@insert_form')->name('survey_insert');
Route::post('surveys/SurveyDetail/add','SurveyController@store_survey'); 

 
Route::get('question/add','QuestionController@type_listing')->name('ques_type'); 
//Route::post('question/add','QuestionController@get_listing');

Route::get('/home', 'HomeController@index')->name('home');
