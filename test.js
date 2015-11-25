var first;
var last;
var now_month;
var now_year;
var month = new Array("Jan","Feb","March","April","May","Jun","July","August","September","October","November","December");
var day = new Array("u","m","t","w","h","f","s");
var no_day = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
	window.onload = function one()
	{
		var dd = new Date();
		var todays_date = dd.getDate();
		var todays_day = dd.getDay();
		var todays_month = dd.getMonth();
		var todays_year = dd.getFullYear();
		//alert(todays_date);
	
		var temp=print_Calender(todays_date,todays_day,todays_month,todays_year);
		first= temp[0];
		last=temp[1];
		now_month=temp[2];
		now_year=temp[3];
	
		//alert(now_year);
		//temp=print_Calender(no_day[now_month-1],6,now_month-1,now_year);
		//alert(v+"fsffs");
		//temp=print_Calender(31,6);
		//first= temp[0];
		//last=temp[1];
		//alert(first);
	
	}
	
	function prev_month()
	{   
		if (first==0)
			{
				first = 7;
			}
		
		first = first - 1;
	
		if(now_month==0)
		{
			now_year = now_year - 1;
			now_month= 12;
		}
		
		var temp=print_Calender(no_day[now_month-1],first,now_month-1,now_year);
		first= temp[0];
		last=temp[1];
		now_month=temp[2];
		now_year=temp[3];
	}
	
	function next_month()
	{   
		if (last==6)
			{
				last = -1;
			}
		last = (last+1);
		if(now_month==11)
		{
			//alert(now_year+"vsdfsdf");
			now_year = now_year + 1;
			//alert(now_year);
			
		}
		//alert(last+" "+no_day[(now_month+1)%12]);

		var temp=print_Calender(1,last,((now_month+1)%12),now_year);
		first= temp[0];
		last=temp[1];
		now_month=temp[2];
		now_year=temp[3];
		//alert(now_year);
	}
	
	function print_Calender(todays_date,todays_day,todays_month,todays_year)
	{

		
	//function get_date()
	{

		var d = new Date();
		var real_todays_month = d.getMonth();
		var real_todays_date = d.getDate();
		var real_todays_year = d.getFullYear();
		var temp = todays_date % 7;
		var temp2 = todays_day;
		//alert(real_todays_date);
		//alert(real_todays_month);
		//alert(real_todays_year);	
		while(temp > 1)
		{
		
			temp = temp - 1;
			temp2 = temp2 - 1;
			if(temp2 == -1)
			{
				temp2=6;
			}
		}
	
		//alert(temp2);
		//alert(d.getMonth());
		var temp3 = "s1" ;
		var temp4 = 1;
	
		var curr_month = todays_month;



		//alert(todays_day+" okokokoko")
		//alert("1");
		var cl1=0;
		var cl2=1;
		var cl3=0;
		while(cl1<7)
		{	
			while(cl2<7)
			{
		
				cl3 = day[cl1]+""+cl2;
			
				document.getElementById(cl3).innerHTML = "";
	
				cl2++;
			}
			cl2=1;
			cl1++;
		}



		var numday = no_day[curr_month]
		if ((numday==28) && (todays_year%4==0))
		{
			numday=29;
		}
		while(temp <= numday)
		{	
			temp3 = day[temp2]+""+temp4;
		
			document.getElementById(temp3).innerHTML = temp;
			document.getElementById(temp3).style.color = "black";
			if((real_todays_date==temp) && (real_todays_month==curr_month) && (real_todays_year==todays_year))
			{
				document.getElementById(temp3).style.color = "red";
			}	
	
			if(temp == 1)
			{
				var first_day = temp2;
			}
			if(temp == numday)
			{
				var last_day = temp2;
			}

			if(temp2==6)
			{
				temp4 = temp4 + 1;
			}
			temp2 = (temp2 + 1) % 7 ;
			temp = temp + 1;

	
	}
	//alert(last_day);
	var temp_month_year = month[todays_month]+" "+todays_year;

	document.getElementById("month_year").innerHTML = temp_month_year;
	 
	
	
	
	
	}
return [first_day,last_day,todays_month,todays_year];
}

	function select_date(tag)
	{
		alert(document.getElementById(tag.id).innerHTML+"-"+(now_month+1)+"-"+now_year)
	}


	