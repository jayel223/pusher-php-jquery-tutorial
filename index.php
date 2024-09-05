<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusher</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>MESSAGE</td>
                <td>DATE</td>
            </tr>
        </thead>
        <tbody class="tblmessages">

        </tbody>
    </table>

    <form class="form_message">
        <input type="text" name="name" placeholder="Enter your name">
        <textarea name="message"></textarea>
        <button type="submit">
            Send
        </button>
    </form>

    <script src="./script.js"></script>
</body>

</html>