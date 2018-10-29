<?php

/**
 * Contao Open Source CMS
 * Copyright (C)  2005-2018 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2018-2018
 * @author     Cliff Parnitzky
 * @package    FormCheckedText
 * @license    LGPL
 * @filesource FormPassword.php
 */

namespace CliffParnitzky\FormCheckedText;

/**
 * Class FormTextFieldChecked
 *
 * Form field "textChecked".
 * @copyright  Cliff Parnitzky 2018-2018
 * @author     Cliff Parnitzky
 * @package    Widget
 */
class FormTextFieldChecked extends \FormTextField
{
	/**
	 * Template
	 *
	 * @var string
	 */
	protected $strTemplate = 'form_textfield_checked';

	/**
	 * Validate input and set value
	 * @param mixed
	 * @return string
	 */
	protected function validator($varInput)
	{
		$this->blnSubmitInput = false;
		
		if (!strlen($varInput) && (strlen($this->varValue) || !$this->mandatory))
		{
			return '';
		}
		
		if ($varInput != $this->getPost($this->strName . '_confirm'))
		{
			$this->addError($GLOBALS['TL_LANG']['ERR']['textMatch']);
		}

		$varInput = parent::validator($varInput); 

		if (!$this->hasErrors())
		{
			$this->blnSubmitInput = true;
			return $varInput;
		}

		return $varInput;
	}
}

?>