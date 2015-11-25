<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
    <head>

    <script type="text/javascript">

    var time1 = new Array("6:00 AM","6:30 AM","7:00 AM","7:30 AM","8:00 AM","8:30 AM","9:00 AM","9:30 AM","10:00 AM","10:30 AM","11:00 AM","11:30 AM","12:00 PM","12:30 PM","1:00 PM","1:30 PM","2:00 PM","2:30 PM","3:00 PM","3:30 PM","4:00 PM","4:30 PM","5:00 PM","5:30 PM","6:00 PM");
 
    var table_date = [<?php  
    
         $conn = mysql_connect("localhost", "root", "root");
         if (! $conn ) 
    {
        echo "Could not connect: ";
    } 
    $quer = 'SELECT * FROM proj_slot;';
    mysql_select_db("mysql");
    $tmp = mysql_query( $quer, $conn );
    if ($tmp!=0) 
    {
        while($tmp1 = mysql_fetch_array($tmp, MYSQL_ASSOC))
        {
            echo ' "'.$tmp1['date'].'",';
        } 
    } 
    else 
    {
        echo "Not Found.";
    }
    mysql_close($conn);
    
    ?>] ;

      var table_time = [<?php  
    
         $conn = mysql_connect("localhost", "root", "root");
         if (! $conn ) 
    {
        echo "Could not connect: ";
    } 
    $quer = 'SELECT * FROM proj_slot;';
    mysql_select_db("mysql");
    $tmp = mysql_query( $quer, $conn );
    if ($tmp!=0) 
    {
        while($tmp1 = mysql_fetch_array($tmp, MYSQL_ASSOC))
        {
            echo ' "'.$tmp1['time'].'",';
        } 
    } 
    else 
    {
        echo "Not Found.";
    }
    mysql_close($conn);
    
    ?>] ;

      var table_dur = [<?php  
    
         $conn = mysql_connect("localhost", "root", "root");
         if (! $conn ) 
    {
        echo "Could not connect: ";
    } 
    $quer = 'SELECT * FROM proj_slot;';
    mysql_select_db("mysql");
    $tmp = mysql_query( $quer, $conn );
    if ($tmp!=0) 
    {
        while($tmp1 = mysql_fetch_array($tmp, MYSQL_ASSOC))
        {
            echo ' "'.$tmp1['duration'].'",';
        } 
    } 
    else 
    {
        echo "Not Found.";
    }
    mysql_close($conn);
    
    ?>] ;

      var table_init = [<?php  
    
         $conn = mysql_connect("localhost", "root", "root");
         if (! $conn ) 
    {
        echo "Could not connect: ";
    } 
    $quer = 'SELECT * FROM proj_slot;';
    mysql_select_db("mysql");
    $tmp = mysql_query( $quer, $conn );
    if ($tmp!=0) 
    {
        while($tmp1 = mysql_fetch_array($tmp, MYSQL_ASSOC))
        {
            echo ' "'.$tmp1['init_name'].'",';
        } 
    } 
    else 
    {
        echo "Not Found.";
    }
    mysql_close($conn);
    
    ?>] ;

      var table_stat = [<?php  
    
         $conn = mysql_connect("localhost", "root", "root");
         if (! $conn ) 
    {
        echo "Could not connect: ";
    } 
    $quer = 'SELECT * FROM proj_slot;';
    mysql_select_db("mysql");
    $tmp = mysql_query( $quer, $conn );
    if ($tmp!=0) 
    {
        while($tmp1 = mysql_fetch_array($tmp, MYSQL_ASSOC))
        {
            echo ' "'.$tmp1['approve'].'",';
        } 
    } 
    else 
    {
        echo "Not Found.";
    }
    
    ?>] ;



   </script>


      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Event Orgniser</title>

                <!-- Tell the browser to be responsive to screen width -->
               
                    <!-- Bootstrap 3.3.5 -->
                    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
                     <link rel="stylesheet" href="bootstrap/css/AdminLTE.min.css">
                      <link rel="stylesheet" href="bootstrap/css/bootstrap-select.css">

                       <script src="dist/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="dist/js/bootstrap-select.js"></script>




