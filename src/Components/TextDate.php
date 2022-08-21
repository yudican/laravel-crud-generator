<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class TextDate extends Component
{
  public $name;
  public $label;
  public $min;
  public $max;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $name = null,
    $label = null,
    $min = null,
    $max = null,
  ) {
    $this->name = $name;
    $this->label = $label;
    $this->min = $min;
    $this->max = $max;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::text-date');
  }
}
