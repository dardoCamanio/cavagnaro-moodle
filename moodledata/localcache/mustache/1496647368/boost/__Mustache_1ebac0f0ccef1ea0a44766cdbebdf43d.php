<?php

class __Mustache_1ebac0f0ccef1ea0a44766cdbebdf43d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA5cb2e458f830ef744d623af47dbeb0a($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '<div id="tool-list-loader-container">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        // 'proxies' inverted section
        $value = $context->find('proxies');
        if (empty($value)) {
            
            // 'tools' inverted section
            $value = $context->find('tools');
            if (empty($value)) {
                
                $buffer .= $indent . '<div id="tool-notools-text">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section480b8c0397cb86d33ef2566f1fb0f370($context, $indent, $value);
                $buffer .= '</div>
';
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="tool-card-container">
';
        // 'proxies' section
        $value = $context->find('proxies');
        $buffer .= $this->sectionCf472df0108766e62249a6471c80e50b($context, $indent, $value);
        // 'tools' section
        $value = $context->find('tools');
        $buffer .= $this->section9341771ec1e55aa1f87479c2f2632b00($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA5cb2e458f830ef744d623af47dbeb0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tooltypes, mod_lti ';
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
                
                $buffer .= ' tooltypes, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section480b8c0397cb86d33ef2566f1fb0f370(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' no_lti_tools, mod_lti ';
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
                
                $buffer .= ' no_lti_tools, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf472df0108766e62249a6471c80e50b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> mod_lti/tool_proxy_card }}
    ';
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
                
                if ($partial = $this->mustache->loadPartial('mod_lti/tool_proxy_card')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9341771ec1e55aa1f87479c2f2632b00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> mod_lti/tool_card }}
    ';
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
                
                if ($partial = $this->mustache->loadPartial('mod_lti/tool_card')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
