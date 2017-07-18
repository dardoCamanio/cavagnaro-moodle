<?php

class __Mustache_6b027986d657b4482846f13026fd566f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-myoverview-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="block-myoverview" data-region="myoverview">
';
        $buffer .= $indent . '    <ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link active" href="#myoverview_timeline_view" role="tab" data-toggle="tab">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9c87e81e358f49194c95262063866c2c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link" href="#myoverview_courses_view" role="tab" data-toggle="tab">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section424233a4f7e310956b3d5feff6f62c22($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <div class="tab-content content-centred">
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade in active" id="myoverview_timeline_view">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/timeline-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade" id="myoverview_courses_view">
';
        // 'coursesview' section
        $value = $context->find('coursesview');
        $buffer .= $this->section96ca7dd4058947714303e8da2d7cff49($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9c87e81e358f49194c95262063866c2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timeline, block_myoverview ';
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
                
                $buffer .= ' timeline, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section424233a4f7e310956b3d5feff6f62c22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' courses ';
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
                
                $buffer .= ' courses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96ca7dd4058947714303e8da2d7cff49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> block_myoverview/courses-view }}
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
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/courses-view')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
