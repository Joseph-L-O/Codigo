<?php

class SpreadSheetManager
{
	private $filename;

	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function getData()
	{
		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
		$spreadsheet  = $reader->load($this->filename);
		$worksheet = $spreadsheet->getActiveSheet();
		$plainData = $worksheet->toArray('', false, true, false);
		array_shift($plainData); // remocao do cabecalho

		return $plainData;
	}
}
