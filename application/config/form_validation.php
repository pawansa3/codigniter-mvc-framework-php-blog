<?php

$config = [
	
	'add_article' =>[
						[
							'field'=>'title',
							'label'=>'Article Title',
							'rules'=>'required|alphadash'
						],
						[
							'field'=>'body',
							'label'=>'Article Body',
							'rules'=>'required'
						]
					]

];

?>