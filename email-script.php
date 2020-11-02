<?php
// Multiple recipients
$to = 'arianajulita@gmail.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
// $headers[] = 'To: Julita <arianajulita@gmail.com>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
$headers[] = 'Cc: arianajulita@yahoo.com';
$headers[] = 'Bcc: taorentaoren21@yahoo.com';

// Mail it
$success = mail($to, $subject, $message, implode("\r\n", $headers));

// $success = mail($to, $subject, $message, $headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
else {
    echo ("Success! Check your email!");
}
?>