<!doctype html>
<html lang="en">
  <head>
  	<title>Calendar  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css"/>

      
         <style>
            *{
                box-sizing: border-box;
                -moz-user-select: none;
                -webkit-user-select: none;
                user-select: none;
                transition: all .5s;
            }
            
            body{
                margin: 0;
                padding: 0;
                font-family:tahoma;
                color: #444;
                
            }
            
            .wrap-srction {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50% , -50%);
                height: 96vh;
                width: 92vw;
                background-color:white;
                box-shadow: 0  10px 30px  rgba(0,0,0,0.5);
                display:flex;
                overflow: hidden;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                overflow: hidden

            }
            .content {
    width: calc(60% - 50px);
    height: 100%;
    background-color: transparent;
    padding: 0 3%;
    line-height: 1.5em;
    font-size: 18px;
    text-align: center;
    margin: -1px -4px -1px -1px;
    position: absolute;
    right: 0;
    display: inline-table;
    text-align: left;
}
         .content h1 {
    font-size: 110px;
    /* height: 32.4%; */
    letter-spacing: 2vw;
    position: relative;
    width: 60vw;
    z-index: 11;
     left: 1.7vw; 
    font-weight: normal;
    font-style: italic;
    border-bottom: 2px solid #D02128;
/*             border-image: linear-gradient(to left , #D02128, rgba(0,0,0,0) ) ;*/
    text-align: center;
    /* padding-top: 8vh; */
    line-height: 40.7vh;
    color: #F0B43C;

} 
             h4{
                     color: #D02128;
                 letter-spacing: 2px;
                     padding-left: 20px;


             }
             
            .contentbody {
    padding-left:41%;
    margin-top: 4vh;
}
             
            p {
     font-size: x-small;
    line-height: normal;
    width: 42%;
    margin-left: 2vw;
    position: absolute;
    bottom: 3vh;
}
             
            
          .morebtn {
    position: absolute;
    width: 10vw;
    height: 3vw;
    background-color: #F0B43C;
    outline: 0;
    border: 3px solid #fff;
     border-radius: 2vw;
    color: #fff;
    left: -20vw;
    top: 7vh;
    font-size: 1vw;
                  letter-spacing: 2px;

}
            .morebtn:hover{
                 transform: scale(0.95);
                outline: 0;
                 
}
          .imagebox {
/*    left: 23vw;*/
/*    width: calc(50% + 50px);*/
    height: 100%;
    background-color:goldenrod;
    border-top: 4px #fff solid;
/*    transform: skew(31deg);*/
    z-index: -1;
    position: relative;
}
            
     .imageboxheader {
    height: 43vh;
    background: #D02128;
    transform: skew(45deg);
    position: absolute;
    left: 8.6vw;
    top: -14px;
    width: 94vw;
    z-index: -2;
}
.imageboxheader2 {
    border-left: 48vw transparent solid;
    border-top: 96vh solid #fff;
    height: 96vh;
    background: transparent;
    /* transform: skew(33deg); */
    position: absolute;
    right: 0;
    /* top: -14px; */
    max-width: 87vw;
    z-index: -1;
    width: 82vw;
}       
            .imageboxbody {
    height: 57vh;
    background: green;
     position: absolute;
    right: -24vw;
    bottom: -14px;
    width: 90vw;
    z-index: -1;
}
            .imageboxbody2 {
    height: 57vh;
    background: #fff;
    transform: skew(33deg);
    position: absolute;
    right: -24vw;
    bottom: -14px;
    width: 90vw;
    z-index: -1;
}
           
/*       ----------------------------------      */
             
             .wrap-srction:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background: #000;
/*---------------------------------------*/
/*
                 background:linear-gradient(-90deg ,#f00 ,#0ff, #ff0,#fff,#000 ,#ff0,#fff,#000);
				 background-size:400% 400%;
                 animation:change 10s ease-in-out infinite;
*/
/*---------------------------------------*/
     opacity: 0.5;
    z-index: -3;
}
/*             -------------------------------------------------- */
             
             
/*
               
			 @keyframes change {
				 0%{
				 background-position:left bottom;
				 transform:rotate(5deg);
				 }
				 25%{
				 background-position:left top;
				 transform:rotate(-10deg);
				 }
				 75%{
				 background-position:right bottom;
				 transform:rotate(-15deg);
				 }
				 100%{
				 background-position:right top;
				 transform:rotate(5deg);
				 }
			 }
*/
             
             @keyframes change{
				0%{
					background-position: 50% 50%;
				}10%{
					background-position: 40% 40%;
				}20%{
					background-position: 30% 30%;
				}30%{
					background-position: 20% 20%;
				}40%{
					background-position: 10% 10%;
				}
/*
				50%{
					background-position:100% 50%;
				}
*/
/*
				100%{
					background-position:0  50%;
				}
*/
				
				50%{
					background-position:20% 100%;
				}
				60%{
				background-position:10% 0%;
					
				}
				70%{
					background-position:25% 0;
				}
				80%{
					background-position: 50% 0;
				}
				90%{
					background-position: 80% 0;
				}
				100%{
					background-position: 100% 10%;
				}
				
			}
		
             
