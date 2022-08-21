<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class Select extends Component
{
  public $ignore;
  public $name;
  public $label;
  public $id;
  public $handleChange;
  public $type;
  public $class;
  public $multiple;
  public $slot;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $ignore = null,
    $name = null,
    $label = null,
    $id = null,
    $handleChange = null,
    $type = null,
    $class = null,
    $multiple = null,
    $slot = null,
  ) {
    $this->ignore = $ignore;
    $this->name = $name;
    $this->label = $label;
    $this->id = $id;
    $this->handleChange = $handleChange;
    $this->type = $type;
    $this->class = $class;
    $this->multiple = $multiple;
    $this->slot = $slot;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::select');
  }
}
