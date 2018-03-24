 <!DOCTYPE html>
  <html>
    <head>
          <title>Tracking Assistent</title>
          <link rel="icon" href="images/logo1.png" type="image/png" sizes="16x16">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	      <link href="css/news.css" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize_css/css/materialize.min.css"  media="screen,projection"/>
	      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		  <link rel="stylesheet" href="mdl_css/material.min.css">
          <script src="mdl_css/material.min.js"></script>

          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	</head>
<!-------------------------------------------html body--------------------------------------------------------->
<body>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize_css/js/materialize.min.js"></script>

<!-------------------------------------------Translator --------------------------------------------------------->

<div class="fixed-action-btn click-to-toggle">
   <a id="google_translate_element"></a>
</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<!-------------------------------------------logout --------------------------------------------------------->
      <script>
       function logout() {
        $.get("php/logout.php", function(data, status){
          if(data == "logged_out") {
            //location.href = "index.html";
           //document.getElementById("logout").href = "index.html";
           //alert("Logged out..!!");
          }
else
alert("Logged not out..!!");
    });
  }
    </script>

<!---------------------------------------------------menu bar-------------------------------------------------->
            <div class="navbar-fixed">
               <nav class="white">

                 <div style="margin-right:15px;" class="right">
			<a href="index.html" onclick="return logout();" id="logout" class="right black-text" style="margin-right:13px;">Logout</a>
		    <a href="tel:9414056705" class="right" ><i class="material-icons black-text" style="margin-right:10px; margin-top:2px;">call</i></a>
		</div>

                 <div class="nav-wrapper valign-wrapper" id="navbarAP" >
			             <h5><a href="index.html" id="photo" class="margin-left"><i class="material-icons black-text">chevron_left</i></a></h5>
	                    <h4 class="black-text"><b>Profile</b></h4>
                 </div>
               </nav>
            </div><br><br>
<!---------------------------------------------------profile-grid-------------------------------------------------->


              <div class="row">
<div class='col s12 m4 l4' id = "profile"></div>



<!---------------------------------------------------grid-2-------------------------------------------------->

              <div class="col s12 m4 l4 white" id= "profilex">








               </div>
             </div>




<script>
profile();
    function profile() {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200)  {
             var l = this.responseText.split('\n').length - 1;
             var m = this.responseText.split('\n');
	var name = m[0] + " " + m[1];

				  //$(document).ready(function(){

                     $("#profile").append("<div class='card white'><div class='card-content black-text'><a class='waves-effect waves-light blue btn ' href='whatsapp://send?text=https://www.ajayastromoneyguru.com/php/referral.php?ref_code=" + m[7] + "' data-action='share/whatsapp/share'>REFER</a><br><a class='subheader'><b><p><h5>Name</h5></p></b></a><p>" + name + "</p><div class='divider'></div><a class='subheader'><b><h5>E-mail</h5></b></a><p>" + m[2] + "</p><div class='divider'></div><a class='subheader'><b><h5>Pan</h5></b></a><p>" + m[3] + "</p><div class='divider'></div><a class='subheader'><b><h5>Aadhaar</h5></b></a><p>" + m[4] + "</p><div class='divider'></div><a class='subheader'><b><h5>Contact</h5></b></a><p>" + m[5] + "</p><div class='divider'></div><a class='subheader'><b><h5>Points</h5></b></a><p>" + m[8] + "</p></div>");

                 //});




  }
}

         xmlhttp.open("GET", "php/profile_data.php", true);
         xmlhttp.send();

    }












profilex();
    function profilex() {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200)  {
             var ll = this.responseText.split('\n').length - 1;
             var mm = this.responseText.split('\n');







            for (var p=0;p < ll; p+=7) {

var array = new Array();
array = mm[p+3].split('-');
var cd = (array[2] + "-" + array[1] + "-" + array[0]);

var array1 = new Array();
array1 = mm[p+4].split('-');
var ed = (array1[2] + "-" + array1[1] + "-" + array1[0]);


var today = new Date();
var dd = today.getDate();
var mmm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
}
if(mmm<10){
    mmm='0'+mmm;
}
var today = dd+'-'+mmm+'-'+yyyy;









             if(mm[p].length > 0 && mm[p+1].length > 0 && mm[p+2].length > 0){
var arraym = ed.split('-');
var expd = parseInt(arraym[0]);
var expm = parseInt(arraym[1]);
var expy = parseInt(arraym[2]);

var expd = expd+1;

//var exp = z + "-" + arraym[1] + "-" + arraym[2];

var arrayn = today.split('-');
var td = parseInt(arrayn[0]);
var tm = parseInt(arrayn[1]);
var ty = parseInt(arrayn[2]);


//alert(expd + "-" +expm + "-" +expy +  "::" + td + "-" + tm + "-" + ty );

var yr = expy - ty;
var mon  = expm - tm;
var dayy = expd - td;

if( mm[p+2]!="Financial Astrology Course" && mm[p+2]!="Webinar" && mm[p+2]!="Phone Consultancy"  && mm[p+2]!="Purchased Book" && mm[p+2]!="Astro Shop Purchases" && mm[p+2]!="by" && mm[p+2]!="ld" && mm[p+2]!="ue" && mm[p+2]!="ow" && mm[p+2]!="thi" && mm[p+2]!="ett" && mm[p+2]!="rt"){

if(yr<=0 && mon<=0 && dayy<=0){
$(document).ready(function(){

                     $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+2] + "</span><div class='divider'></div><br><div class='chip'><b>Subscription Type :</b>" + mm[p+1] + "</div><div class='chip'><b>Start Date :</b>" + cd + "</div><div class='chip'><b>Expiry Date :</b>" + ed + "</div><div class='chip red'><p class = 'white-text' style='margin-top:4px'><b>Expired</b></p></div></div></div>");});


}else{
$(document).ready(function(){

                     $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+2] + "</span><div class='divider'></div><br><div class='chip'><b>Subscription Type :</b>" + mm[p+1] + "</div><div class='chip'><b>Start Date :</b>" + cd + "</div><div class='chip'><b>Expiry Date :</b>" + ed + "</div><a href = 'news_box.html?sub_type=" + mm[p+5] + "' class='chip green'><p class='white-text' style='margin-top:4px' ><b>News</b></p></a></div></div>");});


}}

