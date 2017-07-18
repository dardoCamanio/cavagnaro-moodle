<?php

class __Mustache_004a2be073ba43ef6a6d5fc3d739b3fc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div id="external-registration-page-container">
';
        $buffer .= $indent . '    <button id="cancel-external-registration" class="btn btn-danger">
';
        $buffer .= $indent . '        <span class="btn-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <div class="btn-loader">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div id="external-registration-template-container"></div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="tool-type-capabilities-container" class="hidden">
';
        $buffer .= $indent . '    <div class="registration-loading-container loading-screen">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <p class="loading-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD3502cb8652b5ca94b45d7b52a2201ac($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="tool-type-capabilities-template-container" aria-live="polite"></div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section41cb52965fd3f0bd246daa9c3899f9b0($context, $indent, $value);

        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
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
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
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

    private function section41cb52965fd3f0bd246daa9c3899f9b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'mod_lti/external_registration\'], function(registration) {
        registration.init();
    });
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
                
                $buffer .= $indent . '    require([\'mod_lti/external_registration\'], function(registration) {
';
                $buffer .= $indent . '        registration.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
