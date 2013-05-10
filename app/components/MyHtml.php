<?php

namespace app\components;

use \yii\helpers\base\Html;


class MyHtml extends Html
{

	/**
	* Generates an input type of the given type.
	* @param string $type the type attribute.
	* @param string $name the name attribute. If it is null, the name attribute will not be generated.
	* @param string $value the value attribute. If it is null, the value attribute will not be generated.
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* If a value is null, the corresponding attribute will not be rendered.
	* @return string the generated input tag
	*/
	public static function input($type, $name = null, $value = null, $options = array())
	{
		$options['type'] = $type;
		$options['name'] = $name;
		$options['value'] = $value;
		return '<div class="input-control '.$type.'">'.static::tag('input', null, $options).'</div>';
	}

	/**
	* Generates an input tag for the given model attribute.
	* This method will generate the "name" and "value" tag attributes automatically for the model attribute
	* unless they are explicitly specified in `$options`.
	* @param string $type the input type (e.g. 'text', 'password')
	* @param Model $model the model object
	* @param string $attribute the attribute name or expression. See [[getAttributeName()]] for the format
	* about attribute expression.
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* @return string the generated input tag
	*/
	public static function activeInput($type, $model, $attribute, $options = array())
	{
		$name = isset($options['name']) ? $options['name'] : static::getInputName($model, $attribute);
		$value = isset($options['value']) ? $options['value'] : static::getAttributeValue($model, $attribute);
		if (!array_key_exists('id', $options)) {
			$options['id'] = static::getInputId($model, $attribute);
		}
		return static::input($type, $name, $value, $options);
	}

	/**
	* Generates a text input tag for the given model attribute.
	* This method will generate the "name" and "value" tag attributes automatically for the model attribute
	* unless they are explicitly specified in `$options`.
	* @param Model $model the model object
	* @param string $attribute the attribute name or expression. See [[getAttributeName()]] for the format
	* about attribute expression.
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* @return string the generated input tag
	*/

	public static function activeTextInput($model, $attribute, $options = array())
	{
		return static::activeInput('text', $model, $attribute, $options);
	}

	/**
	* Generates a text area input.
	* @param string $name the input name
	* @param string $value the input value. Note that it will be encoded using [[encode()]].
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* If a value is null, the corresponding attribute will not be rendered.
	* @return string the generated text area tag
	*/
	public static function textarea($name, $value = '', $options = array())
	{
		$options['name'] = $name;
		return '<div class="input-control textarea">'.static::tag('textarea', static::encode($value), $options).'</div>';
	}

	/**
	* Generates a textarea tag for the given model attribute.
	* The model attribute value will be used as the content in the textarea.
	* @param Model $model the model object
	* @param string $attribute the attribute name or expression. See [[getAttributeName()]] for the format
	* about attribute expression.
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* @return string the generated textarea tag
	*/
	public static function activeTextarea($model, $attribute, $options = array())
	{
		$name = static::getInputName($model, $attribute);
		$value = static::getAttributeValue($model, $attribute);
		if (!array_key_exists('id', $options)) {
			$options['id'] = static::getInputId($model, $attribute);
		}
		return static::textarea($name, $value, $options);
	}

}