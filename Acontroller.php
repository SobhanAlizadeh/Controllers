<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acontroller extends Controller
{
    public function x(){
        $i=0;
        $rnd=Rand(1,5);
        $handle = fopen("inputfile.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $i++;
                if ($i==$rnd) {
                    $a[]= $line;
                }
            }
            print_r($a);

            fclose($handle);
        } else {
            echo "Error";
        }
    }
}
