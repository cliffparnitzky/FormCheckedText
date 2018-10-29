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
 */

/**
 * Add callback
 */
$GLOBALS['TL_DCA']['tl_form_field']['config']['onload_callback'][] = array('tl_form_field_FormCheckedText', 'initPalettes');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['textChecked'] = str_replace(",label", ",label,confirmLabel", $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text']);

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['confirmLabel'] = $GLOBALS['TL_DCA']['tl_form_field']['fields']['label'];
$GLOBALS['TL_DCA']['tl_form_field']['fields']['confirmLabel']['label'] = &$GLOBALS['TL_LANG']['tl_form_field']['confirmLabel'];

/**
 * Class tl_form_field_FormCheckedText
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2018-2018
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_form_field_FormCheckedText extends Backend
{
  /**
   * Default constructor
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Initialize the palettes when loading
   * @param \DataContainer
   */
  public function initPalettes()
  {
    if (\Input::get('act') == "edit")
    {
      $objFormField = \FormFieldModel::findByPk(\Input::get('id'));
      if ($objFormField != null)
      {
        if ($objFormField->type == 'textChecked')
        {
          $GLOBALS['TL_DCA']['tl_form_field']['fields']['label']['eval']['tl_class'] = $GLOBALS['TL_DCA']['tl_form_field']['fields']['label']['eval']['tl_class'] . " clr";
        }
      }
    }
  }
}

?>