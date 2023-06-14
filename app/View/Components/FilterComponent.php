<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterComponent extends Component
{
    public $kategori = null;
    public $link_filter = null;
    public $method = null;
    public $model_name = null;
    public $is_modal = false;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Support\Collection|array $kategori, $linkFilter = null, $method = null, $modelName = null, $isModal = false)
    {
        $this->kategori = $kategori;
        $this->link_filter = $linkFilter;
        $this->method = $method;
        $this->model_name = $modelName;
        $this->is_modal = $isModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-component', [$this->kategori, $this->link_filter, $this->method, $this->model_name, $this->is_modal]);
    }
}
