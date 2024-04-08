<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CollaborationParticipationController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\CollaborationProposalController;
use App\Http\Controllers\Api\UserCollaborationRequestController;
use App\Http\Controllers\Api\UserController;
use App\Models\CollaborationProposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login',[AuthController::class,'login']);

Route::post('register',[AuthController::class, 'register']);

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


// Profile's Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/profile', [ProfileController::class, 'storeOrUpdate'])->name('profile.storeOrUpdate');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/users/update', [UserController::class, 'update'])->name('users.update');

    Route::post('/collaboration-proposals', [CollaborationProposalController::class, 'store'])->name('collaboration.store');
    Route::post('/collaboration-proposals/{collab_id}', [CollaborationProposalController::class, 'update'])->name('collaboration.update');
    Route::delete('/collaboration-proposals/{collab_id}', [CollaborationProposalController::class, 'destroy'])->name('collaboration.destroy');
    Route::get('/my-collaboration-proposals', [CollaborationProposalController::class, 'getMyCollaborationProposals'])->name('collaboration.getMyCollaborationProposals');

    Route::get('my-participations', [CollaborationParticipationController ::class, 'index']);
    Route::post('my-participations/{id}', [CollaborationParticipationController::class, 'joinCollaboration']);
    Route::delete('my-participations/{id}', [CollaborationParticipationController::class, 'leaveCollaboration']);

    Route::get('my-participations/{status}', [CollaborationParticipationController::class, 'filterByStatus']);
    //Route::post('my-participations-status/{id}', [CollaborationParticipationController::class, 'update']);

    Route::get('my-collaboration-requests', [UserCollaborationRequestController::class, 'index']);
    //  actualiza el estado de una solicitud de participación
    Route::post('my-collaboration-requests/{id}', [UserCollaborationRequestController::class, 'updateStatusRequest']);
    Route::get('my-collaboration-requests/{collaborationId}', [UserCollaborationRequestController::class, 'showCollaborationRequests']);

    // muestra mi estado de solicitud de participación específica
    // Route::get('my-collaboration-requests/{id}', [UserCollaborationRequestController::class, 'show']);


    //COLABORACIONES PROPIAMENTE DICHAS
    Route::get('/collaborations', [CollaborationProposalController::class, 'collaborationWithParticipants']);
});

Route::get('profile', [ProfileController::class, 'show']); //muestra todos los perfiles
Route::get('profile/{user_id}', [ProfileController::class, 'getById']); // perfil especifico.

//se supone que el dia de mañana , deben estar loguin los usuarios para ver y acceder a propuesta de colaboracion...
Route::get('collaboration-proposals', [CollaborationProposalController::class, 'index']);//muestra todas las colaboraciones.
Route::get('collaboration-proposals/{collab_id}', [CollaborationProposalController::class, 'show']);
Route::get('search-proposal', [CollaborationProposalController::class,'searchProposal']);


