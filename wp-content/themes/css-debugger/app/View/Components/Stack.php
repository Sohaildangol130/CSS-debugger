<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Stack extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    public $class;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert types.
     *
     * @var array
     */
    public $types = [
        '1' => 'l-stack-1',
        '2' => 'l-stack-2',
        '3' => 'l-stack-3',
        '4' => 'l-stack-4',
    ];

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($class = '', $message = null)
    {
        // $this->type = $this->types[$stack] ?? $this->types['default'];
        $this->class = $class;
        // $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.stack');
    }
}
