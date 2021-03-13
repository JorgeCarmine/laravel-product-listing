<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::join('categories', 'categories.id', 'products.category_id')
            ->select('categories.name as category', 'products.name as products', 'products.order')
            ->get();
    }
}
