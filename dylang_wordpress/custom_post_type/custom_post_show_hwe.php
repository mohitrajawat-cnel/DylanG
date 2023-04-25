   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>

.mail{
      white-space: nowrap;
   }
.days{
      white-space: nowrap;
   }
.address-title{
      color: #4f4e4e !important
   }
.btn.mt-3.w-100 {
  background: #d1471e;
  color: white;
  font-weight: bold;
}
  .full section{
   margin-left: 118px !important;
   margin-right: 131px !important;
 }

.elementor-section .elementor-container{
   display: unset!important;
}
.elementor-element-populated{
   padding:0px!important;
}


@media only screen and (max-width: 331px) {
   .col-md-4.gred {
  width: 100%;

}
.col-md-4.wike {
   width: 100%;
 
}
.col-md-4.date {
   width: 100%;

}
}
@media (min-width:331px) and (max-width:369px) {
   .days{
      font-size: 15px;
   }
}
@media (min-width:331px) and (max-width:351px) {
   .days{
      font-size: 14px;
   }
}
@media (min-width:332px) and (max-width:339px) {
   .date{
      padding-left: 10px;
   }
   .gred{
      padding-left: 10px;
   }
}
@media (min-width:768px) and (max-width:991px) {
   .container {
      max-width: 845px!important;
   }
  
}
@media (min-width:768px) {
    .office_title{
      margin-top: -9px!important;
    }

}
@media (min-width: 332px) and (max-width: 1024px){
         
   .col-md-4.gred {
      width: 34%;
      padding-right: 0px;
   }
   .col-md-4.wike {
      width: 32%;
      padding-right: 0px;
   }
   .col-md-4.date {
      width: 34%;
      padding-right: 0px;
   } 
   
   /* .button_office button{
      width: 252px !important;
   } */
}
.service-preview__thumbnail{
   position: relative;
  width: 100%;
  padding-bottom: 100%;
  background-size: cover;
  background-position: center;
}
</style>
<?php
global $wpdb;
	$select = "SELECT * from ".$wpdb->prefix."posts where post_type='office' and post_status='publish'";
	$result = $wpdb->get_results($select,ARRAY_A);

	foreach($result as $data)
	{
      
		$post_id = $data['ID']; 

		$address='';
		$address = get_post_meta($post_id,'office_address',true);
      


		$button_title='';
		$post_id = $data['ID']; 
		$button_title = get_post_meta($post_id,'button_title',true);

		
		$office_title='';
		$post_id = $data['ID']; 
		$office_title = get_post_meta($post_id,'office_title',true);

		$office_phone_nomber='';
		$post_id = $data['ID']; 
		$office_phone_nomber = get_post_meta($post_id,'office_phone_nomber',true);
      $office_phone_url = $cleanString = preg_replace("/[^0-9]/", "", $office_phone_nomber);

		
		$office_email_address='';
		$post_id = $data['ID']; 
		$office_email_address = get_post_meta($post_id,'office_email_address',true);

		$office_image='';
		$post_id = $data['ID']; 
		$office_image_id = get_post_meta($post_id,'office_image',true);

		$office_image = get_post_meta($office_image_id,'_wp_attached_file',true);
 
		$image_full_url=get_site_url().'/wp-content/uploads/'.$office_image;


		$maandag_openingsuren_morning='';
      $dinsdag_openingsuren_morning="";

		$post_id = $data['ID']; 
		$maandag_openingsuren_morning = get_post_meta($post_id,'Maandag_ Peningsuren Morning',true);
	   $dinsdag_openingsuren_morning = get_post_meta($post_id,'Dinsdag Openingsuren Morning',true);
		$woensdag_openingsuren_morning = get_post_meta($post_id,'Woensdag Openingsuren Morning',true);
		$donderdag_openingsuren_morning = get_post_meta($post_id,'Donderdag Openingsuren Morning',true);
		$brijdag_openingsuren_morning = get_post_meta($post_id,'Brijdag Openingsuren Morning',true);
		$zaterdag_openingsuren_morning = get_post_meta($post_id,'Zaterdag Openingsuren Morning',true);
		$zondag_openingsuren_morning = get_post_meta($post_id,'Zondag Openingsuren  Morning',true);

		



		$office_openingsuren_Evening='';
      $brijdag_openingsuren_Evening = '';
		$post_id = $data['ID']; 
		// $office_openingsuren_Evening = get_post_meta($post_id,'office_openingsuren_Evening',true);
      $office_openingsuren_Evening = get_post_meta($post_id,'Office openingsuren Evening',true);
		$dinsdag_openingsuren_Evening = get_post_meta($post_id,'dinsdag openingsuren Evening',true);
		$woensdag_openingsuren_Evening = get_post_meta($post_id,'woensdag openingsuren Evening',true);
		$donderdag_openingsuren_Evening = get_post_meta($post_id,'donderdag_openingsuren Evening',true);
		$brijdag_openingsuren_Evening = get_post_meta($post_id,'brijdag_openingsuren Evening',true);
		$zaterdag_openingsuren_Evening = get_post_meta($post_id,'zaterdag_openingsuren Evening',true);
		$zondag_openingsuren_Evening = get_post_meta($post_id,'zondag_openingsuren Evening',true);


		

?>
<div class="full_section container">
   <div class="card" style="box-shadow: 0px 2px 11px 6px #e4e4e4;  margin-top: 35px;">
      <div class="card-body" style="height: 100%;">
         <div class="container">
            <div class="row">
               <div class="col-md-4 img-pding">
                  <!-- <img class="img-size" src="<?php echo $image_full_url; ?>" alt="Girl in a jacket" width="500" height="600" style="margin-top: 28px; height: 242px;">  -->
                  <div class="service-preview__thumbnail lazy" data-src="<?php echo $image_full_url; ?>" style="background-image: url('<?php echo $image_full_url; ?>');">
                        
                        </div>
                  <div class="button_office">
                     <a href="https://schatmijnhuis.be/contact/" ><button type="button"class="btn mt-3 w-100"><?php echo $button_title;?></button></a>
                  </div>
               </div>
               <div class="col-md-8 date-content">
                  <div class="office_title" style="font-size: 26px; border-bottom: 1px solid  #dfdbdb;">
                     <?php echo $office_title;?>
                  </div>
                  <div class="address-title mt-3 row" >
                     <div class="col-md-5 col-lg-4 adres">
                        <h4>Adres</h4>
                        <div class="adress">
                           <?php echo $address; ?>
                           <div class="nomber mt-4">
                              <i class="fa fa-phone" aria-hidden="true" style="color:#d1471e;"></i>
                              <a href="tel:<?php echo $office_phone_url;?>" style="color: #4f4e4e;"><?php echo $office_phone_nomber;?></a>
                              
                           </div>
                           <div class="mail mt-0">
                              <i class="fa fa-envelope" style="color:#d1471e;"></i>
                              <a href="mailto: <?php echo $office_email_address;?>" style="color: #4f4e4e;"> <?php echo $office_email_address;?></a>
                             
                           </div>
                        </div>
                     </div>
                     <div class="col-md-7 col-lg-8 office-days">
                        <div>
                           <h4 class="office_oping">
                              Openingsuren
                           </h4>
                           <div class="row days" style="line-height: 11px; margin-top: 18px;">
                              <div class="col-md-4 wike">
                                 <p>Maandag</p>
                                 <p>Dinsdag</p>
                                 <p>Woensdag</p>
                                 <p>Donderdag</p>
                                 <p>Vrijdag</p>
                                 <p>Zaterdag</p>
                                 <p>Zondag</p>
                              </div>
                              <div class="col-md-4  date">
                                 <p><?php echo $maandag_openingsuren_morning;?></p>
                                 <p><?php echo $dinsdag_openingsuren_morning;?></p>
                                 <p><?php echo $woensdag_openingsuren_morning;?></p>
                                 <p><?php echo $donderdag_openingsuren_morning;?></p>
                                 <p><?php echo $brijdag_openingsuren_morning;?></p>
                                 <p><?php echo $zaterdag_openingsuren_morning;?></p>
                                 <p><?php echo $zondag_openingsuren_morning;?></p>
                                 <!-- <p>Gaesloten</p>
                                 <p>Gaesloten</p> -->
                              </div>
                              <div class="col-md-4 gred">
                                 <p><?php echo $office_openingsuren_Evening;?></p>
                                 <p><?php echo $dinsdag_openingsuren_Evening;?></p>
                                 <p><?php echo $woensdag_openingsuren_Evening;?></p>
                                 <p><?php echo $donderdag_openingsuren_Evening;?></p>
                                 <p><?php echo $brijdag_openingsuren_Evening;?></p> 
                                 <p><?php echo $zaterdag_openingsuren_Evening;?></p> 
                                 <p><?php echo $zondag_openingsuren_Evening;?></p> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<br /><br />

  <?php
   }
  ?>
 <script>
   $(".map_render").mouseover(function(){
      $(".imapsPointedRectangle").removeAttr("d");
      $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
      // $("#image123").parent().parent().css("width", "350px");
      // $("#image123").parent().parent().css("height", "379px");
      // $(".map_container").css("z-index","999999999");
      // $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;z-index:999999999;");
      $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");
      $(".image123").css("background-color","#fff");
      $("foreignObject > div:nth-child(1)").css("background-color","#fff");
      $("foreignObject > div").css("background-color","#fff");
      $("foreignObject").attr("height","410");



   });
   $(".imapsCircle").mouseover(function(){
      console.log("done")
      
   });
  $(".imapsCircle").mouseover(function(){
     console.log("done")
  });
  Query(document).ready(function(){

   $(".map_render").mouseover(function(){
   $(".imapsPointedRectangle").removeAttr("d");
   // $("#image123").parent().parent().css("width", "350px");
   // $("#image123").parent().parent().css("height", "379px");
   // $(".map_container").css("z-index","999999999");
   $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
   $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");

   $(".image123").css("background-color","#fff");
   $("foreignObject > div:nth-child(1)").css("background-color","#fff");
   $("foreignObject > div").css("background-color","#fff");
   $("foreignObject").attr("height","410");



   });
   $(".imapsCircle").mouseover(function(){
      console.log("done")
      
   });

   },2000);

   jQuery(document).ready(function(){

      $(".map_render").mouseover(function(){
      $(".imapsPointedRectangle").removeAttr("d");
      $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
      // $("#image123").parent().parent().css("width", "350px");
      // $("#image123").parent().parent().css("height", "379px");
      // $(".map_container").css("z-index","999999999");
      // $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;z-index:999999999;");
      $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");
      $(".image123").css("background-color","#fff");
      $("foreignObject > div:nth-child(1)").css("background-color","#fff");
      $("foreignObject > div").css("background-color","#fff");
      $("foreignObject").attr("height","410");



      });
      $(".imapsCircle").mouseover(function(){
         console.log("done")
         
      });
     
   },3000);
   jQuery(document).ready(function(){

   $(".map_render").mouseover(function(){
   $(".imapsPointedRectangle").removeAttr("d");
   $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
   // $("#image123").parent().parent().css("width", "350px");
   // $("#image123").parent().parent().css("height", "379px");
   // $(".map_container").css("z-index","999999999");
   $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");

   $(".image123").css("background-color","#fff");
   $("foreignObject > div:nth-child(1)").css("background-color","#fff");
   $("foreignObject > div").css("background-color","#fff");
   $("foreignObject").attr("height","410");



   });
   $(".imapsCircle").mouseover(function(){
      console.log("done")
      
   });

   },4000);

  jQuery(document).ready(function(){

      $(".map_render").mouseover(function(){
      $(".imapsPointedRectangle").removeAttr("d");
      $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
      // $("#image123").parent().parent().css("width", "350px");
      // $("#image123").parent().parent().css("height", "379px");
      // $(".map_container").css("z-index","999999999");
      // $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;z-index:999999999;");
      $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");
      $(".image123").css("background-color","#fff");
      $("foreignObject > div:nth-child(1)").css("background-color","#fff");
      $("foreignObject > div").css("background-color","#fff");
      $("foreignObject").attr("height","410");



      });
      $(".imapsCircle").mouseover(function(){
         console.log("done")
         
      });
     
   },5000);
   jQuery(document).ready(function(){

      $(".map_render").mouseover(function(){
      $(".imapsPointedRectangle").removeAttr("d");
      $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
      // $("#image123").parent().parent().css("width", "350px");
      // $("#image123").parent().parent().css("height", "379px");
      // $(".map_container").css("z-index","999999999");
      // $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;z-index:999999999;");
      $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");
      $(".image123").css("background-color","#fff");
      $("foreignObject > div:nth-child(1)").css("background-color","#fff");
      $("foreignObject > div").css("background-color","#fff");
      $("foreignObject").attr("height","410");

      });
      $(".imapsCircle").mouseover(function(){
         console.log("done")
      });
     
   },6000);

   jQuery(document).ready(function(){

      $(".map_render").mouseover(function(){
      $(".imapsPointedRectangle").removeAttr("d");

      $(".map_render").attr("style","overflow:visible;z-index:10;position:sticky;");
      // $("#image123").parent().parent().css("width", "350px");
      // $("#image123").parent().parent().css("height", "379px");
      // $(".map_container").css("z-index","999999999");
      // $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;z-index:999999999;");
      $(".map_render > div:nth-child(1)").attr("style","width: 100%;height: 100%;position: relative;overflow: visible;left: -0.5px;");
      $(".image123").css("background-color","#fff");
      $("foreignObject > div:nth-child(1)").css("background-color","#fff");
      $("foreignObject > div").css("background-color","#fff");
      $("foreignObject").attr("height","410");

      });
      $(".imapsCircle").mouseover(function(){
         console.log("done")
      });
   },7000);
  </script>