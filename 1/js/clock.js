function time(){
   					 document.write("<span id='clock'></span>");
  					 var Digital,hours,minutes,seconds,timeValue,years,months,dates,day,Dday;
  					 function showtime()
   					 {
    					Digital=new Date();
						years=Digital.getFullYear();
						months=Digital.getMonth();
						dates=Digital.getDate();
						day=Digital.getDay();
						Dday=new Array("日","一","二","三","四","五","六");
						hours = Digital.getHours();
						minutes = Digital.getMinutes();
						seconds = Digital.getSeconds();
						months=months+1;
						if(months<=9)
							months="0"+months;
						if(dates<=9)
							dates="0"+dates;
						if(hours<=9)
							hours="0"+hours;
	   					timeValue=years+"年"+months+"月"+dates+"日 星期"+Dday[day]+"<br>&nbsp;";
						timeValue += (hours >= 12) ? "下午 " : "上午 ";
						timeValue += hours + "点";
						timeValue += ((minutes <10)?"0":"") + minutes+"分";
						timeValue += ((seconds <10)?"0":"") + seconds+"秒";
						clock.innerHTML = timeValue;
						setTimeout("showtime()",1000);
   					 }
    				showtime()
					}