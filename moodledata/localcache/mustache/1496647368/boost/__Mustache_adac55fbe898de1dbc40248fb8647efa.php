<?php

class __Mustache_adac55fbe898de1dbc40248fb8647efa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="loader">
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC8244e3ff2e632f5dcf1816fe4378766($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD3502cb8652b5ca94b45d7b52a2201ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadinghelp, moodle ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loadinghelp, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8244e3ff2e632f5dcf1816fe4378766(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/loading, core, {{#str}} loadinghelp, moodle {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/loading, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD3502cb8652b5ca94b45d7b52a2201ac($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