<script type="text/javascript">
    var first;
var last;
var now_month;
var now_year;
var month = new Array("Jan","Feb","March","April","May","Jun","July","August","September","October","November","December");
var day = new Array("u","m","t","w","h","f","s");
var no_day = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
    

    window.onload = function one()
    {
        coloring();

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

        var date3 = todays_date + "-" + (todays_month+1) + "-" + todays_year;
       

 var i = 0;
 var str = "";
 var str1 = "";

 
    while(i < table_init.length)
    {
        if(table_date[i] == date3)
        {
            str = "";
            str1 = "";
            document.getElementById(table_time[i]).className=table_stat[i];


    str = table_time[i] + "1";
    str1 = table_time[i] + "2";
    
document.getElementById(str).innerHTML = table_init[i]; 
   


var btn1 = document.createElement('input');
btn1.type = "submit";
btn1.className = "btn btn-primary btn-xs";
btn1.value = "Accept";
//btn1.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn1);

     var btn2 = document.createElement('input');
btn2.type = "submit";
btn2.className = "btn btn-default btn-xs";
btn2.value = " ";
//btn2.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn2);


var btn3 = document.createElement('input');
btn3.type = "submit";
btn3.className = "btn btn-primary btn-xs";
btn3.value = "Reject";
//btn3.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn3);

    
        }
        i++;
    }
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
        

      //  document.getElementById("today_date_show").innerHTML=document.getElementById(tag.id).innerHTML+"-"+(now_month+1)+"-"+now_year;
//document.getElementById("hid_date").value=document.getElementById(tag.id).innerHTML+"-"+(now_month+1)+"-"+now_year;

var date2 = document.getElementById(tag.id).innerHTML+"-"+(now_month+1)+"-"+now_year;
coloring();
build_day(date2);
}


function build_day(date2)
{
    var i = 0;
 

    while(i < table_init.length)
    {
        if(table_date[i] == date2)
        {
             var str = "";
             str = table_time[i] + "1";

    
            document.getElementById(str).innerHTML = table_init[i]; 
            document.getElementById(table_time[i]).className=table_stat[i];


            var str1 = "";
             str1 = table_time[i] + "2";

var btn1 = document.createElement('input');
btn1.type = "submit";
btn1.className = "btn btn-primary btn-xs";
btn1.value = "Accept";
//btn1.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn1);

     var btn2 = document.createElement('input');
btn2.type = "submit";
btn2.className = "btn btn-default btn-xs";
btn2.value = " ";
//btn2.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn2);


var btn3 = document.createElement('input');
btn3.type = "submit";
btn3.className = "btn btn-primary btn-xs";
btn3.value = "Reject";
//btn3.onclick = (function(entry) {return function() {chooseUser(entry);}})(entry);
var tmppp = document.getElementById(str1);
    tmppp.appendChild(btn3);

        }
        i++;
    }

}

