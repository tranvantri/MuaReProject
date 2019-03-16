<?php
/*
class Test extends Controller{
    public function getComment()
    {
        $comments = DB::table('comments')
                        ->join('products','products.id','=','comments.idProduct')
                        ->where('products.id',1)
                        ->select('comments.id as idComment', 'comments.value as content', 'comments.idParent as idParent', 'comments.idProduct as idProduct')
                        ->get();
                    //$this->myJson($comments);
                header("Content-type: application/json");
                $comments = json_encode($comments);
                echo $comments;
        echo json_encode(array('status' => 'ok'));
        die;
    }
}
*/
namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Categories;
use App\Places;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Cookie;
header("Content-Type: application/json");
class Test extends Controller{
    public function getComment()
    {
        //$number = htmlspecialchars($_GET["number"]);
        $number = 1;
        if(is_numeric($number) && $number > 0 && $number < 100){
            echo "<table>";
            for($i=0; $i<11; $i++){
                echo "<tr>";
                    echo "<td>$number x $i</td>";
                    echo "<td>=</td>";
                    echo "<td>" . $number * $i . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else{
            echo "<p>Please enter a number between 0 and 100.</p>";
        }
    }
}
?>