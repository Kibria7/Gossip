<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Gossip</title>
</head>
<body>
    <div id="wrapper">
        <div id="left_panel">
            <div id="user_info">
                <img id="profile_image" src="./ui/images/user.jpg" alt="">
                <br>
                <span id="username">Username</span>
                <br>
                <span id="email">email@gmail.com</span>

                <br>
                <br>
                <br>

                <div>
                    <label id="label_chat" for="radio_chat">Chat <img src="./ui/icons/chat.png" alt=""></label>
                    <label id="label_contacts" for="radio_contacts">Contacts <img src="./ui/icons/contacts.png" alt=""></label>
                    <label id="label_settings" for="radio_settings">Settings <img src="./ui/icons/settings.png" alt=""></label>
                </div>
            </div>
        </div>
        <div id="right_panel">
            <div id="header">Gossip</div>
            <div id="container">
                <div id="inner_left_panel">
                </div>

                <input type="radio" id="radio_chat" name="nav">
                <input type="radio" id="radio_contacts" name="nav">
                <input type="radio" id="radio_settings" name="nav">

                <div id="inner_right_panel">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>