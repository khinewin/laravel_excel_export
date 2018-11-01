<?php

namespace App\Imports;

use App\Post;
use Maatwebsite\Excel\Concerns\ToModel;

class PostImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'id'=>$row[0],
            'created_at'=>$row[1],
            'updated_at'=>$row[2],
            'title'=>$row[3],
            'content'=>$row[4]
        ]);

    }
}
