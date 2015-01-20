<?php
return [
	'title'    => 'Transparency',
	'markdown' => [
		'title'          => 'Markdown',
		'note'           => 'Each of these is an example of how different components of Markdown works, which is similar to BBCode.',
		'note_reference' => "For a reference list of all Markdown elements, please <a href='/transparency/markdown/reference'>click here.</a>",
		'reference'      => [
			'title' => 'Markdown Reference',
			'note'  => "This is the reference list for Markdown elements.  For a tutorial, please visit the <a href='/transparency/markdown'>Markdown tutorial</a>.",
		],
		'rendered' => 'Rendered Result',
		'source'   => "RuneTime uses a Markdown renderer called <a href='http://parsedown.com'>Parsedown</a>.  These Markdown templates are from their <a href='https://github.com/erusev/parsedown'>Github repository</a> and rendered by their Markdown parser on pageload.  Their Markdown parser is under MIT license.",
		'table_of_contents' => 'Table of Contents',
	],
];