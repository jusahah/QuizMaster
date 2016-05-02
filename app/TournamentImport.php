<?php 
namespace App;

class TournamentImport extends \Maatwebsite\Excel\Files\ExcelFile {

    public function getFile()
    {
        return storage_path('exports') . '/file.csv';
    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}