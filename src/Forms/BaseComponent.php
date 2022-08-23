<?php

namespace TysonLaravel\FormComponents\Forms;

use Illuminate\View\Component;
use TysonLaravel\FormComponents\Traits\Render;

abstract class BaseComponent extends Component
{
    use Render;

    /**
     * Need validate is required
     *
     * @return string
     */
    public function required()
    {
        return property_exists($this, 'required') && $this->required ? 'required' : '';
    }

    /**
     * Check setting readonly and set attribute
     *
     * @return string
     */
    public function isReadonly()
    {
        if (!$this->attributes->has('readonly') || !$this->attributes->get('readonly')) {
            return null;
        }

        return 'readonly=""';
    }
}
