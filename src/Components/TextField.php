<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class TextField extends Component
{
  public $name;
  public $label;
  public $type;
  public $value;
  public $placeholder;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $name = null,
    $label = null,
    $type = null,
    $value = null,
    $placeholder = null
  ) {
    $this->name = $name;
    $this->label = $label;
    $this->type = $type;
    $this->value = $value;
    $this->placeholder = $placeholder ?? "Masukkan $label";
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::text-field');
  }
}
