<?php 
namespace App;
use Maatwebsite\Excel\Files\ExcelFile;

class BooksImport extends ExcelFile {
    public function getFile()
    {
        return public_path() . '/books.xlsx';
    }
    public function getFilters()
    {
        return [
            'chunk'
        ];
    }
}