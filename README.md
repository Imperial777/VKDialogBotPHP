# About
**VKDialogBotPHP** is the simple realization of dialog bot for VK.com on PHP.
>**VK** is one of the most popular social networking app in Eastern Europe (Russia, Ukraine, Belarus). 

VK made *Callback API* for warking with events in public pages. *VKDialogBotPHP* use this API for working with messages events.

# How to use
Repository consists four files:

    config.php
    data.php
    handler.php
    library.php

***config.php*** <br />
Here you can set up your tokens and keys for working with API.

***data.php*** <br />
This file consists of messages and bot answers. You can setup and input  your own data.

***library.php*** <br />
All functions for warking in handler.php

***handler.php*** <br />
Handler is the main file. It warks with quories from your public page in VK.

# Helpful links
 - [VK Callback API documentation](https://vk.com/dev/callback_api)
 - [How to work with Callback API using PHP SDK](https://vk.com/dev/PHP_SDK?f=6.2.%20Callback%20API) (I don't use it)
