<!-- resources/views/emails/request_notification.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Request Notification</title>
</head>
<body>
    <h1>New Request Form Submission</h1>
    <p><strong>Name:</strong> {{ $form->name }}</p>
    <p><strong>Email:</strong> {{ $form->email }}</p>
    <p><strong>Message:</strong> {{ $form->message }}</p>
</body>
</html>
