<?php

class __Mustache_0f566167f5f93794cbb5d31492e9f121 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<h2>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC339f4b4bb719facc6862ca74be03dd9($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '<div id="main-content-container">
';
        $buffer .= $indent . '    <div id="registration-form-container" aria-live="polite">
';
        $buffer .= $indent . '        <div id="registration-feedback-container" aria-live="polite"></div>
';
        $buffer .= $indent . '        <div id="registration-choice-container" class="centered-menu">
';
        $buffer .= $indent . '            <div class="card card-block">
';
        $buffer .= $indent . '                <p class="lead">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section549482f0793540fd4f3041e4c84a40ee($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <form class="form-inline" id="add-tool-form">
';
        $buffer .= $indent . '                    <div class="control-group">
';
        $buffer .= $indent . '                        <input name="url"
';
        $buffer .= $indent . '                            class="form-control"
';
        $buffer .= $indent . '                            type="url"
';
        $buffer .= $indent . '                            id="tool-url"
';
        $buffer .= $indent . '                            placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF25389c9ab79f9294b47ecbb4e7c7a3a($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                            required>
';
        $buffer .= $indent . '                        <button id="tool-create-button" type="submit" class="btn btn-success">
';
        $buffer .= $indent . '                            <span class="btn-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDa48301760702f53b56bdaeafc474fae($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <div class="btn-loader">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
            $buffer .= $partial->renderInternal($context, $indent . '                                ');
        }
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </form>
';
        $buffer .= $indent . '                <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section61fd3d0c7ed1e28fd05549d2f122781e($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p><a href="';
        $value = $this->resolveValue($context->find('managetoolsurl'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section18b871ef77c34dd80d2a7ef49025bb61($context, $indent, $value);
        $buffer .= '</a><br/><a href="';
        $value = $this->resolveValue($context->find('managetoolproxiesurl'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5459e634a819c032c33c41370952d796($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="cartridge-registration-container" aria-live="polite" class="hidden">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/cartridge_registration_form')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="external-registration-container" aria-live="polite" class="hidden">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/external_registration')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="tool-list-container" class="loading">
';
        if ($partial = $this->mustache->loadPartial('mod_lti/tool_list')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionF905e2ecd82ef0689673095a37ab6361($context, $indent, $value);

        return $buffer;
    }

    private function sectionC339f4b4bb719facc6862ca74be03dd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manage_external_tools, mod_lti ';
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
                
                $buffer .= ' manage_external_tools, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section549482f0793540fd4f3041e4c84a40ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' autoaddtype, mod_lti ';
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
                
                $buffer .= ' autoaddtype, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF25389c9ab79f9294b47ecbb4e7c7a3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' toolurlplaceholder, mod_lti ';
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
                
                $buffer .= ' toolurlplaceholder, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa48301760702f53b56bdaeafc474fae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' add ';
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
                
                $buffer .= ' add ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd3d0c7ed1e28fd05549d2f122781e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manuallyaddtype, mod_lti, {{{configuremanualurl}}} ';
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
                
                $buffer .= ' manuallyaddtype, mod_lti, ';
                $value = $this->resolveValue($context->find('configuremanualurl'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18b871ef77c34dd80d2a7ef49025bb61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manage_tools, mod_lti ';
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
                
                $buffer .= ' manage_tools, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5459e634a819c032c33c41370952d796(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manage_tool_proxies, mod_lti ';
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
                
                $buffer .= ' manage_tool_proxies, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF905e2ecd82ef0689673095a37ab6361(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'mod_lti/tool_configure_controller\'], function(controller) {
        controller.init();
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
                
                $buffer .= $indent . '    require([\'mod_lti/tool_configure_controller\'], function(controller) {
';
                $buffer .= $indent . '        controller.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
