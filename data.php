<?php
$groupsApi = (new MailerLiteApi\MailerLite("key"))->groups();

$subscriber = [
    'email' => 'john@example.com',
    'fields' => [
        'name' => 'John',
        'last_name' => 'Doe',
        'company' => 'John Doe Co.'
    ]
];

$response = $groupsApi->addSubscriber(6725805, $subscriber); // Change GROUP_ID with ID of group you want to add subscriber to
?>
