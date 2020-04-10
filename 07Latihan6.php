# file-07Latihan6
Pemrograman Web 2
<HTML> 
<HEAD> 
<TITLE> Penggunaan List 2 </TITLE> 
</HEAD> 
<BODY> 
<?php 
$program = array('Bobo','Doraemon','Spiderman'); 
list($Majalah, , $Film) = $program; 
echo "Jenis Buku & Hiburan :"; 
echo "<br />"; 
echo "Cerpen : $Majalah"; 
echo "<br />"; 
echo "Bioskop : $Film"; 
?> 
</BODY> 
</HTML>