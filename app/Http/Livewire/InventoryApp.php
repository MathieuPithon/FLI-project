<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Service\NewItem;
use Livewire\Component;
use Carbon\Carbon;

class InventoryApp extends Component
{
    protected $rules = [
        'itemName' => 'required | unique:items| String',
        // 'quantity' => 'required | numeric | gte:0',
        // 'category_id' => 'required | unique:items',
        // 'lowest' => 'numeric | gte:0',
    ];

    protected $messages = [
        'itemName.required' => 'Champ obligatoire',
        'itemName.unique' => 'Cet item existe déjà',
        // 'quantity.required' => 'Champ obligatoire',
        // 'quantity.gte' => 'Champ > 0',
        // 'lowest.numeric' => 'Champ > 0'
    ];
    public $itemName;
    public $lent;
    public $lenderName = "";
    public $order = "created_at";    
    
    public function ajoutNom()
    {
        $this->validate();
        NewItem::addItem($this->itemName);
        $this->itemName = "";
    }
    public function lending($id, $lent)
    {
        if ($lent == 0)
        {
            Item::where('id', $id)->update(['lent' => 1, 'lendDate' => Carbon::now()->toDateTimeString(), 'lenderName' => $this->lenderName ]);
        }else
        {
            Item::where('id', $id)->update(['lent' => 0, 'lendDate' => null, 'lenderName' => null]);
        }
    }
    public function deleteItem($id)
    {
        Item::where('id', $id)->delete();
    }

    public function updatedLenderName()
    {
        $this->render();
    }
    public function render()
    {
        return view('livewire.inventory-app',[
            'items' => Item::orderby($this->order)->get()
        ]);
    }
}
