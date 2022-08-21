<?php

namespace Yudican\LaravelCrudGenerator\Components;

use Illuminate\View\Component;

class ActionButton extends Component
{
  public $actions = [];
  public $id;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $id,
    $actions = null,
  ) {
    $action_default = [
      [
        'type' => 'button',
        'route' => 'getDataById(' . $id . ')',
        'label' => 'Edit',
      ],
      [
        'type' => 'button',
        'route' => 'confirmDelete(' . $id . ')',
        'label' => 'Hapus',
      ]
    ];
    $this->actions = $actions ?? $action_default;
    $this->id = $id;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('crud-generator-components::action-button');
  }
}
