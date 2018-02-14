<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/30/17
 * Time: 3:02 AM
 */

include_once '../Modele/Article.php';
    $tableau=array();
    $data ='';
    $tableau = Article::affichetout();
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . "
                        <tr>
                            <td>1</td>
                            <td>id</td>
                            <td>prix</td>
                            <td>desi</td>
                            <td>imqge</td>
                        </tr>
            "
            ;

        }


    }

$file='data.txt';
    $current=file_get_contents($file);
    $current .=$data;
    file_put_contents($file,$current);





