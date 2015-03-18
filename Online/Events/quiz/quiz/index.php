<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VSQ | BVPIEEE</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/body.css" />
    <link rel="stylesheet" type="text/css" href="css/slideshow.css" />
    
    <script src="js/snap.svg-min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<style>img{height:300px;}p{top:-170px;position:relative;}input[type="text"]{position:relative;top:-170px;}</style>	
	<!--<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>-->
</head>
<body>
	<div class="container">
		<div id="slideshow" class="slideshow">
		<div id="wrapper">
				<div id="myTimer"></div>
				<button type="button" id="myBtn" class="btnDisable" disabled onclick="parent.location='2nd_homepage/home_page.html'">Tick Tock</button>
		</div>
		<script>
			var sec = 1800;
			var myTimer = document.getElementById('myTimer');
			var myBtn = document.getElementById('myBtn');
			window.onload = countDown;
			function countDown() {
				if (sec < 10) {
					myTimer.innerHTML = "0" + sec;
				} else {
					myTimer.innerHTML = sec;
				}
				if (sec <= 0) {
					$("#myBtn").removeAttr("disabled");
					$("#myBtn").removeClass().addClass("btnEnable");
					$("#myTimer").fadeTo(2500, 0);
					 
					myBtn.innerHTML = "Skip";
				return;
			}
			sec -= 1;
			window.setTimeout(countDown, 1000);
		}</script>
		<form action="qqw.php" method="post">
			<ul>
                <li>
                    <div class="slide">
                        <div class="codrops-links">
                            <a class="codrops-icon codrops-icon-prev" href="http://bvpieee.com/iVSQ/1.php"><span>Home Page</span></a>
                            <a href="http://bvpieee.com/"><span>BVPIEEE</span></a>
                        </div>
						<br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                          </p>     
                          
                            <span style="font-size:30px;">  Which of the following process scheduling algorithm may lead to starvation?</span>
                      <br />    <br />    <br />    <br />    <br />    
                       
                        <select name="1" style="top:-70px;">
    					<option value="NILL"></option>
						<option value="A">FIFO</option>
    					<option value="B">Round Robin</option>
                        <option value="C">Shortest Job Next</option>
    					<option value="D">None of the above</option>
    				    </select>
                        
                        
                  
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                      <br/> 
                            <br />
                            <span style="font-size:25px;"> A scheduling algorithm assigns priority proportional to the waiting time of a process. Every process starts with priority zero (the lowest priority). The scheduler re-evaluates the process priorities every T time units and decides the next process to schedule. Which one of the following is TRUE if the processes have no I/O operations and all arrive at time zero?
                            </span>
                          </p>  
                          <select name="2">
    					<option value="NILL"></option>
						<option value="A">This algorithm is equivalent to the first-come-first-serve algorithm</option>
    					<option value="B">This algorithm is equivalent to the round-robin algorithm.</option>
                        <option value="C">This algorithm is equivalent to the shortest-job-first algorithm.</option>
    					<option value="D">This algorithm is equivalent to the shortest-remaining-time-first algorithm</option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                            
	 <span style="font-size:30px;">A process executes the following code <br />
     <code>for (i = 0; i< n; i++) fork(); <br />The total number of child processes created is ?</code>
