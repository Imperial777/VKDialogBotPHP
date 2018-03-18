<?php

function getAnswer($body, $data){
    foreach ($data as $key => $value) 
    {
        if ($body == $key)
            $message = $value;
    }

    if (gettype($message['text']) == 'array')
    {
        $var = $message['text'];
        $random = rand(0, count($message['text'])-1);
        $message['text'] = $var[$random];
    }

    return $message;
}

function sendMessage($message, $user_id, $token, $v)
{
    $request_params = array(
        'message' => $message['text'],
        'attachment' => $message['attachment'],
        'sticker_id' => $message['sticker_id'],
        'user_id' => $user_id,
        'access_token' => $token,
        'v' => $v
    );
        
    $get_params = http_build_query($request_params);
    file_get_contents('https://api.vk.com/method/messages.send?' . $get_params);
}

function includeData()
{
    require 'data.php';
}

function getUserId($data)
{
    $user_id = $data->object->user_id;
    return $user_id;
}

function getBody($data)
{
    $user_id = $data->object->body;
    return $user_id;
}

function getUserInfo($user_id)
{
	return json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$user_id}&v=5.0"));
}

function ok()
{
    echo('ok');
}
?>