if(mm[p+2]=="Financial Astrology Course"){
	$(document).ready(function(){

                     $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+2] + "</span><div class='divider'></div><br><div class='chip'><b>Subscription Type :</b>" + mm[p+1] + "</div><div class='chip'><b>Start Date :</b>" + cd + "</div><a href = '#' class='chip blue'><p class='white-text' style='margin-top:4px' ><b>" + mm[p+6]+ "</b></p></a></div></div>");});

}


if(mm[p+2]=="Webinar"){
	$(document).ready(function(){

                     $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+2] + "</span><div class='divider'></div><br><div class='chip'><b>Start Date :</b>" + cd + "</div></div></div>");});

}
if(mm[p+2]=="Phone Consultancy"){
	$(document).ready(function(){

                     $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+2] + "</span><div class='divider'></div><br><div class='chip'><b>Subscription Type :</b>" + mm[p+1] + "</div><div class='chip'><b>Start Date :</b>" + cd + "</div><br><div class='divider'></div><br><div class='row'><div class='col s4 l4 m4 valign-wrapper'><a href='tel:9414056705' class='waves-effect waves-circle waves-light btn-floating secondary-content green'><i class='material-icons'>call</i></a><p style='margin-left:5px'>Call<br></p></div><div class='col s4 l4 m4 valign-wrapper'><a href='mailto:astromoneyguru@gmail.com' class='waves-effect waves-circle waves-light btn-floating secondary-content red'><i class='material-icons'>mail</i></a><p style='margin-left:5px'>Email<br></p></div><div class='col s4 l4 m4 valign-wrapper'><a href='whatsapp://send?text= -' data-action='share/whatsapp/share' class='waves-effect waves-circle waves-light btn-floating secondary-content amber darken-2'><i class='material-icons'>chat</i></a><p style='margin-left:5px'>Chat<br></p></div></div></div></div>");});

}

if(mm[p+2]=="Purchased Book"){

	$(document).ready(function(){
console.log('here'+mm[p+1]);
if (mm[p+1] == 'Ajay Market Theory 2015-16') {
         $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+1] + "</span><div class='divider'></div><br><a href = 'https://drive.google.com/file/d/0B6OpnqhzZTULV3VMRGU5TWwxdFU/view?usp=sharing' class='chip green'><p class='white-text' style='margin-top:4px' ><b>Read Book</b></p></a></div></div>");
}
else {
 $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+1] + "</span><div class='divider'></div><br><a href = 'https://drive.google.com/file/d/0B6OpnqhzZTULVUJMOUNwYl9kd0k/view?usp=sharing' class='chip green'><p class='white-text' style='margin-top:4px' ><b>Read Book</b></p></a></div></div>");
}
});


}

if(mm[p+2]=="Astro Shop Purchases"){

	$(document).ready(function(){
 $("#profilex").append("<div class='card white'><div class='card-content black-text'><span class='card-title'>" + mm[p+1] + "</span><div class='divider'></div><br><div><p class='black-text'>NOTE: Please Provide Delivery Address Either Through Email or Call:</p> </div><br><div class='divider'></div><br><div class='row'><div class='col s4 l4 m4 valign-wrapper'><a href='tel:9414056705' class='waves-effect waves-circle waves-light btn-floating secondary-content green'><i class='material-icons'>call</i></a><p style='margin-left:5px'>Call<br></p></div><div class='col s4 l4 m4 valign-wrapper'><a href='mailto:astromoneyguru@gmail.com' class='waves-effect waves-circle waves-light btn-floating secondary-content red'><i class='material-icons'>mail</i></a><p style='margin-left:5px'>Email<br></p></div></div></div></div>");});


}


















}








}
 }
}

         xmlhttp.open("GET", "php/subs.php", true);
         xmlhttp.send();

    }






</script>







</body>
</html>
