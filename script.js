$(document).ready(() => {
    Pusher.logToConsole = true;

    var pusher = new Pusher("c3477fa092bd6f0e0d6a", {
        cluster: "eu",
    });

    var channel = pusher.subscribe("my-channel");
    channel.bind("load-messages", function (data) {
        load_messages();
    });

    const load_messages = () => {
        $.ajax({
            url: "load_messages.php",
            type: "POST",
            data: {},
            success: function (data) {
                $(".tblmessages").html(data);
            },
        });
    };

    load_messages();

    $(".form_message").submit((e) => {
        e.preventDefault();

        const formData = $(".form_message").serializeArray();

        $.ajax({
            url: "send_message.php",
            type: "POST",
            data: formData,
            success: function (data) {
                console.log(data);
            },
        });
    });
});
