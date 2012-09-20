function getCurrentTime() {
	var currentTime = new Date();
	var hours = currentTime.getHours();
	var minutes = currentTime.getMinutes();
	var seconds = currentTime.getSeconds();
	
	if(hours < 10) hours = "0" + hours;
	if(minutes < 10) minutes = "0" + minutes;
	if(seconds < 10) seconds = "0" + seconds;
	
	return hours + ":" + minutes + ":" + seconds;
	//document.write(hours + ":" + minutes + ":" + seconds + " ");
	/*if(hours > 11){
	document.write("PM")
	} else {
	document.write("AM")
	}*/
}
// Convert date from javascript calendar for < insert > format < MySQL >
function convertDateToMySQL(date) {
	if(date != null && date != '') {
		// 31/01/2548 => 2005-01-31
		var ddMMYYYY = date.split("/");
		var dd = ddMMYYYY[0];
		var MM = ddMMYYYY[1];
		var YYYY = parseInt(ddMMYYYY[2]) - 543;
		return YYYY + "-" + MM + "-" + dd;
	} else {
		//alert("Paramenter is null in function convertDateToMySQL()!!!");
		return null;
	}
}

function convertDateTimeToMySQL(datetime) {
	// 31/01/2548 23:59:59=> 2005-01-31 23:59:59
	if(datetime != null && datetime != '') {
		var dt = datetime.split(" ");
		var ddMMYYYY = dt[0].split("/");
		var dd = ddMMYYYY[0];
		var MM = ddMMYYYY[1];
		var YYYY = "" + (parseInt(ddMMYYYY[2]) - 543);
		return YYYY + "-" + MM + "-" + dd + " " + dt[1];
	} else {
		return null;
	}
}

function convertDateCurrentTimeToMySQL(date) {
	if(date != null && date != '') {
		// 31/01/2548 => 2005-01-31 23:59:59
		var ddMMYYYY = date.split("/");
		var dd = ddMMYYYY[0];
		var MM = ddMMYYYY[1];
		var YYYY = parseInt(ddMMYYYY[2]) - 543;
		return YYYY + "-" + MM + "-" + dd + " " + getCurrentTime();
	} else {
		//alert("Paramenter is null in function convertDateTimeToMySQL()!!!");
		return null;
	}
}
/********************************************************************************************/
function getObject(obj) {
	var theObj;
	if(document.all) {
    	if(typeof obj=="string") {
      		return document.all(obj);
    	} else {
      		return obj.style;
		}
 	}
	
	if(document.getElementById) {
    	if(typeof obj=="string") {
      		return document.getElementById(obj);
    	} else {
      		return obj.style;
    	}
  	}
  	return null;
}

function identityCard(obj) {
	var input = getObject(obj).value;
	var tmp = "";
	if(input.length > 1 && input.length == 2) {
		if(input.substring(1, 2) != '-') {		
			tmp = input.substring(0, 1);		
			input = tmp + "-" + input.substring(2, input.length-1);
		}
	}	else if(input.length > 5 && input.length == 6) {
		tmp = input.substring(0, 6);
		input = tmp + "-" + input.substring(5, input.length-1);
	} else if(input.length > 11 && input.length == 12) {
		tmp = input.substring(0, 12);
		input = tmp + "-" + input.substring(11, input.length-1);
	} else if(input.length > 14 && input.length == 15) {
		tmp = input.substring(0, 15);
		input = tmp + "-" + input.substring(14, input.length-1);
	} else if(input.length > 16) {
		tmp = input.substring(0, input.length-1);
		input = tmp;
	}
	getObject(obj).value = "";
	getObject(obj).value += input;
}

function formatSalary(obj) {	// 1,234,567 => onKeyPress
	var salary = getObject(obj).value;
	if(salary.length == 3) {
		getObject(obj).value = salary.substring(0, 1) + "," + salary.substring(1, salary.length);
	} else if(salary.length == 5) {
		var s = salary.split(",");	// 1,2345
		var salary = s[0] + "" + s[1];	// 12345
		getObject(obj).value = salary.substring(0, 2) + "," + salary.substring(2, salary.length);
	} else if(salary.length == 6) {
		var s = salary.split(",");	// 12,3456
		var salary = s[0] + "" + s[1];	// 123456
		getObject(obj).value = salary.substring(0, 3) + "," + salary.substring(3, salary.length);	// 123,456
	} else if(salary.length == 7) {
		var s = salary.split(",");	// 123,4567
		var salary = s[0] + "" + s[1];	// 1234567
		getObject(obj).value = salary.substring(0, 1) + "," + salary.substring(1, 4) + "," + salary.substring(3, salary.length);	// 1,234,567
	}
}
/********************************************************************************************/
// Compute age from current date
function checkNumber(input, min, max, msg) {	
	msg = msg + " field has invalid data: " + input.value;

    var str = input.value;
    for (var i = 0; i < str.length; i++) {
        var ch = str.substring(i, i + 1)
        if ((ch < "0" || "9" < ch) && ch != '.') {
            alert(msg);
	    	return false;
        }
    }
    var num = 0 + str;
    if (num < min || max < num) {
        alert(msg + " not in range [" + min + ".." + max + "]");
        return false;
    }
    input.value = str;
    return true;
}

