<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StageComponent extends Component
{
    public $data = [];
    public $link = "/stages/update";
    public $model_class = "";
    public $id = "";
    public $stage = 1;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Support\Collection | array $data, string $modelClass, string $id, int $stage)
    {
        $this->data = $data;
        $this->id = $id;
        $this->model_class = $modelClass;
        $this->stage = $stage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stage-component', [
            "data" => $this->data,
            "link" => $this->link, 
            "stage" => $this->stage, 
            "id" => $this->id, 
            "model_class" => $this->model_class
        ]);
    }
}
