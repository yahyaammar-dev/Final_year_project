<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Destination_Reviews;
use App\Models\product_reviews;
use App\Models\hotel_reviews;


class submitreview extends Controller
{
    public function submitreview(REQUEST $req){
            
        $add = new Reviews;
        $add->type = $_POST["type"];
        $add->text = $_POST["content"];
        $add->rating = $_POST["rating"];
        $add->author = $_POST["author"];
        $add->email = $_POST["email"];
        $add->save();


        $type = $_POST["type"];
        $id = $_POST["id"];

        $last = Reviews::select("review_id")->get();
        $rid = $last[count($last)-1];

        
        if($type=="destination"){
            $add = new Destination_Reviews;
            $add->destination = $id;
            $add->review = $rid["review_id"];
            $add->save();
        }

        if($type=="product"){
            $add = new product_reviews;
            $add->product = $id;
            $add->review = $rid["review_id"];
            $add->save();
        }


        if($type=="hotel"){
            $add = new hotel_reviews;
            $add->hotel = $id;
            $add->review = $rid["review_id"];
            $add->save();
        }

 ?>

<form>
        <input type="button" id="btn" value="Return to previous page" onClick="javascript:history.go(-1)" />
    </form>

    <script>
        document.getElementById('btn').click();
    </script>

<?php

    }
}
