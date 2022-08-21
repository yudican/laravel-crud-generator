<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class InputFile extends Component
{
  public $name;
  public $label;
  public $file;
  public $path;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $name = null,
    $label = null,
    $file = null,
    $path = null,
  ) {
    $this->name = $name;
    $this->label = $label;
    $this->file = $file;
    $this->path = $path;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::input-file');
  }
}
