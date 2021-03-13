<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] != 'CATEGORY' && $row[0] != '') {
            $category = Category::where('name', $row[0])->get()->first();

            Product::where('name', $row[1])
                ->update(['order' => $row[2], 'category_id' => $category->id]);
        } else return null;
    }
}
