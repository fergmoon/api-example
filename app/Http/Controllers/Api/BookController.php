<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;  //Se importa el modelo

class BookController extends Controller
{
    //
    public function index(){
        return true;
    }
    public function create(Request $request){

        $book = new Book();

        $book->name = $request->input("name");
        $book->isbn = $request->input("isbn");
        $book->author = $request->input("author");
        $book->edition = $request->input("edition");

        $book->save();

        $message = ["message" => 'Registro Exitoso']; //arreglo asociativo

        return response()->json($message);

    }

    public function read(){
        $books = new Book();  //instanciar el libro del modelo. Con el nombre de la clase
        $data = $books -> all();  //busqueda q trae todos los libros en var $data
        return response() -> json($data);  //devuelve en formato json todos los libros
    }

    public function update(){
        return true;
    }
    public function delete(){
        return true;
    }

}