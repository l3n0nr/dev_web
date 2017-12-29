/*
Plugin Name: Mission Tracking
Version: 1.3.35.7

Count down until any date script - By JavaScript Kit (www.javascriptkit.com) Over 200+ free scripts here!

Modified by Robert M. Kuhnhenn, D.O. (www.rmkwebdesign.com/Countdown_Timers/) on 5/30/2006 to count down to a specific date AND time, on 10/20/2007 to a new format, on 1/10/2010 to include time zone offset, and on 7/12/2012 to digital numbers.

Modified by Michael J. Deep on 9/17/2015 to use sprites and fallbacks.
*/

var cd_status = "cd_" + mtCountdownData.status;
var cd_year = mtCountdownData.year;
var cd_month = mtCountdownData.month;
var cd_day = mtCountdownData.day;
var cd_hour = mtCountdownData.hour;
var cd_minute = mtCountdownData.minute;
var cd_tz = 0; /* Do not touch this. */

document.getElementsByClassName(cd_status)[0].style.display = "inline-block";
document.getElementById("cd_day1").classList.add("cd_num");
document.getElementById("cd_day2").classList.add("cd_num");
document.getElementById("cd_day3").classList.add("cd_num");
document.getElementById("cd_h1").classList.add("cd_num");
document.getElementById("cd_h2").classList.add("cd_num");
document.getElementById("cd_m1").classList.add("cd_num");
document.getElementById("cd_m2").classList.add("cd_num");
document.getElementById("cd_s1").classList.add("cd_num");
document.getElementById("cd_s2").classList.add("cd_num");

var cd_montharray = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function cd_countdown(yr,m,d,hr,min){
	theyear = yr;themonth=m;theday=d;thehour=hr;theminute=min;
	var today = new Date();
	var todayy = today.getYear();
	if (todayy < 1000) {todayy+=1900;}
	var todaym = today.getMonth();
	var todayd = today.getDate();
	var todayh = today.getHours();
	var todaymin = today.getMinutes();
	var todaysec = today.getSeconds();
	var todaystring1 = cd_montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
	var todaystring = Date.parse(todaystring1)+(cd_tz*1000*60*60);
	var futurestring1 = (cd_montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
	var futurestring = Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
	var dd = futurestring-todaystring;
	var dday = Math.floor(dd/(60*60*1000*24)*1);
	var dhour = Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
	var dmin = Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
	var dsec = Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
	if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
		document.getElementById("cd_day1").classList.add("cd_blink");
		document.getElementById("cd_day2").classList.add("cd_blink");
		document.getElementById("cd_day3").classList.add("cd_blink");
		document.getElementById("cd_h1").classList.add("cd_blink");
		document.getElementById("cd_h2").classList.add("cd_blink");
		document.getElementById("cd_m1").classList.add("cd_blink");
		document.getElementById("cd_m2").classList.add("cd_blink");
		document.getElementById("cd_s1").classList.add("cd_blink");
		document.getElementById("cd_s2").classList.add("cd_blink");
		clearTimeout(startTimer);
		return;
	}
	else {
		startTimer = setTimeout("cd_countdown(theyear,themonth,theday,thehour,theminute)",500);
	}
	convert(dday,dhour,dmin,dsec);
}

function convert(d,h,m,s) {
	if (!document.images) return;
	/* day */
	if (d <= 9) {
		document.getElementById("cd_day1").style.display = "none";
		document.getElementById("cd_day2").style.backgroundPosition = "0px 0px";
		document.getElementById("cd_day3").style.backgroundPosition = "-" + eval(d * 16) + "px 0px";
	} else if (d <= 99) {
		document.getElementById("cd_day1").style.display = "none";
		document.getElementById("cd_day2").style.backgroundPosition = "-" + eval(Math.floor(d/10) * 16) + "px 0px";
		document.getElementById("cd_day3").style.backgroundPosition = "-" + eval(d%10 * 16) + "px 0px";
	} else {
		var day = d.toString();
		day = day.substr(1,1);
		day = parseInt(day);
		document.getElementById("cd_day1").style.backgroundPosition = "-" + eval(Math.floor(d/100) * 16) + "px 0px";
		document.getElementById("cd_day2").style.backgroundPosition = "-" + eval(day * 16) + "px 0px";
		document.getElementById("cd_day3").style.backgroundPosition = "-" + eval(d%10 * 16) + "px 0px";
	}
	/* hour */
	if (h <= 9) {
		document.getElementById("cd_h1").style.backgroundPosition = "0px 0px";
		document.getElementById("cd_h2").style.backgroundPosition = "-" + eval(h * 16) + "px 0px";
	} else {
		document.getElementById("cd_h1").style.backgroundPosition = "-" + eval(Math.floor(h/10) * 16) + "px 0px";
		document.getElementById("cd_h2").style.backgroundPosition = "-" + eval(h%10 * 16) + "px 0px";
	}
	/* min */
	if (m <= 9) {
		document.getElementById("cd_m1").style.backgroundPosition = "0px 0px";
		document.getElementById("cd_m2").style.backgroundPosition = "-" + eval(m * 16) + "px 0px";
	} else {
		document.getElementById("cd_m1").style.backgroundPosition = "-" + eval(Math.floor(m/10) * 16) + "px 0px";
		document.getElementById("cd_m2").style.backgroundPosition = "-" + eval(m%10 * 16) + "px 0px";
	}
	/* sec */
	if (s <= 9) {
		document.getElementById("cd_s1").style.backgroundPosition = "0px 0px";
		document.getElementById("cd_s2").style.backgroundPosition = "-" + eval(s * 16) + "px 0px";
	} else {
		document.getElementById("cd_s1").style.backgroundPosition = "-" + eval(Math.floor(s/10) * 16) + "px 0px";
		document.getElementById("cd_s2").style.backgroundPosition = "-" + eval(s%10 * 16) + "px 0px";
	}
}

cd_countdown(cd_year,cd_month,cd_day,cd_hour,cd_minute);