<?php

class __Mustache_fa310aaa8123dbaf02e4e333b3575d11 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        if ($partial = $this->mustache->loadPartial('core_form/element-group-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
