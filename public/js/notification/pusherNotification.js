var notificationsWrapper = $('.notification_dropdown1');
var notificationsToggle = notificationsWrapper.find('.notify_icon1');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('.pop_up_notify1');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('new-notification');

// // Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewNotification', function (data) {
    var existingNotifications = notifications.html();

    var newNotificationHtml = `<a href="${data.address}">
        <div class="pop_up_container1">
        <img src="/Profile_Picture/${data.user_photo}"" alt="avatar"  />

        <span class="h3_reply">
            ${data.user_name} has Added New Project
        </span>
        <span class="time"> 20-6-2022 </span>
        </div>
        </a>
        <hr>`;

    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.count_notify1').text(notificationsCount);
    notificationsWrapper.show();
});
