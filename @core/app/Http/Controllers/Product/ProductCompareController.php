<?php

namespace App\Http\Controllers\Product;

use App\Helpers\CompareHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCompareController extends Controller
{
    public function addToCompare(Request $request)
    {
        $this->validate($request, ['product_id' => 'required|exists:products,id']);
        return CompareHelper::add($request->product_id);
    }

    public function removeFromCompare(Request $request)
    {
        $this->validate($request, ['id' => 'required|exists:products']);
        return CompareHelper::remove($request->id);
    }

    public function clearCompare()
    {
        return CompareHelper::clear();
    }
}
