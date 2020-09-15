<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Akronim|Alfa+Slab+One|Amatic+SC|Averia+Sans+Libre|Baloo+Bhai|Bungee|Bungee+Hairline|Bungee+Inline|Calistoga|Caveat|Comfortaa|Courgette|Cute+Font|Dancing+Script|Diplomata|East+Sea+Dokdo|Finger+Paint|Flavors|Fredericka+the+Great|Fredoka+One|Geostar|Girassol|Great+Vibes|Indie+Flower|Kalam|Keania+One|Kumar+One+Outline|Lakki+Reddy|League+Script|Libre+Barcode+39+Text|Lilita+One|Lily+Script+One|Lobster|Mansalva|Molle:400i|Monofett|Nosifer|Odibee+Sans|Pacifico|Patua+One|Permanent+Marker|Piedra|Poiret+One|Raleway+Dots|Ribeye+Marrow|Righteous|Satisfy|Shadows+Into+Light|Sirin+Stencil&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css?family=Abril+Fatface|Akronim|Alfa+Slab+One|Amatic+SC|Averia+Sans+Libre|Baloo+Bhai|Bungee|Bungee+Hairline|Bungee+Inline|Calistoga|Caveat|Comfortaa|Courgette|Cute+Font|Dancing+Script|Diplomata|East+Sea+Dokdo|Finger+Paint|Flavors|Fredericka+the+Great|Fredoka+One|Geostar|Girassol|Great+Vibes|Indie+Flower|Kalam|Keania+One|Kumar+One+Outline|Lakki+Reddy|League+Script|Libre+Barcode+39+Text|Lilita+One|Lily+Script+One|Lobster|Mansalva|Molle:400i|Monofett|Nosifer|Odibee+Sans|Pacifico|Patua+One|Permanent+Marker|Piedra|Poiret+One|Raleway+Dots|Ribeye+Marrow|Righteous|Satisfy|Shadows+Into+Light|Sirin+Stencil&display=swap');

.font1{font-family: 'Girassol', cursive;}
.font2{font-family: 'Lilita One', cursive;}
.font3{font-family: 'Lakki Reddy', cursive;}
.font4{font-family: 'Lobster', cursive;}
.font5{font-family: 'Indie Flower', cursive;}
.font6{font-family: 'Dancing Script', cursive;}
.font7{font-family: 'Pacifico', cursive;}
.font8{font-family: 'Shadows Into Light', cursive;}
.font9{font-family: 'Abril Fatface', cursive;}
.font10{font-family: 'Comfortaa', cursive;}
.font11{font-family: 'Amatic SC', cursive;}
.font12{font-family: 'Righteous', cursive;}
.font13{font-family: 'Baloo Bhai', cursive;}
.font14{font-family: 'Patua One', cursive;}
.font15{font-family: 'Permanent Marker', cursive;}
.font16{font-family: 'Caveat', cursive;}
.font17{font-family: 'Courgette', cursive;}
.font18{font-family: 'Alfa Slab One', cursive;}
.font19{font-family: 'Satisfy', cursive;}
.font20{font-family: 'Calistoga', cursive;}
.font21{font-family: 'Odibee Sans', cursive;}
.font22{font-family: 'Fredoka One', cursive;}
.font23{font-family: 'Great Vibes', cursive;}
.font24{font-family: 'Kalam', cursive;}
.font25{font-family: 'Mansalva', cursive;}
.font26{font-family: 'Poiret One', cursive;}
.font27{font-family: 'Bungee', cursive;}
.font28{font-family: 'Fredericka the Great', cursive;}
.font29{font-family: 'Raleway Dots', cursive;}
.font30{font-family: 'Bungee Inline', cursive;}
.font31{font-family: 'Finger Paint', cursive;}
.font32{font-family: 'Averia Sans Libre', cursive;}
.font33{font-family: 'Lily Script One', cursive;}
.font34{font-family: 'Sirin Stencil', cursive;}
.font35{font-family: 'Ribeye Marrow', cursive;}
.font36{font-family: 'Nosifer', cursive;}
.font37{font-family: 'Diplomata', cursive;}
.font38{font-family: 'Keania One', cursive;}
.font39{font-family: 'Kumar One Outline', cursive;}
.font40{font-family: 'Libre Barcode 39 Text', cursive;}
.font41{font-family: 'Bungee Hairline', cursive;}
.font42{font-family: 'East Sea Dokdo', cursive;}
.font43{font-family: 'Piedra', cursive;}
.font44{font-family: 'Geostar', cursive;}
.font45{font-family: 'Cute Font', cursive;}
.font46{font-family: 'Flavors', cursive;}
.font47{font-family: 'Molle', cursive;}
.font48{font-family: 'Monofett', cursive;}
.font49{font-family: 'League Script', cursive;}
.font50{font-family: 'Akronim', cursive;}


</style>
    <title>pluto quick logo maker</title>
  </head>
  <body>

  <div class='container' >
      <form action="" method="get" class='form-group'>
<input type="text" value="<?php echo @$_REQUEST['searchForThis']; ?>" name="searchForThis" placeholder="search for this" class='form-control'/>
<input type="text" value="<?php echo @$_REQUEST['searchForThis']; ?>" name="logoWords" placeholder="Logo Words" class='form-control'/>
<input type="submit" value="submit" name="submit" />
</form>
<?php



if(isset($_REQUEST['searchForThis'])){
$searchFor = $_REQUEST['searchForThis'];	
$searchForThisUrl = $_REQUEST['searchForThis'];	
$logoWords = $_REQUEST['logoWords'];
}else{
	$searchFor = "random";
	$logoWords = "words";
}


    require("OAuth.php");
     
    $cc_key  = "5e216aa2f7404c12b88792f549a054cb";
    $cc_secret = "ba908c8220b84aceaf7e8510917e0e0e";
    $url = "http://api.thenounproject.com/icons/$searchForThisUrl";
    $args = array();
    $args["limit"] = 100;
     
    $consumer = new OAuthConsumer($cc_key, $cc_secret);
    $request = OAuthRequest::from_consumer_and_token($consumer, NULL,"GET", $url, $args);
    $request->sign_request(new OAuthSignatureMethod_HMAC_SHA1(), $consumer, NULL);
    $url = sprintf("%s?%s", $url, OAuthUtil::build_http_query($args));
    $ch = curl_init();
    $headers = array($request->to_header());
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $rsp = curl_exec($ch);
    $results = json_decode($rsp,true);
    //print_r($results);
    //print_r($rsp)
	echo "<div class='card-columns'>";
	foreach($results as $result){
			for($x = 0; $x <= 49; $x++) {
				@$myIcons = $results['icons'][$x]['preview_url_84'];
				$r=rand(0,254);
				$g=rand(0,254);
				$b=rand(0,254);
	echo " <div class='card' style='padding:2em; background-color: rgb($r, $g, $b); width:260px;'>";
    echo "<center><img src='$myIcons'><br><div class='font$x' style='font-size:2.5em'>$logoWords</div></center>";
	echo "</div>";
}
		

}
	echo "</div>";
?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


