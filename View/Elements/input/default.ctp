<?php
$class = null;
$options = null;

if ($data['type'] === 'integer') {
	$class = 'span1';
} else if ($data['type'] === 'string') {
	$class = 'span3';
} else if ($data['type'] === 'text') {
	$class = 'span5';
}

if ($this->action === 'index') {
	$class = null;
}

if (isset($model->enum[$field])) {
	$options = $model->enum[$field];
}

echo $this->Form->input($field, array(
	'div' => false,
	'label' => false,
	'options' => $options,
	'class' => $class,
	'default' => $data['default'],
	'empty' => ($this->action === 'index')
));