<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;  //importa la clase controlador
use GuzzleHttp\Promise\Create;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/books",[BookController::class,'read']);  //conectar con el endpoint-

Route::post("/book",[BookController::class,'create']);//conectar con el endpoint-


// Route::get("/books",function(Request $request){ //endpoint
//     $message = ['mensaje'=>"libros"];
//     return response()->json($message);

// });

Route::get("/saludo/abc",function (Request $request) {
    $message = ['mensaje'=> "Hola Mundo !"];  
    return response() -> json($message);
});

Route::get("/libro",function(Request $request){ //endpoint
    $message = ['book'=>"Cien años de soledad"];
    return response()->json($message);

});

Route::put("/carro",function(Request $request){ //endpoint
    $message = ['carro'=>"renault"];
    return response()->json($message);

});

Route::patch("/computador",function(Request $request){ //endpoint
    $message = ['computador'=>"Lenovo"];
    return response()->json($message);

});

Route::delete("/musica",function(Request $request){ //endpoint
    $message = ['musica'=>"Nirvana"];
    return response()->json($message);

});
/*-----------------------------------------------*/




Route::post("/fecha",function (Request $request) {
    $message = ['date'=> "Hoy es Miércoles 07 de junio de 2023"];  
    return response() -> json($message);
});

Route::put("/datos",function (Request $request) {
    $message = [
        'name'=> "Fernando",
        'last-name'=> "gomez",
        'id'=> "cedula",
        'id-number' => "123654658"
    ];  
    return response() -> json($message);
});

Route::patch("/estudiantes",function (Request $request) {
    $message = [
        'name'=> "un_nombre",
        'code'=> "1324654",
        'course'=> "fullstack",
        'note' => "A+"
    ];  
    return response() -> json($message);
});

Route::delete("/universidad",function (Request $request) {
    $message = ['name'=> "Universidad nacional"];  
    return response() -> json($message);
});
