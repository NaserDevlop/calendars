 (function($) {

    
    
     
    
	"use strict";

	document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag =["January","February","March","April","May","June","July","August","September","October","November","December"],
        
//       -----------------------------------------------------------------------------
        
        
        montevents=[
            
             
            //-----------1-2-3--------------------
//            January=
            
            ["*The Performance and Development  Planning Conversation helps colleagues and managers align on goals, leadership commitments, and  development actions. *Year-end  Compensation planning is an essential part of  our pay-for-performance philosophy.",
                     "1 Jan: New Year","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","17 Jan: International Mentoring Day","","","",
                     
                     "","","","","",
                     "","","","","",
                     "31 Jan: *Year End Compensation "
                    ],
        
//            February=
            
            ["*Ongoing Conversations help to provide in-the-moment feedback and coaching to support our colleagues’ success.",
                     "","","","4 Feb : World Cancer Day","5-28 Feb : *Goal Setting Sessions -  for Mangers | Individual contributors ",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "21 Feb : Saudi Founding Day Celebration","  22 Feb : Saudi Founding Day Public Holiday","","","",
                     "","","","","",
                     ""
                    ],
        
//            March=
            
            ["*Ramadan Office Working Hours 10am to 4pm",
                     "1 - 31 Mar : Women’s History Month","","","4 Mar: World Obesity Day - World Engineering Day","",
                     "","","8 Mar : International Women’s Day –  Townhall [TBC]","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","22 Mar: *Commencement of Holy Month of Ramadan","","","",
                     "","","","","",
                     ""
                    ],
            //-----------4-5-6--------------------
//            April=
            
            ["No Notes for April",
                     "","2-13 Apr: Quarterly Townhall – By Business Vertical","3 & 5 Apr : Petromin KSA Ramadan Iftar Event (Jeddah / Riyadh / Dammam)",".",".",
                     "","","","","",
                     
                     "","","","","",
                     "","","",""," 20 Apr – 27 Apr: Eid Al-Fitr Holiday",
                     
                     ".","22 Apr: World Earth Day ",".",".",".",
                     ".",".","","","30 Apr : Leadership Roadshow – UAE | Egypt [TBC]",
                     ""
                    ],
        
//            May=
            ["No Notes for May",
               "1 – 31 May : Mental Health Awareness Month & 1 – 31 May : Diversity and Inclusion Training Month ","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "21 May : World Day for Cultural Diversity for Dialogue and Development","","","","",
                     "","","28 May: Year-end promotions - Communicate Promotions  effective 1 Jun","","",
                     ""
             
                    
                    ],
//            June=
            ["*The Mid-year Conversation provides an  update on progress, highlighting  actions to take going forward and  exchanging meaningful feedback. ",
                     "1 Jun– 30 Jun : *Mid-Year Reviews ","","","","5 Jun: World Environment  Day",
                     ".","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "21 Jun: International Day of  Yoga","","","","25 Jun – 29 Jun : Eid Al Adha Holiday",
                     ".",".",".",".","",
                     ""
                   
                    ],
            //-----------7-8-9--------------------
//            July=
                    ["No Notes for July",
                     "","2-13 Jul: Quarterly Townhall – By Business Vertical","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            August=
            ["*Career Planning Conversation is a  checkpoint to discuss career goals and  aspirations.",
                     "Aug-30 Sept: *Career Planning ","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","31 Aug: Kids @ Work Day | ","",
                     "" ],
            
//            Septembe=
            [ "No Notes for September",
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","23 Sep: KSA National Day","24 Sep: KSA National Day Public Holiday" , "  25 Sep: KSA National Day Celebration",
                     ".","","","","",
                     ""
                    ],
            //-----------10-11-12--------------------
//            October=
            [ "No Notes for October",
                     "1 Oct: Breast Cancer Awareness Month" , "","","","",
                     "","","","" , "10 Oct: World Mental Health Day",
                     
                     "", "1-12 Oct: Quarterly Townhall – By Business Vertical" , "","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            November=
        ["No Notes for November",
                     "1 Nov: Men’s Health Awareness Month","","","","",
                     "","","","","",
                     
                     "","","","14 Nov: World Diabetes Day","",
                     "","","","19 Nov: International Men’s Day","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            December=
        ["The Year-end Conversation is broken into the  Assessment period (Nov.-Dec.) and  Performance conversation (Jan.-Feb). During  the Assessment, People Leaders should review  ongoing feedback and objectively assess  Performance. ",
                     "","","","","",
                     "","","","","1 Nov-10 Dec: *Year-End ",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","25 Dec: Christmas Day",
                     "","","","","",
                     ""
                    ]
            
        ],
        
        
//       -----------------------------------------------------------------------------
          im=["themes/images/MONTES-IMAGES/JANUARY.png",
       "themes/images/MONTES-IMAGES/FEBRUARY.png",
       "themes/images/MONTES-IMAGES/MARCH.png",
       "themes/images/MONTES-IMAGES/APRIL.png", 
       "themes/images/MONTES-IMAGES/MAY.png",
       "themes/images/MONTES-IMAGES/JUNE.jpg",
       "themes/images/MONTES-IMAGES/JULY.jpg", 
        "themes/images/MONTES-IMAGES/AUGUST.jpg",
       "themes/images/MONTES-IMAGES/SEPTEMBER.png",
       "themes/images/MONTES-IMAGES/OCTOBER.png", 
        "themes/images/MONTES-IMAGES/NOVEMBER.png",
       "themes/images/MONTES-IMAGES/DECEMBER.jpg"] ,
        IM2=[
               "themes/images/MONTES-IMAGES/New/JANUARY.png"
                , "themes/images/MONTES-IMAGES/New/FEBRUARY-BG.png"
                , "themes/images/MONTES-IMAGES/New/MARCH-BG.png"
                , "themes/images/MONTES-IMAGES/New/APRIL-2.png"
                , "themes/images/MONTES-IMAGES/New/MAY.png"
                , "themes/images/MONTES-IMAGES/New/JUNE.png"
                , "themes/images/MONTES-IMAGES/New/JULY%20-1.png"
                , "themes/images/MONTES-IMAGES/New/AUGUST%20.png"
                , "themes/images/MONTES-IMAGES/New/SEPTEMBER%20-1.png"
                , "themes/images/MONTES-IMAGES/New/OCTOBER%20-1.png"
                , "themes/images/MONTES-IMAGES/New/NOVEMBER%20.png"
                , "themes/images/MONTES-IMAGES/New/DECEMBER%20.png"
        ],
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        eventslist = document.getElementsByTagName('li'),
        eventslistspan=   document.getElementsByTagName('span'),
         selectedDay,
        setDate,
        daysLen = days.length;
// options should like '2014-01-01'
    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }
    
    Calendar.prototype.draw  = function() {
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');
            if (year<2025){
            pre[0].addEventListener('click', function(){that.preMonth(); });
            next[0].addEventListener('click', function(){that.nextMonth(); });
            reset.addEventListener('click', function(){that.reset(); });
            }
         else if (year >= 2025){
            next.style='dispaly:none';
        }
        while(daysLen--) {
            days[daysLen].addEventListener('click', function(){that.clickDay(this); });
        }
    };
    
    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month'),
            headMonth2 = document.getElementsByClassName('head-month2');

        if (year<2025){
            e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] +" - " + year; 
            headMonth2[0].innerHTML = monthTag[month]  ;
          }
          document.getElementById('notes').innerHTML = montevents[month][0];
            document.getElementById("naser").style ="background-image:url(" +(IM2[month]) + ")";
        if (month===1){
            document.getElementById("foundingdayman").style ="background-image:url(themes/images/foundingday-icons/foundingday-man.png)";
            document.getElementById("foundingdaylogo").style ="background-image:url(themes/images/foundingday-icons/foundingday-logo-light.png)";
 
        }else{
             document.getElementById("foundingdayman").style ="background:none";
             document.getElementById("foundingdaylogo").style ="background:none";
        }
       
     };
        
    Calendar.prototype.DisplayImage =function (x) {
         
            document.getElementById("naser").style ="background-image:url(" +(im[x]) + ")";
      };
    
    Calendar.prototype.drawDays = function() {
        
        
        
        if (year<2025){
 
        var startDay = new Date(year, month, 1).getDay(),
//      下面表示这个月总共有几天
            nDays = new Date(year, month + 1, 0).getDate(),
             noon=0,
            n = startDay;
//      清除原来的样式和日期
        for(var k = 0; k <42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
//            eventslist[k].innerHTML='';
        }
            
       for(var m = 0; m <6; m++) {
            eventslist[m].innerHTML = '';
       eventslistspan[m].innerHTML='';
           eventslistspan[m].style="display:none";

            
        }

        for(var i  = 1; i <= nDays ; i++) {
            
            if( montevents[month][i]!==""){
                days[n].id = "evented"; 
                if( montevents[month][i]!=="."){
                    
                eventslist[noon].style="display:flex";
                eventslistspan[noon].style="display:flex";
                    eventslistspan[noon].innerHTML=i;
//                    if(i<10){
//                        eventslistspan[noon].style="padding-left :9px";
//                    } else if(i>9){
//                         eventslistspan[noon].style="padding-left: 2px";
//                    }
                    
                eventslist[noon].innerHTML=montevents[month][i];
//                    eventslist[noon]=i;
            noon++;
            }
            }
            
             days[n].innerHTML = i; 
            n++;
            
        }
            
        
        for(var j = 0; j < 42; j++) {
            if(days[j].innerHTML === ""){
                
                days[j].id = "disabled";
                
            }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                    this.drawHeader(day);
                    days[j].id = "today";
                }
            }
            if(selectedDay){
                if((j === selectedDay.getDate() + startDay - 1)&&(month === selectedDay.getMonth())&&(year === selectedDay.getFullYear())){
                days[j].className = "selected";
                this.drawHeader(selectedDay.getDate());
                }
            }
        }
        }
        
    };
    
    Calendar.prototype.clickDay = function(o) {
        var selected = document.getElementsByClassName("selected"),
            len = selected.length;
        if(len !== 0){
            selected[0].className = "";
        }
        o.className = "selected";
        selectedDay = new Date(year, month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);
        
    };
    
    Calendar.prototype.preMonth = function() {
             
        if(month < 1 && year > 2023  ){ 
            month = 11;
            year = year - 1; 
        }else { if(year > 2022 && month !== 0){
            month = month - 1;
        
        }
        }
                 this.DisplayImage(month);

        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.nextMonth = function() {
 
        if(month >= 11 &&  year <= 2024){
            month = -1;
            year =  year + 1; 
        }else { if(year <= 2024 && month !== 11){
            month = month + 1;
        }
               else return 0;
       
         this.DisplayImage(month);
        this.drawHeader(1);
        this.drawDays(); }
    };
    
    Calendar.prototype.getOptions = function() {
        if(this.options){
            var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1]-1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
        }
    };
    
     Calendar.prototype.reset = function() {
         month = today.getMonth();
         year = today.getFullYear();
         day = today.getDate();
         this.options = undefined;
         this.drawDays();
     };
    
    Calendar.prototype.setCookie = function(name, expiredays){
        if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
        }else{
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };
    
    Calendar.prototype.getCookie = function(name) {
        if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
                nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1,c.length);
                    
                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay =  new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();
    
        
}, false);
    
   

})(jQuery);
