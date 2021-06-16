<?php

$functionName = 'autoload_import_'.$_RULE.'_'.$file->getTimestamp();
eval('function '.$functionName.'($class) { 
	foreach (getPaths(__DIR__) as $path) { 
		$filename = $path.DS.$class.".php";
		if (file_exists($filename)) { 
			require_once $filename; 
		} 
	}
}');

spl_autoload_register($functionName);

function getPaths($sub='') {
	$folders  = array(); 
	foreach(glob($sub .DS.'*' , GLOB_ONLYDIR) as $folder) {
		$folders[] = $folder; 
		$folders   = array_merge($folders,getPaths($folder));
	}
	return $folders;
}
