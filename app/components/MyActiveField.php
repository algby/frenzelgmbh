<?php

namespace app\components;

use \yii\widgets\ActiveField;
use \app\components\MyHtml;

class MyActiveField extends ActiveField
{

	public function textInput($options = array())
	{
		$options = array_merge($this->inputOptions, $options);
		return $this->render(MyHtml::activeTextInput($this->model, $this->attribute, $options));
	}

	/**
	* Generates a textarea tag for the given model attribute.
	* The model attribute value will be used as the content in the textarea.
	* @param array $options the tag options in terms of name-value pairs. These will be rendered as
	* the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	* @return string the generated textarea tag
	*/
	public function textarea($options = array())
	{
		$options = array_merge($this->inputOptions, $options);
		return $this->render(MyHtml::activeTextarea($this->model, $this->attribute, $options));
	}

}