function getMonthLength(month,year,julianFlag) {
	var ml;
   	if(month==1 || month==3 || month==5 || month==7 || month==8 || month==10||month==12) {
		ml = 31;
	} else {
		if(month==2) {
        	ml = 28;
          	if(!(year%4) && (julianFlag==1 || year%100 || !(year%400)))
             	ml++;
       		} else {
				ml = 30;
			}
   	}
   	return ml;    
}

function useCurrentDate() { //form) {
   	Today=new Date();
   	/*form.yd.value = Today.getYear()+0;
   	form.md.value = Today.getMonth()+1;
   	form.dd.value = Today.getDate();	*/
	getObject("yd").value = Today.getYear()+0;
   	getObject("md").value = Today.getMonth()+1;
   	getObject("dd").value = Today.getDate();
   	return;
}

function computeForm(form) {
//   var ml={31,28,31,30,31,30,31,31,30,31,30,31};

   	MNames=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep", "Oct","Nov","Dec");

	if( (form.yd.value == null || form.yd.value.length == 0) ||
       	(form.dd.value == null || form.dd.value.length == 0) ||
       	(form.yb.value == null || form.yb.value.length == 0) ||
       	(form.db.value == null || form.db.value.length == 0)) {
			//alert("yd : " + form.yd.value + ", dd : " + form.dd.value + ", yb : " + form.yb.value + ", db : " + form.db.value);
      	return;
   	}
	// Current date
   	var yd = form.yd.value;
   	var md = form.md.value;
   	var dd = form.dd.value;
	// Birth day
   	var yb = form.yb.value;
   	var mb = form.mb.value;
   	var db = form.db.value;
	
   	// Month length 0->use calendar length
   	var mLength = 0;//parseInt(form.monthLength.options[form.monthLength.selectedIndex].value);
	// mLength =>		  0 : Calendar months
	//							30 : 30-day
	
   	// 0 if Gregorian, 1 is Julian
   	var isJulian = '0';//form.isJulian.options[form.isJulian.selectedIndex].value;
	// isJulian =>		0 : Gregorian
	//						1 : Julian

   	if( !checkNumber(form.dd,1, getMonthLength(md,yd,isJulian),"Day of death") ||
       	!checkNumber(form.db,1, getMonthLength(mb,yb,isJulian), "Day of birth")) {
      	return;
   	}

   	var ma=0;
   	var ya=0;

   	var da = dd-db;
   	// This is the all-important day borrowing code.
	if(da<0) {
    	md--;
      	// Borrow months from the year if necesssary.
      	if(md<1) {
	  		yd--;
	 		// Determine no. of months in year
	 		if(mLength) {
				md=md+parseInt(365/mLength);
			} else {
				md=md+12;
			}
      	}
      
	  	if(mLength==0) {// Use real month length if no fixed
        	// length is indicated - note that we add a leap day if necessary.
         	ml=getMonthLength(md,yd,isJulian);
	 		da=da+ml;
      	}	else {  	// For this case, everything works like it did in elementary school.
			da+=mLength;
		} // Use fixed month length
	}

   	ma = md - mb;
   	// Month borrowing code - borrows months from years.
   	if(ma<0) {
      	yd--;
      	if(mLength!=0) {
			ma=ma+parseInt(365/mLength);
		} else {
			ma=ma+12;
		}
   	}

   	ya = yd - yb;

   	form.da.value = da;

   	form.ma.value = ma;

   	form.ya.value = ya;
}

function findPosX(obj)
{
	var curleft = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft;
}

function findPosY(obj)
{
	var curtop = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}

function intOnly(i) {
	if(i.value.length>0) {
		i.value = i.value.replace(/[^\d]+/g, ''); 
	}
}