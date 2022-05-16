<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use App\Models\productDetail;

class ProductsImport implements 
    ToCollection, 
    WithHeadingRow, 
    WithValidation,
    SkipsOnError
{
    use Importable, SkipsErrors;
    private $rows = 0;
    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) 
        {
            ++$this->rows;
           $product = Product::create([
                'name' => $row['name'],
                'product_owner' => $row['product_owner'],
                'category_id'=> $row['category_id'],
                'subcategory_id' => $row['subcategory_id'],
                'long_description' => $row['long_description'],
                'tax_type_1' => $row['tax_type_1'],
                'created_by_id' => $row['created_by_id'],
            ]);
            productDetail::create([
                'product_id' =>$product->id,
                'discount_id' =>$row['discount_id'],
                'size_id' => $row['size_id'],
                'status_id' =>$row['status_id'],
                'purchased_price' => $row['purchased_price'],
                'suggested_price' => $row['suggested_price'],
                'selling_price' => $row['selling_price'],
                'stock' => $row['stock'],
                'available' => $row['available']
            ]);
           
        }
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }

    public function rules(): array
    {
       return [
        '*.sku' => ['sometimes', 'nullable', 'unique:products,sku'],
        '*.name' => ['required'],
       ]; 
    }
}
