<?php
    include "FormPost.html";
    echo "<div class=box>";
    echo "<h1 text-align=center>Hasil POST & Enctype</h1>";
        $nama_file=$_FILES["avatar"]["name"];
        $tmp_name=$_FILES["avatar"]["tmp_name"];
        $local_image="ktp/";
    move_uploaded_file($tmp_name,$local_image.$nama_file);
    echo '<td style=align="center>
    <img src="ktp/'.$nama_file.'" width="500" /><br/></td>';
    
    echo "<br>";
    echo "Nama : ".$_POST["nama"];
    echo "<br><br>";
    echo "Umur : ".$_POST["umur"];
    echo "<br><br>";
    echo "Email : ".$_POST["email"];
    echo "<br><br>";
    echo "Jenis Kelamin : ".$_POST["jeniskelamin"];
    echo "<br><br>";
    echo "</div>";