<?php
/**
 * One-line number input field for a form
 * @author abiusx
 *
 */
class jFormInputNumber extends jFormInput
{

	function __construct(jWidget $Parent,$Label=null,$minLength=0,$maxLength=-1)
	{
		parent::__construct($Parent,$Label);
		if ($maxLength===-1)
			$maxLength=4096;
		$this->SetValidation('/^[0-9]{'.$minLength.','.$maxLength.'}$/');
		
	}
}