<?php
//3dsfwefwef132131231sd.php
 define("DIR", __DIR__);
 $old_composer_md5 =  ('composer.json');
  exec("cd ../..",$out);
 exec("git pull",$out);
 if (!$out) {
     $composer_md5 = md5_file('composer.json');
     if ($old_composer_md5 !=$composer_md5) {
         exec("composer update",$out);
     }
 }
