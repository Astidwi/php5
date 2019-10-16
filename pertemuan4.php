<?php
/*$nama1 = array("Asti" , "Nipia" , "Pika"); //versi lama
$nama2 = ["Asti" , "nipia" , "pika"]; //versi terbaru

    echo "<br>";
    echo "<br>";
    print_r($nama1);
    echo "<br />";
    print_r($nama2);*/


    //array 1 dimensi
   /* $browciss = [
        "nama" => "Nipia",
        "panggilan" => "dugong",
        "umur" => "16"
    ];*/

    //echo "Nama Saya:" . $browciss["nama"];
    //echo "<br>";
    //echo "Saya adalah:" . $browciss["panggilan"];
    //echo "<br>";
    //echo "Umur saya:" . $browciss["umur"];
    //echo "<br>";

    $browciss = array(
        array(
            "nama" => "Nipia",
             "panggilan" => "dugong",
             "umur" => "16"
        ),

        array(
            "nama" => "Asti",
             "panggilan" => "dugong",
             "umur" => "16"
        ),

        array(
            "nama" => "pika",
             "panggilan" => "dugong",
             "umur" => "16"
        ),

        array(
            "nama" => "anisa",
             "panggilan" => "dugong",
             "umur" => "16"
        ),

        array(
            "nama" => "despa",
             "panggilan" => "dugong",
             "umur" => "16"
        )
        );

        //echo $browciss [1]["nama"];
        foreach ($browciss as $cinta){
            echo "Nama:" . $cinta["nama"] . "<br>";
            echo "panggilan:" . $cinta["panggilan"] . "<br>";
            echo "umur:" . $cinta["umur"] . "<br>";
        }
?>