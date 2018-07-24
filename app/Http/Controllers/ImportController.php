<?php

namespace App\Http\Controllers;
 
use App\Book;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\BooksImport;

class ImportController extends Controller
{
   



    public function import(BooksImport $import)
    {


Excel::filter('chunk')->load('books.xlsx')->chunk(250, function($import)
{
  

        
        $import->each(function($sheet) {
    // recorre las filas
          $sheet->each(function($row) {

          Book::create([
             'name' => $row->names,
             'author' => $row->author,
             'year' => $row->year

             ]);

          });
       });
      






});

       
    }



}
