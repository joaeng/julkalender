<?php
 print date("d");
 print"<br />";
 $dag = date("d");

 if ($dag == '01') {
     echo "<center>";
     echo 'Idag är det första december <br />';
     echo '
     <html>
     <img src="/~joakim/bilder/1.jpg" width="280" height="200" title="Lucka 1" alt="Lucka 1" />

     </html>';
 } elseif ($dag == '02') {
     echo "<center>";
     echo 'Idag är det andra december';
     echo '
     <html>
     <img src="/~joakim/bilder/2.jpg" width="280" height="200" title="Lucka 2" alt="Lucka 2" />

     </html>';
   } elseif ($dag == '03') {
       echo "<center>";
       echo 'Idag är det andra december';
       echo '
       <html>
       <img src="/~joakim/bilder/3.jpg" width="280" height="200" title="Lucka 3" alt="Lucka 3" />

       </html>';
 } else {
     echo 'Nu får du allt vänta på december';
 }










?>
