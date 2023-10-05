<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UploadImageController;

Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

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
    return view('layouts.home');
});
Route::get('/amenagement', [App\Http\Controllers\AmenagementsController::class, 'edit'])->name('amenagement.edit');
Route::patch('/amenagement', [App\Http\Controllers\AmenagementsController::class, 'update'])->name('amenagement.update');
Route::delete('/amenagement', [App\Http\Controllers\AmenagementsController::class, 'destroy'])->name('amenagement.destroy');
Route::get('amenagement', [App\Http\Controllers\AmenagementsController::class, 'index'])->name('amenagement');
Route::post('amenagement', [App\Http\Controllers\AmenagementsController::class, 'store'])->name('amenagement.store');



Route::get('/demenagement', [App\Http\Controllers\DemenagementsController::class, 'edit'])->name('demenagement.edit');
Route::patch('/demenagement', [App\Http\Controllers\DemenagementsController::class, 'update'])->name('demenagement.update');
Route::delete('/demenagement', [App\Http\Controllers\DemenagementsController::class, 'destroy'])->name('demenagement.destroy');
Route::get('demenagement', [App\Http\Controllers\DemenagementsController::class, 'index'])->name('demenagement');
Route::post('demenagement', [App\Http\Controllers\DemenagementsController::class, 'store'])->name('demenagement.store');


Route::get('/naissance', [App\Http\Controllers\NaissancesController::class, 'edit'])->name('naissance.edit');
Route::patch('/naissance', [App\Http\Controllers\NaissancesController::class, 'update'])->name('naissance.update');
Route::delete('/naissance', [App\Http\Controllers\NaissancesController::class, 'destroy'])->name('naissance.destroy');
Route::get('/naissance', [App\Http\Controllers\NaissanceController::class, 'list'])->name('naissance');
Route::post('/naissance-validate', [App\Http\Controllers\NaissanceController::class, 'store'])->name('naissance.store');
Route::get('/naissance-v-list', [App\Http\Controllers\NaissanceController::class, 'storeList'])->name('naissance.store-list');

Route::get('/deces', [App\Http\Controllers\DecessController::class, 'edit'])->name('deces.edit');
Route::patch('/deces', [App\Http\Controllers\DecessController::class, 'update'])->name('deces.update');
Route::delete('/deces', [App\Http\Controllers\DecessController::class, 'destroy'])->name('deces.destroy');
Route::get('deces', [App\Http\Controllers\DecesController::class, 'index'])->name('deces');
Route::post('deces', [App\Http\Controllers\DecesController::class, 'store'])->name('deces.store');

Route::get('/inscription', [App\Http\Controllers\InscriptionsController::class, 'edit'])->name('inscription.edit');
Route::patch('/inscription', [App\Http\Controllers\InscriptionsController::class, 'update'])->name('inscription.update');
Route::delete('/inscription', [App\Http\Controllers\InscriptionsController::class, 'destroy'])->name('inscription.destroy');
Route::get('inscription', [App\Http\Controllers\InscriptionController::class, 'index'])->name('inscription');
Route::post('inscription', [App\Http\Controllers\InscriptionController::class, 'store'])->name('inscription.store');

// competences
Route::get('/competence', [App\Http\Controllers\CompetenceController::class, 'edit'])->name('competence.edit');
Route::patch('/competence', [App\Http\Controllers\CompetenceController::class, 'update'])->name('competence.update');
Route::delete('/competence', [App\Http\Controllers\CompetenceController::class, 'destroy'])->name('competence.destroy');
Route::get('competence', [App\Http\Controllers\CompetenceController::class, 'index'])->name('competence');
Route::post('competence', [App\Http\Controllers\CompetenceController::class, 'store'])->name('competence.store');



Route::get('communaute', [App\Http\Controllers\CompetenceController::class, 'create'])->name('communaute');

// Actualites

Route::get('actualites', [App\Http\Controllers\ActualitesController::class, 'index'])->name('actualites');



Route::get('projet', [App\Http\Controllers\Projets_mairieController::class, 'index'])->name('projet');


Route::get('sante', [App\Http\Controllers\Centres_santeController::class, 'index'])->name('sante');

// route contact
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-us.store');

// Route aboutUs
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');

// Route clinique
Route::get('/utilisateur', [App\Http\Controllers\UtilisateurController::class, 'index'])->name('utilisateur');
Route::post('/utilisateur', [App\Http\Controllers\UtilisateurController::class, 'store'])->name('utilisateur.store');

// Route clinique
Route::get('/clinique', [App\Http\Controllers\CliniqueController::class, 'index'])->name('clinique');
Route::post('/clinique', [App\Http\Controllers\CliniqueController::class, 'store'])->name('clinique.store');

// Route pharmacie
Route::get('/pharmacie', [App\Http\Controllers\PharmacieController::class, 'index'])->name('pharmacie');
Route::post('/pharmacie', [App\Http\Controllers\PharmacieController::class, 'store'])->name('pharmacie.store');

Route::get('/maladie', [App\Http\Controllers\MaladiesController::class, 'index'])->name('maladie');
Route::post('/maladie', [App\Http\Controllers\MaladiesController::class, 'store'])->name('maladie.store');





