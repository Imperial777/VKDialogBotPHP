<?php

require 'library.php';
require 'config.php';
require 'data.php';

if (!isset($_REQUEST)) {
	return;
}

$data = json_decode(file_get_contents('php://input'));

switch ($data->type) {

    case EVENT_CONFIRMATION:
        echo CONFIRMATION_TOKEN;
        break;

    case EVENT_MESSAGE_NEW:
        $userId = getUserId($data);
        $body = getBody($data);

        $userInfo = getUserInfo($userId);
        $userName = $userInfo->response[0]->first_name;

        $message = getAnswer($body, $myData);
        sendMessage($message, $userId, VK_API_TOKEN, VK_API_VERSION);
        ok();
        break;

}

?>