<?php

namespace App\Http\Livewire;

use App\Models\PopUp;
use Livewire\Component;
use Livewire\WithPagination;

class PopUpComponent extends Component
{
    use WithPagination;

    public $search = "";
    public $limit = 10;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {   
        $popUps = new PopUp(); 

        if($this->search != "") 
        {
            $keyword  = $this->search;

            $popUps = $popUps->where(function($q) use ($keyword){
                $q->where('name','like','%'.$keyword.'%');
            });
        }
        $popUps = $popUps->orderBy('created_at','desc')
                            ->paginate($this->limit);
        
        $start = ($popUps->currentPage() - 1) * $this->limit + 1;
        $end = min($popUps->currentPage() * $this->limit, $popUps->total());

        return view('livewire.pop-up-component',[
            'popUps' => $popUps,
            'limit' => $this->limit,
            'start' => $start,
            'end' => $end,
            'total' => $popUps->total()
        ]);
    }

    public function changeEvent($value)
    {
        $this->limit = $value;
        $this->resetPage();
    }
}
