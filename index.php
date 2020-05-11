<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? include 'link/links.php'; ?>
	  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://ajax.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <? include 'corona.php';?>

  <style >
  	html{
  		scroll-behavior: smooth;
  	}
       
    .carousel-inner img{
      width: 100%;
      height: 100%;
      }

      *{margin: 0;
      	padding:0;
      	font-family: 'muli',sans-serif;
      }
      .corona_rot img{animation: gocorona 3s linear infinite;

      }
      @keyframes gocorona{
      	0%{transform: rotate(0);}
      		100%{transform: rotate(360deg);}

      }
      .main_header{
      	height: 700px;
      	width:100%;
      }
      .heartbeat { animation: heart .8s  infinite ;

      }
      @keyframes heart{
      	0%{transform: scale(1);}
      	25%{transform: scale(1.1);}
      	40%{transform: scale(1);}
      	60%{transform: scale(1.1);}
      	100%{transform: scale(1);}
      }
      
     
      .sub_section{
      	background-color: #fbfafd;
      	background-image:linear-gradient( to left , rgb(107,158,226) ,rgb(207,218,232));
      } 
      .corona_update{
      	margin: 0 0 30px 0;
      }
  .corona_update h3{ color: #ff7675 }
  .corona_update h1{font-size: 2rem ;text-align:center;}
  .footer_style{
  	background-color: #829bfe!important;
  }
  .footer_style p{
  	margin-bottom: 0!important;
  }

     </style>
  

</head>
<body onload="fetch()">
	   
    <!-- /////////navigation bar\\\\\\\\\ -->
	<header><nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#aboutid">about <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#symptomsid">symptoms <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#preventionid">prevention <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#contactid">contact<span class="sr-only">(current)</span></a>
      </li     
  </div>
</nav>
<!-- /////navigation bar end\\\\\\ -->
<!-- !-- ////carousel\\ -- -->
	<header>
	<div class="bd-example pt-1">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/0.png" class="d-block" width="1100" height="550"  alt="...">
      
      </div>
      <div class="carousel-item">
        <img src="images/1.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
     
       <div class="carousel-item">
        <img src="images/2.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/3.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
   
       <div class="carousel-item">
        <img src="images/4.png" class="d-block" width="1000" height="550" alt="...">
      
      </div>
      
    
       <div class="carousel-item">
        <img src="images/5.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/6.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/7.png" class="d-block" width="1000" height="550" alt="...">
       
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" ></span>
      <span class="sr-only">Next</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>
</div>
</header>
<div class="main_header">
	<div class="row w-100 h-100 ">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside  w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/heart.png" width="600" height="600 " class="heartbeat">
			</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
			<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center  ">
				<h1 >Let's Stay Safe & Fight Together Against <br>Cor<span class="corona_rot"><img src="images/1589097898732.png" width="100" height="100"></span>na Virus</</h1></div>
	        </div>
	    </div>
     </div>
     <!-- **************************corona latests updates********************* -->
     <section class="corona_update container-fluid">
     	<div class="mb-3">
     		<h3 class="text-center text-uppercase">Covid-19 updates</h3>
     	</div>
    

    <div class="table-responsive">
    	<table class="table-bordered table-striped text-center" id="tbval">
    		<tr>
    			<th>Country</th>
    			<th>TotalConfirmed</th>
    			<th>TotalRecovered </th>
    			<th>TotalDeaths</th>
    			<th>NewRecovered</th>
    			<th>NewDeaths</th>
            </tr>

    	</table>
    </div>
    </div>
</section>

<!-- **************about section****************** -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row">
		<div class="col-lg-5 col-lg-6 col-12">
			<img src="images/corona.jpg" class="img-fluid">
        </div>


        <div class="col-lg-6 col-md-6 col-12 mt-4"> 
            <h2>WHAT IS COVID-19</h2>
            <p>COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019. COVID-19 symptoms include cough, fever, shortness of breath, muscle aches, sore throat, unexplained loss of taste or smell, diarrhea and headache. COVID-19 can be severe, and some cases have caused death</p>
            <p>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test. There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice social distancing</p>

       </div>

   </div>
</div>
</div>
<!-- ***************corona symptoms************* -->
<div class="container-fluid  pt-5 pb-5" id="symptomsid">
<div class="section_header text-center mb-5 mt-4">
		<h1>CORONAVIRUS SYMPTOMS</h1>
	</div>

<div class="container-fluid" >
	<div class="row">
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589018835678.png" class="img-fluid" width="120" height="120">
			<figcaption>fever</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589077821700.png" class="img-fluid" width="120" height="120">
			<figcaption>tiredness</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6  " >
			<figure class="text-center">
			<img src="images/1589019566285.png" class="img-fluid" width="120" height="120">
			<figcaption>dry cough</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589079572009.png" class="img-fluid" width="120" height="120">
			<figcaption>head-achce</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589079386014.png" class="img-fluid" width="120" height="120">
			<figcaption>difficulty in breathing</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589078287915.png" class="img-fluid" width="120" height="120">
			<figcaption>heart strokes</figcaption>
			</figure>
		</div>	
	</div>
</div>
<!-- *****************6steps prevention against corona virus*************** -->
<div class="container-fluid  pt-5 pb-5" id="preventionid">
<div class="section_header text-center mb-5 mt-4">
		<h1> 6 STEPS PREVENTION AGAINST CORONAVIRUS </h1>
    </div>
      <div class="container">
      	<div class="row">
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187229300.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Wet your hands with warm water, then apply a mild soap. Work the soap into a lather for 20-30 seconds, then rinse your hands clean under warm running water.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/dis.jpeg" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Maintain a distance of 6 ft (1.8 m) between you and others when you go out.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187150718.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Keep your hands away from your eyes, nose, and mouth.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187095820.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Don’t shake hands with people, whether they show symptoms or not.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187038429.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Disinfect high-touch surfaces daily using a product that kills viruses</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589186950529.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Stay home as much as possible to distance yourself from other people</p>
      					
      				</div>	
      			</div>	
      		</div>	
      	</div>
      </div>
</div>
<!-- ***********contact form************** -->
<section>
  <div class="container-fluid " id="contactid">
    <h1  class="text-center text text-capitalize pt-5">contact us</h1>
      <hr class="w-25 mx-auto pb-5">
      <div class="w-50 mx-auto">
  <form action="/action_page.php">
  <div class="form-group">
    <label for="email">your name</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">molibe no</label>
    <input type="molibe" class="form-control" placeholder="Enter number" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">text area</label>
    <input type="text" class="form-control" placeholder="Enter text" id="pwd">
  </div>
    <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
      </div>
</section>
<footer class="mt-5">
  <div class=" footer_style text-white text-center container-fluid"><p>@copyright nidhi sahani</p></div>
</footer>


<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
</div>  

<script type="text/javascript">
	
fuction fetch(){
	$.get('https://api.covid19api.com/summary'
      fuction (data){
      	// console.log(data['countries'].length);
      	var tbval=document.getElementById('tbval');
      	for(var i=1;i<(data['Countries'].length); i++){
      		abc x=tbval.insertRow();
      		x.insertCell(0);
      		tbval.rows[i].cell[0].innerHTML=data['Countries'][i-1]['Country'];
      		tbval.rows[i].cell[0].style.background='#7a4a91';
      		tbval.rows[i].cell[0].style.color='#fff';
      			x.insertCell(1);
      		  		tbval.rows[i].cell[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
      		tbval.rows[i].cell[1].style.background='#4bb7d8';
      		 x.insertCell(2);
      		  		tbval.rows[i].cell[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
      		tbval.rows[i].cell[2].style.background='#4bb7d8';
      		 			x.insertCell(3);
      		  		tbval.rows[i].cell[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
      		tbval.rows[i].cell[3].style.background='#f36e23';
      		 			x.insertCell(4);
      		  		tbval.rows[i].cell[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
      		tbval.rows[i].cell[4].style.background='#4bb7d8';
      		 			x.insertCell(5);
      		  		tbval.rows[i].cell[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
      		tbval.rows[i].cell[5].style.background='#9cc850';
      		x.insertCell(6);
      		  		tbval.rows[i].cell[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
      		tbval.rows[i].cell[6].style.background='#f36e23';

      	}
      }
     
	)
}

</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	




</body>
</html>