</span>
                          </p>  
                          <select name="3">
    					<option value="NILL"></option>
						<option value="A">n</option>
    					<option value="B">2^n - 1 </option>
                        <option value="C">2^n</option>
    					<option value="D">	2^(n+1) - 1 </option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                       <span style="color:white; font-size: 20px;">
                            Group 1 contains some CPU scheduling algorithms and Group 2 contains some applications.<br /> Match entries in Group 1 to entries in Group 2.  <br />
                            <br /><br /><center><table>
                            <tr>
                            <td>Group I</td>   <td></td>
                            <td>Group II</td>
                            </tr>
                            <tr>
                            <td>Gang Scheduling              </td>   <td>    </td>
                            <td>Guaranteed Scheduling</td>
                            </tr>
                            <tr>
                            <td>Rate Monotonic Scheduling    </td>
                            <td>    </td>
                            <td>Real-time Scheduling</td>
                            </tr>
                            <tr>
                            <td>Fair Share Scheduling      </td>   <td></td>
                            <td>Thread Scheduling </td>
                            </tr>
                            </table></center>

                      <br /><br /> 
                          <select name="4" style="top:-36px;">
    					<option value="NILL"></option>
						<option value="A">P – 3 Q – 2 R – 1</option>
    					<option value="B">P – 1 Q – 2 R – 3 </option>
                        <option value="C">P – 2 Q – 3 R – 1</option>
    					<option value="D">P – 1 Q – 3 R – 2 </option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
						<br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                            <br />
                            <span style="font-size:30px;">Given the basic ER and relational models, which of the following is INCORRECT? </span><br /><br />
                         </p>    <select name="5">
    					<option value="NILL"></option>
						<option value="A">An attribute of an entity can have more than one value</option>
    					<option value="B">An attribute of an entity can be composite</option>
                        <option value="C">In a row of a relational table, an attribute can have more than one value</option>
    					<option value="D">In a row of a relational table, an attribute can have exactly one value or a NULL value </option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                             <span style="font-size:20px;">Let E1 and E2 be two entities in an E/R diagram with simple single-valued attributes. R1 and R2 are two relationships between E1 and E2, where R1 is one-to-many and R2 is many-to-many. R1 and R2 do not have any attributes of their own. 
							 What is the minimum number of tables required to represent this situation in the relational model? </span><br /><br />
                         </p>    <select name="6">
    					<option value="NILL"></option>
						<option value="A">2</option>
    					<option value="B">3</option>
                        <option value="C">4</option>
    					<option value="D">5</option>
    				    </select>
                    </div>
                </li>
                 <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                       <span style="font-size:30px;">Which of the following scenarios may lead to an irrecoverable error in a database system ?  </span><br /><br />
                         </p>    <select name="7">
    					<option value="NILL"></option>
						<option value="A">A transaction writes a data item after it is read by an uncommitted transaction</option>
    					<option value="B">A transaction reads a data item after it is read by an uncommitted transaction</option>
                        <option value="C">A transaction reads a data item after it is written by a committed transaction</option>
    					<option value="D">A transaction reads a data item after it is written by an uncommitted transaction</option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
 
						  <span style="font-size:30px;">A clustering index is defined on the fields which are of type </span><br /><br />
                         </p>    <select name="8">
    					<option value="NILL"></option>
						<option value="A">non-key and ordering</option>
    					<option value="B">non-key and non-ordering</option>
                        <option value="C">key and ordering </option>
    					<option value="D">key and non-ordering</option>
    				    </select>
                        
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                              <span style="font-size:30px;">Find output:<br><br></span><span style="font-size:15px; align: left !important;">
								int main()<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	unsigned int i = 65535; /* Assume 2 byte integer*/<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	while(i++ != 0)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		printf("%d",++i);<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	printf("\n");<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	return 0;<br>
								}<br>
						</span>
						
                         </p>    <select name="9" style="top:-110px;">
    					<option value="NILL"></option>
						<option value="A">0 1 2 .... 65535</option>
    					<option value="B">0 1 2 ...32767-32766-....1 0</option>
                        <option value="C">No output </option>
    					<option value="D">Infinite loop</option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
						 <span style="font-size:30px;">Find output:<br><br>
								int main()<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	printf("%x\n", -2<<2);<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	return 0;<br>
								}<br>

						</span><br /><br />
                         </p>    <select name="10">
    					<option value="NILL"></option>
						<option value="A">ffff</option>
    					<option value="B">0</option>
                        <option value="C"> fff8</option>
    					<option value="D">Error</option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                             <span style="font-size:20px; font-style:none !important;">Find output:<br><br>
								int main()	<br>
								{	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	int fun();	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;		int i;	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	i = fun();	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	printf("%d\n", i);	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	return 0;	<br>
								}	<br>
								int fun()	<br>
								{	<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	_AX = 1990;	<br>
								}	<br>
								<br>

						</span><br /><br /><br /><br />
						
                         </p><br><p></p>    <select name="11">
    					
						<option value="NILL"></option>
						<option value="A">Garbage value</option>
    					<option value="B">0 (Zero)</option>
                        <option value="C"> 1990</option>
    					<option value="D">No output</option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                          <span style="font-size:30px;">What will be the output of the C#.NET code snippet given below?<br><br>
								int i = 2, j = i;<br>
								if (Convert.ToBoolean((i | j & 5) & (j - 25 * 1)))<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	Console.WriteLine(1); <br>
								else<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	Console.WriteLine(0);<br>


						</span><br /><br />
                         </p>    <select name="12">
    					<option value="NILL"></option>
						<option value="A">0</option>
    					<option value="B">1</option>
                        <option value="C"> Compile Error</option>
    					<option value="D">Run time Error</option>
    				    </select>
                        
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                              <span style="color:white; font-size: 20px;">
                            Which of the following statements are correct?
                            <center><table style="margin-top:-22%">
                            <tr>
                            <td>1.	An argument passed to a ref parameter need not be initialized first</td> 
                         
                            </tr>
                            <tr>
                            
                            <td>2.	Variables passed as out arguments need to be initialized prior to being passed.</td>
                            </tr>
                            <tr>
                         
                            <td>3.	Argument that uses params keyword must be the last argument of variable argument list of a method.</td>
                            </tr>
                            <tr>
                        
                            <td>4.	Pass by reference eliminates the overhead of copying large data items. </td>
                            </tr>
							<tr>
                        
                            <td>5.	To use a ref parameter only the calling method must explicitly use the refkeyword.</td>
                            </tr>
                            </table></center>

                      <br /><br /> 
					  </span>
                          <select name="13" style="margin-top:20%;">
						  <option value="NILL"></option>
    					<option value="A">A.