function coloring()
{
    var i = 0;


    while(i < 25)
    {
         var str = " ";
         str = time1[i];
         str = str + "1";

         var str1 = " ";
         str1 = time1[i];
         str1 = str1 + "2";

        var str2 = " ";
         str2 = time1[i];
         str2 = str2 + "3";


        if(i%2 == 0)
        { 
             document.getElementById(str).innerHTML = " ";
             document.getElementById(time1[i]).className="active";


               var elem = document.getElementById(str1); 
            elem.parentNode.removeChild(elem);


var btn1 = document.createElement('span');
btn1.id = str1;

var tmppp = document.getElementById(str2);
    tmppp.appendChild(btn1);

        }
        else   
        {
             document.getElementById(str).innerHTML = " "; 
             document.getElementById(time1[i]).className="";


 
               var elem1 = document.getElementById(str1); 
            elem1.parentNode.removeChild(elem1);

var btn12 = document.createElement('span');
btn12.id = str1;
var tmppp1 = document.getElementById(str2);
    tmppp1.appendChild(btn12);

        }
         i++;
    }

}

    
</script>>
                                                    </head>





        <style type="text/css">


        
            div.bs-example{
                height: 737px;
                overflow: scroll;
            }
 
        
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100%; 
            max-height: 100%; 
            font-family:Sans-serif;
            line-height: 1.5em;
        }
        
        #header {

            line-height: 60px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px; 
            overflow: hidden;
            background: #228B22;
        }
        
        #nav {
            position: absolute; 
            top: 60px; 
            left: 0; 
            bottom: 0;
            width: 310px;
            overflow: auto; 
            background: #C0C0C0 ;       
        }
        
        #logo {
            padding:10px;
        }
        
        main {
            position: fixed;
            top: 60px; 
            left: 310px; 
            right: 0;
            bottom: 0;
            overflow: auto; 
            background: #F2F2F2;
        }
        
        .innertube {
            margin: 15px;
        }
        
        </style>

    
    
    </head>
    
    <body>      
        <header id="header">
        
            

        </header>
        

        <main >
          <!-- Main content -->

                <section class="content">
                    <div class="row">
                        <div class="col-md-3">


                     <form name="slot_book" action="myserver.php" method="POST">

                            <div class="box box-solid">
                            <div class="box-header with-border">
                                    <h4 class="box-title">Notifications</h4>
                                </div>
                                
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id="external-events">
                                    
                                        
                                        
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                    </form>                            


                            
                            
                          
                     
                        </div><!-- /.col -->
                        



                        
                        <div class="col-md-9">

                            
                            
                            
                           
                            
                            
                            
                            
                            <!-- Request >>> class="warning"
                             Approve >>> class="success"
                             Busy >>> class="info"
                             -->        
                            
                            <div class="box box-solid">
                                
                                <div class="box-body">
                                    
                                    
                                    <div class="bs-example" data-example-id="contextual-table">
                                        
                                        <table class="table">
                                                 <col width="50">
  <col width="200">
  <col width="100">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Initiator Name</th>
                                                     <th align="right"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id = "6:00 AM" class="active">
                                                    <th scope="row">06:00 AM</th>
                                                    <td> <span id = "6:00 AM1"></span></td>
                                                     <td id = "6:00 AM3" align="right" > <span id = "6:00 AM2"></span> </td>
                                                </tr>
                                                <tr id = "6:30 AM">
                                                    <th scope="row">06:30 AM</th>
                                                    <td><span id = "6:30 AM1"></span></td>
                                                     <td id = "6:30 AM3" align="right" > <span id = "6:30 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "7:00 AM" class="success">
                                                    <th scope="row">07:00 AM</th>
                                                    <td> <span id = "7:00 AM1"></span></td>
                                                     <td id = "7:00 AM3" align="right" > <span id = "7:00 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "7:30 AM" >
                                                    <th scope="row">07:30 AM</th>
                                                    <td><span id = "7:30 AM1"></span></td>
                                                     <td id = "7:30 AM3" align="right" > <span id = "7:30 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="active" id = "8:00 AM">
                                                    <th scope="row">08:00 AM</th>
                                                    <td><span id = "8:00 AM1"></span></td>
                                                     <td id = "8:00 AM3" align="right" > <span id = "8:00 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "8:30 AM">
                                                    <th scope="row">08:30 AM</th>
                                                    <td><span id = "8:30 AM1"></span></td>
                                                     <td id = "8:30 AM3" align="right" > <span id = "8:30 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="warning" id = "9:00 AM">
                                                    <th scope="row">09:00 AM</th>
                                                    <td><span id = "9:00 AM1"></span></td>
                                                    <td id = "9:00 AM3" align="right" > <span id = "9:00 AM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "9:30 AM">
                                                    <th scope="row">09:30 AM</th>
                                                    <td><span id = "9:30 AM1"></span></td>
                                                     <td id = "9:30 AM3" align="right" > <span id = "9:30 AM2"></span> </td>
                                                    
                                                </tr>

                                                 </tr>
                                                <tr id = "10:00 AM">
                                                    <th scope="row">10:00 AM</th>
                                                    <td><span id = "10:00 AM1"></span> </td>
                                                      <td id = "10:00 AM3" align="right" > <span id = "10:00 AM2"></span> </td>

                                                </tr>
                                                <tr id = "10:30 AM" class="active">
                                                    <th scope="row">10:30 AM</th>
                                                    <td><span id = "10:30 AM1"></span></td>
                                                     <td id = "10:30 AM3" align="right" > <span id = "10:30 AM2"></span> </td>
                                                    
                                                </tr>

                                                <tr id = "11:00 AM" class="active">
                                                    <th scope="row">11:00 AM</th>
                                                    <td><span id = "11:00 AM1"></span></td>
                                                     <td id = "11:00 AM3" align="right" > <span id = "11:00 AM2"></span> </td>
                                                    
                                                </tr>
                                                
                                                <tr id = "11:30 AM">
                                                    <th scope="row">11:30 AM</th>
                                                    <td><span id = "11:30 AM1"></span></td>
                                                     <td id = "11:30 AM3" align="right" > <span id = "11:30 AM2"></span> </td>

                                                </tr>
                                                <tr class="active" id = "12:00 PM">
                                                    <th scope="row">12:00 PM</th>
                                                    <td><span id = "12:00 PM1"></span></td>
                                                     <td id = "12:00 PM3" align="right" > <span id = "12:00 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="success" id = "12:30 PM">
                                                    <th scope="row">12:30 PM</th>
                                                    <td><span id = "12:30 PM1"></span></td>
                                                     <td id = "12:30 PM3" align="right" > <span id = "12:30 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="active" id = "1:00 PM">
                                                    <th scope="row">01:00 PM</th>
                                                    <td><span id = "1:00 PM1"></span></td>
                                                     <td id = "1:00 PM3" align="right" > <span id = "1:00 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="info" id = "1:30 PM">
                                                    <th scope="row">01:30 PM</th>
                                                    <td><span id = "1:30 PM1"></span></td>
                                                     <td id = "1:30 PM3" align="right" > <span id = "1:30 PM2"></span> </td>
                                                    
                                                    </tr>
                                                    <tr id = "2:00 PM">
                                                        <th scope="row">02:00 PM</th>
                                                        <td><span id = "2:00 PM1"></span></td>
                                                        <td id = "2:00 PM3" align="right" > <span id = "2:00 PM2"></span> </td>
                                                        
                                                    </tr>
                                                    <tr class="warning" id = "2:30 PM">
                                                        <th scope="row">02:30 PM</th>
                                                        <td><span id = "2:30 PM1"></span></td>
                                                         <td id = "2:30 PM3" align="right" > <span id = "2:30 PM2"></span> </td>
                                                        
                                                    </tr>
                                                    <tr class="active" id = "3:00 PM">
                                                        <th scope="row">03:00 PM</th>
                                                        <td><span id = "3:00 PM1"></span></td>
                                                         <td id = "3:00 PM3" align="right" > <span id = "3:00 PM2"></span> </td>
                                                        
                                                    </tr>
                                                    <tr id = "3:30 PM">
                                                        <th scope="row">03:30 PM</th>
                                                        <td><span id = "3:30 PM1"></span></td>
                                                         <td id = "3:30 PM3" align="right" > <span id = "3:30 PM2"></span> </td>
                                                        
                                                    </tr>
                                                    
                                                    
                                                </tr>
                                                <tr class="active" id = "4:00 PM">
                                                    <th scope="row">04:00 PM</th>
                                                    <td><span id = "4:00 PM1"></span></td>
                                                     <td id = "4:00 PM3" align="right" > <span id = "4:00 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "4:30 PM">
                                                    <th scope="row">04:30 PM</th>
                                                    <td><span id = "4:30 PM1"></span></td>
                                                     <td id = "4:30 PM3" align="right" > <span id = "4:30 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="info" id = "5:00 PM">
                                                    <th scope="row">05:00 PM</th>
                                                    <td><span id = "5:00 PM1"></span></td>
                                                     <td id = "5:00 PM3" align="right" > <span id = "5:00 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr id = "5:30 PM">
                                                    <th scope="row">05:30 PM</th>
                                                    <td><span id = "5:30 PM1"></span></td>
                                                     <td id = "5:30 PM3" align="right" > <span id = "5:30 PM2"></span> </td>
                                                    
                                                </tr>
                                                <tr class="warning" id = "6:00 PM">
                                                    <th scope="row">06:00 PM</th>
                                                    <td><span id = "6:00 PM1"></span></td>
                                                     <td id = "6:00 PM3" align="right" > <span id = "6:00 PM2"></span> </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /example -->        
                                    
                                    
                                    
                                    
                                    <div class="input-group"> 
                                    </div><!-- /input-group -->  
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="row">
                                        
                                        <div class="col-lg-6">
                                            
                                            
                                            
                                        </div><!-- /. box -->
                                    </div><!-- /.col -->
                                    
                                    
                                    
                                </div><!-- /.row -->
                                
                                
                                
                                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            
        </main>


        <nav id="nav">
            <div class="innertube">


