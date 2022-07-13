var notificationsWrapper = $('.notification_dropdown_2');
var notificationsToggle = notificationsWrapper.find('.notify_icon_2');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('.pop_up_notify_2');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new-notification');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewNotification', function (data) {
    var existingNotifications = notifications.html();

    var newNotificationHtml = `<a style="background-color:#10737c" href="${data.address}">
        <div class="pop_up_container_2">
        <img src="/Profile_Picture/${data.profile_picture}"" alt="avatar"  />
        <span class="h3_reply">
            ${data.user_name} has commented to your post
        </span>
        <span class="time"> 3-7-2022 </span>
        </div>
        </a>
        <hr>`;

    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.count_notify_2').text(notificationsCount);
    notificationsWrapper.show();
});