1, 2
</option>
    					<option value="B">B.
2, 3
 </option>
                        <option value="C">C.
3, 4
</option>
    					<option value="D">D.
4, 5
 </option>
    				    </select>
                    </div>
                </li>
                <li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <p style='-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;' 
 unselectable='on'
 onselectstart='return false;' 
 onmousedown='return false;'>
                            <span style="font-size:30px;">What will be the output of the program?<br><br>
								#include<stdio.h><br>
								int main()<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	int a=0, b=1, c=3;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	*((a) ? &b : &a) = a ? b : c;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	printf("%d, %d, %d\n", a, b, c);<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	return 0;<br>
								}
								<br>


														</span><br /><br />
														 </p>    <select name="14">
														<option value="A">A.
								0, 1, 3
								</option>
														<option value="B">B.
								1, 2, 3
								</option>
														<option value="C">C.
								3, 1, 3
								</option>
														<option value="D">D.
								1, 3, 1
								</option>
    				    </select>
                    </div>
                </li>
				<li>
                    <div class="slide">
                        <br><br><br><br><br><br><br><br><br>
                        <span style="font-size:30px;">What will be the output of the program ?<br><br>
								#include<stdio.h><br>

								void fun(void *p);<br>
								int i;<br>

								int main()<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	void *vptr;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	vptr = &i;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	fun(vptr);<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	return 0;<br>
								}
								void fun(void *p)<br>
								{
									&nbsp;&nbsp;&nbsp;&nbsp;int **q;<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; q = (int**)&p;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;	printf("%d\n", **q);<br>
								}<br>


						</span><br /><br />
                         </p>    <select name="15">
						 <option value="NILL"></option>
    					<option value="A">0</option>
    					<option value="B">1</option>
                        <option value="C"> Compile Error</option>
    					<option value="D">Run time Error</option>
    				    </select>
                        
                    </div>
                </li>

                    
				
				
				     <li>
                    <div class="slide">
                        <div class="codrops-links">
                            <a class="codrops-icon codrops-icon-prev" href="http://bvpieee.com/iVSQ/1.php"><span>Homepage</span></a>
                            <a class="codrops-icon codrops-icon-drop" href="http://bvpieee.com/"><span>BVPIEEE</span></a>
                        </div>
                        <div class="related">
                                <input type="submit" value="Submit" class="but_ton">
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
		</div>
		
    </div><!-- /container -->
    <script src="js/classie.js"></script>
    <script src="js/sliderFx.js"></script>
    <script>
        (function () {
            new SliderFx(document.getElementById('slideshow'), {
                easing: 'cubic-bezier(.8,0,.2,1)'
            });
        })();
    </script>

	
</body>
</html>