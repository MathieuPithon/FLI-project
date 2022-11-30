<?php

namespace App\Service;

use App\Models\Item;
use Livewire\Component;

class NewItem extends Component {

    public static function addItem($name)
    {
        Item::insert([
            'itemName' => $name,
            
            // 'category_id' => (Category::where('name', 'like', $this->category_id)->get('id'))[0]->id
        ]);
    }
}