/*             -------------------------------------------------- */
            .calendar-wrap {
    width: 35%;
    background: rgba(255,255,255,0.0);
    padding: 10px 0 0 30px;
    color: #fff;
    position: absolute;
    bottom: 10vh;
    font-weight: bold;
}
             
             
    .button-wrap .pre-button i, .button-wrap .next-button i {
    color: #fff;
}         
             
             th {
    text-align: inherit;
    color: #fff;
    font-size: smaller;
    font-weight: 100;
}
             
              #calendar tr {
    height: 2.5em;
}
             
             tbody td:hover:after, .selected:after {
    background: #F0B43C;
                 
}
             #today:after {
    background: #F0B43C;
}
             
             tbody tr {
    color: #fff;
}
             .wrap-header:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background: transparent;
    opacity: .5;
    z-index: -1;
}
             
             #disabled {
    cursor: default;
    background: none;
}
             #disabled:hover {
    background: none;
    color: #c9c9c9;
}
             #today {
    color: #fff;
                 font-size: 20px;
}
             tbody td {
    width: 15%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    position: relative;
    z-index: 0;
}
             
             tbody td:after {
    position: absolute;
    top: 50%;
    left: 7px;
    right: 0;
    bottom: 0;
    content: '';
    width: 34px;
    height: 34px;
    margin: 0 0 0 -13px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    border-radius: 50%;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    z-index: -1;
}
             
             .head-day , .head-month , .head-info {
                 background: transparent;
                 color: #fff;
             }
             .head-day {
    font-size: 4em;
    line-height: 1;
    color: #fff;
    margin-left: 40px;


}
             .head-month{
       margin-left: -15px;
       font-size: 0.7em;


             }             
             .wrap-header {
    position: absolute;
    width: fit-content;
    z-index: 12;
    background: transparent;
    top: 17vh;
    left: -16.6vw;
}
           .button-wrap {
    position: relative;
    padding: 10px 0;
    left: 13.7vw;
} 
             
             .footer-logo {
    position: absolute;
    bottom: 12px;
    left: 25px;
}
             .footer-logo img{
                     width: 13vw;

             }
             
             ul {
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
}
             
             .contentbody li{
                 color:#D02128;
                 display: none;
                 line-height: 35px;
                 font-size:medium;
             }
            span {
    background: #F0B43C;
    color: #000;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    position: absolute;
    /* top: 0%; */
    left: 40%;
    /* right: 0; */
    /* bottom: 0; */
    margin-top: 4px;
    display: none;
    padding: 0 0 0 5px;
    color: #fff;
    font-size: larger;
}
/*         -----------------------------------------    */
             
             #foundingdayman {
    width: 28vw;
    height: 56vh;
    position: absolute;
    z-index: -1;
    bottom: 0;
    background-size: cover;
     left: 0vw;
 }
               #foundingdaylogo {
    width: 12vw;
    height: 25vh;
    position: absolute;
    z-index: -1;
    top: 18vh;
    background-size: cover;
    left: -26vw;
 
 }

 @media  only screen and (max-width:1000px){
    
 }
        </style>
    </head>
    <body>
        <section  class="wrap-srction" id="naser">
            <div class="imagebox">
                
                            </div>

                
                 <div class="imageboxheader">
                    
                </div>
             <div class="imageboxheader2">
            </div>

                    <div class="content">
                         <button class="morebtn">Learn more</button>  
<!--                        				      <p id="reset">Today</p>-->
                             <div id="foundingdaylogo"></div>


                <h1>  <div class="head-month2"  ></div></h1>
                         <div class="contentbody">
                 <h4>Highlights Of The Month</h4>
                 
                 
<ul>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>

</ul>
                 
                <p id="notes">
                     
                </p>
                             
                             <div id="foundingdayman"></div>
   <div class="wrap-header  ">
				      <p id="reset" style="display: none;">   </p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
 
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
                        
                                         </div>
            </div>

                
                
            
            
                         
			      <div class="calendar-wrap">
			      	<div class="w-50 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>

				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
                      
                      
			      </div>
                        
    
                        
            <div class="footer-logo">
                <img src="images/En1.png">
            </div>
            
            
            
        </section>
        
        
        
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
    </body>
</html>