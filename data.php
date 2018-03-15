<?php
	$myData = array(
		'Hello' => array(
			'text' => ['Hello', "Hey, {$userName}", 'Hi'],
		),
		'Whats up?' => array(
			'text' => 'I am ok, and you?',
			'attachment' => 'photo152839977_456241076',
		), 
		'Sticker' => array(
			'sticker_id' => '122',
		),
		'Send mixed' => array(
			'text' => 'The message contains many attachments',
			'attachment' => 'photo152839977_456241076,photo-146669443_456239051,video40870988_456239082',
		),
	);

	foreach ($myData as $key => $value) 
	{
		if ($body == $key)
			$message = $value;
	}

	if (gettype($message['text']) == "array")
	{
		$var = $message['text'];
		$random = rand(0, count($message['text'])-1);
		$message['text'] = $var[$random];
	}
?>