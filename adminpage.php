<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
	<head>
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
			background: #C0C0C0	; 		
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

		
	<script type="text/javascript"  src="test.js" >

</script>
	
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
                                                    <th>Event Name</th>
                                                    <th>Accept/Reject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="active">
                                                    <th scope="row">06:00 AM</th>
                                                    <td> </td>
                                                     <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">06:30 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                    
                                                </tr>
                                                <tr class="success">
                                                    <th scope="row">07:00 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">07:30 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row">08:00 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">08:30 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="warning">
                                                    <th scope="row">09:00 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">09:30 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row">11:00 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                
                                                <tr >
                                                    <th scope="row">11:30 AM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row">12:00 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="success">
                                                    <th scope="row">12:30 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row">01:00 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="info">
                                                    <th scope="row">01:30 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                    </tr class="active">
                                                    <tr>
                                                        <th scope="row">02:00 PM</th>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <th scope="row">02:30 PM</th>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr class="active">
                                                        <th scope="row">03:00 PM</th>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr >
                                                        <th scope="row">03:30 PM</th>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                    
                                                    
                                                </tr>
                                                <tr class="active">
                                                    <th scope="row">04:00 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">04:30 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="info">
                                                    <th scope="row">05:00 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">05:30 PM</th>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr class="warning">
                                                    <th scope="row">06:00 PM</th>
                                                    <td> </td>
                                                    <td> </td>
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