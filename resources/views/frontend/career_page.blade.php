<x-frontend.layouts.master>
    
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Karla|Quicksand" rel="stylesheet">
<style type="text/css">


.cpbody {
  margin: auto;
  width: 100%;
  padding-top:30px;
}

#slideshow { 
  position: relative; 
height: 100%;
  width: 100%;
}

#slideshow > img { 
position: absolute; 
}


.containimage{
height: 500px; 
overflow: hidden; 
}

.containimage img { 
width: 100%;
}


.imageflex{
 width: 100%;
 overflow: hidden;
}


.slidecontainer {
height: 500px;
width: 100%;
margin: auto;
  overflow: hidden;
}
 
div.overlay{
text-align: center;
position: absolute;
top: 450px;
font-size: 20px;
line-height: 3em;
color: #424242;
background-color: white;
opacity: 0.5;
margin: auto;
padding:20px;
min-width: 20%;
position: absolute;
}


.esb {
  font-family: karla;
}

.positiontest{
width: 1000px;
margin: auto;
margin-top:-30px;
}

p{
padding: 1em;
font-family: sans-serif;
line-height: 1.5em;
margin-top: 1.30952381em;
margin-bottom: 1em;
max-width: 1000px;
margin: auto;
}

.careercontent{
width:1000px;
margin: auto;
font-family: Karla;
color: #424242;
border-left: 1px solid #a2c0ef;
background-color: white;
}

/*.imgtest{
height:100%;
margin: auto;
background-image: url("https://res.cloudinary.com/huda-tariq-design/image/upload/v1484578659/iStock-475690164_bfxqhu.jpg");
background-size:1000px;
position: relative;
}*/

/*second overlay*/
.blfovrly{
width:600px;
margin: auto;
font-family: Karla;
color: black;
background-color: white;
}

h2.blfo{
  text-align: left;
  font-weight: normal;
  font-size: 2em;
  color: #408bc4;
  padding: .5em;
}

.testcontainer {
width: 1000px;
height: 500px;
margin: auto;
padding-top: 30px;

}


.textpostion {
margin:auto;
position: relative;
background-color: white;
}

div.overlaytwo{
font-size: 20px;
line-height: 1em;
color: black;
background-color: white;
opacity: 0.75;
margin: auto;
/*padding:20px;*/
min-width: 20%;
position: absolute;
top: 400px;
}

.flextwo{
 width: 100%;
 overflow: hidden;
}

.ctc{
width:1000px;
margin: auto;
font-family: Karla;
color: #424242;
background-color: white;
}


h2.sh{
  text-align: left;
  font-weight: normal;
  font-size: 2em;
  color: #408bc4;
  padding: .5em;
  margin-bottom: -10px;

}
h2.shc{
  text-align: left;
  font-weight: normal;
  font-size: 2em;
  padding: .5em;
  color: #408bc4;
  margin:20px 20px 0 0;
}
p.shc{
  text-align: left;
  font-weight: normal;
  padding: .5em;
  margin: 10px;
}

/*beliefs*/

.beliefcon{
width:1000px;
margin: auto;
}

.hcard{
  color:white;
  margin-top: 30px;
  font-size:1.5em;
  margin-bottom: 5px;
  font-weight: normal;
}

.bdiv{
  display: inline-block;
  float: center;
  font-size: 14px;
  margin-top: 200px;
  text-align: center;
  color: white;
  width: 1000px;
}
p.bcards{
  line-height: 2em;
  font-size: 10em;
  color: white;
  padding:20px; 
  margin: 10px;
}


h3.bdiv{
  fon-family: karla;
  text-align: left;
  font-weight: normal;
  margin-top: 2em;
  color:  white;
  padding: .5em;
}

.bcards{
height: 250px;
width: 240px;
float: center;
color: white;
overflow: hidden;
display: inline-block;
background-color: #498cbc;
border: 2px solid white;
/*box-shadow: 0px 2px 6px 0px #f2f2f2;*/
}

/*widget*/


.widgetcnt{
  width: 1000px;
  margin: auto;
  background-color: white;
}

.center{
  background-color: white;
}

#whr_embed_hook{
  margin-left: -50px;
  width: 1000px;
}


h3.whr-title, a:hover{
  color: blue;
}


h3.whr-title a:hover{
color: #2866c9;
}


h3.whr-title a {
  color: black;
  text-decoration: none;
  font-size: 16px;
  font-family: Karla;
  max-width: 175px;
}
.whr-item {
    background-color: white;
    font-size: 1em;
}

li.whr-item {
float: left;
margin: 6px;
margin-bottom: 20px;
padding:10px;
min-height: 250px;
width: 20%;
list-style: none;
background-color: white;
border-left: .5px solid #a2c0ef;
/* box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); */
}


h3 {
  text-decoration: none;
  color: #424242;
  font-family: karla;
}

