<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Stock;
use Livewire\Component;

class ProductsComponent extends Component
{
    public $all_product;
    public $Stocks;

    public function mount(){
        $this->Stocks = Stock::all();
        $this->all_product = Product::all();
    }
    public function render()
    {
        return view('livewire.products-component');
    }
}