<TABLE   style="cursor: pointer;" ALIGN=center class="table" bgcolour=""> 
<TR >
<TD ALIGN=center onclick="prev_month()"> << </TD>
<TD COLSPAN="5" ALIGN=center ID="month_year"><B>December 2001</B></TD> 
<TD ALIGN=center onclick="next_month()"> >> </TD>
</TR>

<TR> 
<TD width= 30 ALIGN=center>Sun</TD>
<TD width= 30 ALIGN=center>Mon</TD>
<TD width= 30 ALIGN=center>Tue</TD>
<TD width= 30 ALIGN=center>Wed</TD>
<TD width= 30 ALIGN=center>Thu</TD>
<TD width= 30 ALIGN=center>Fri</TD>
<TD width= 30 ALIGN=center>Sat</TD>
</TR>
<TR> 
<TD ID="u1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="m1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f1" onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s1" onclick="select_date(this)" ALIGN=center></TD>
</TR>
<TR> 
<TD ID="u2" onclick="select_date(this)"  ALIGN=center></TD>
<TD ID="m2"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t2"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w2"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h2"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f2"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s2"  onclick="select_date(this)" ALIGN=center></TD>
</TR>
<TR> 
<TD ID="u3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="m3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f3"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s3"  onclick="select_date(this)" ALIGN=center></TD>
</TR>
<TR> 
<TD ID="u4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="m4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f4"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s4"  onclick="select_date(this)" ALIGN=center></TD>
</TR>
<TR> 
<TD ID="u5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="m5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f5"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s5"  onclick="select_date(this)" ALIGN=center></TD>
</TR>
<TR> 
<TD ID="u6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="m6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="t6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="w6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="h6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="f6"  onclick="select_date(this)" ALIGN=center></TD>
<TD ID="s6"  onclick="select_date(this)" ALIGN=center></TD>

</TR>
</TABLE>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<form name="login" action="myserver.php" method="POST">

<TABLE  ALIGN=center class="table" bgcolour=""> 
<TR >

<TD COLSPAN="7" ALIGN=center><strong>
         Admin Page

        </strong>   </TD> 
</TR>




<TR> 
<TD COLSPAN="7" ALIGN=center>
    <input class="btn btn-default" type="submit" value="Log Out"> 

</TD>
</TR>

</TABLE>

</form>


            </div>
        </nav>  


    </body>
</html>