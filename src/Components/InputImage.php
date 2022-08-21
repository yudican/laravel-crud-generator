<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class InputImage extends Component
{
  public $name;
  public $label;
  public $foto;
  public $path;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $name = null,
    $label = null,
    $foto = null,
    $path = null,
  ) {
    $this->name = $name;
    $this->label = $label;
    $this->foto = $foto;
    $this->path = $path;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::input-image');
  }
}