.whr-info{
  margin-left: -40px;
  margin-left: -40px;
  line-height: 30px;
}

ul.whr-item {
 margin-left: -30px;
}

li{
  list-style:none;
  font-size: 14x;
  font-family: Karla;
  color: #424242;
  padding-left: -10px;
}

#whr_embed_hook{
margin-left: 0px !important;
}

</style>
          <div class="cpbody">
              <div class="positiontest">
                <!-- image gallery -->
                    <div class="containimage">
                        <div class="slidecontainer">
                            <div id="slideshow">

                              <img class="imageflex" src="{{ asset('ui/frontend/images/history/bla1.webp') }}">
                              <img class="imageflex" src="{{ asset('ui/frontend/images/history/lab.jpg') }}">
                              <img class="imageflex" src="{{ asset('ui/frontend/images/history/students.jpg') }}">
                            </div>
                        </div>
                            <div class="overlay">
                            <h1 class="esb">EMPOWERING OURSELVES</h1>
                            </div>
                      </div>
              </div>
          </div> 
    
    
          <section >
            <div class="careercontent">
            <h2 class="page-headings">Our Mission</h2>  
            <p class="page-para">Sonar Bangla Foundation is working tirelessly to bring quality education services to the doorsteps of people in remote areas of the country at low cost. Following this, SBF Nursing Institute has been established in Lalmonirhat district and is conducting service activities.
            </p>
            </div>
    
            <div class="careercontent">
            <h2 class="page-headings">Who We Are</h2>  
            <p  class="page-para">The Sonar Bangla Foundation-USA and the SBF Nursing Institute, Lalmonirhat, were born out of the gratitude and love of the people towards some dedicated souls of Bangladeshi expatriates living in America with the conviction of building a poverty-free Bangladesh, quality healthcare, education and a prosperous country. SBF Nursing Institute, Lalmonirhat is inviting you to make a valuable contribution to the society by educating your son / daughter in nursing education and establishing it in life. Its country office in Bangladesh is registered with the Sonar Bangla Foundation-Bangladesh NGO Affairs Bureau and is working towards the goal of the foundation.
            </p>
            <p  class="page-para">
              By pursuing a Diploma in Nursing Science and Midwifery degree from SBF Nursing Institute, Lalmonirhat, run by Sonar Bangla Foundation, one can build one's bright future by taking the golden opportunity to establish oneself in the society by getting employment opportunities in government and private sector and abroad. That is why I am inviting you to study at SBF Nursing Institute, Lalmonirhat.</p>
            </div>

    
    
              <div>
                  <div class="testcontainer">
                  <div class="textpostion">
                  <img class="flextwo" src="{{ asset('ui/frontend/images/history/gate.jpg') }}">
                  <div class="blfovrly overlaytwo">
                  <h2 class="page-headings">Beliefs</h2> 
                 <p  class="page-para">Join our community of students around the world helping you succeed.
                  </p>
                  </div>
                  </div>
                  </div>
              </div>
    
            
            <div class="careercontent">
            <h2 class="page-headings">Our Culture</h2>
            <p  class="page-para">The Sonar Bangla Foundation is working tirelessly to bring quality education services to the doorsteps of people in remote areas of the country, including low cost kidney dialysis services, kidney disease prevention and awareness programs. 
            </p>
            <p  class="page-para">
              SBF Research and Development Center is being set up at 20 Kidney Dialysis Centers in different districts of Bangladesh, Bangabandhu Hitech Park, Kalyakair A Kidney Dialysis Machine for addition, repair and maintenance and SBF Nursing Ins in Lalmonirhat District.
            </p>
    
            </div>
    
            
                   <div class="careercontent" style="padding:10px; 30px;">
            <h2 class="page-headings">Current Opportunities</h2>
            <div  class="ctbutton buttontwo"><a href="{{ route('download') }}"
    style="background-color:#2866c9;border:1px solid #7e8afc;border-radius:1px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">View Jobs</a>
  </div>
    </div>
          </section>

         
    
    
    
    
    
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>

            
            <script>
                
// image gallery

$("#slideshow > img:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > img:first')
    .fadeOut(3000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo('#slideshow');
},  5000);


   whr(document).ready(function(){
          whr_embed(164082, {detail: 'titles', base: 'jobs', zoom: 'country', grouping: 'none', url: 'url'});
          });


$( document ).ready(function() {
    //console.log( "ready!" );
	
	var timerId=setInterval(function() { 
	
		$('h3.whr-title').each(function() {
			
		  var href=$(this).children().first().attr('href');
		  		  
		  var new_content=$(this).parent().html() + "<div class='apply-now-btn'><a href='"+ href +"' target='_blank'>Apply Now</a></div>";
		  
		  $(this).parent().html(new_content) ;
		  
		  clearInterval(timerId);
		});
		
	},  1000);
});

                </script>
    
</x-frontend.layouts.master>