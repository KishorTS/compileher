<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CompileHer</title>
		<script
		  src="jquery.min.js">
		</script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript">
			history.pushState(null, null, location.href);
		    window.onpopstate = function () {
		    history.go(1);
    };
		</script>
		
	<link rel="stylesheet" type="text/css" href="questionscss.css">
</head>
<body >
	<div>
		<center><b><span style="font-family: vivaldi;color: #2FEAFC;font-size: 50px;">CompileHer</span></b></center>
	</div>
	<div style="text-align: right;font-size: 30px;padding-right: 3em">Time Remaining
	</div>
	<div id="clockdiv" style="text-align: right;font-size: 30px;padding-right: 5em"></div>


	<!--questions-->

	<!-- Question1 -->
		<div id="div1">
			<xmp>
			What is the output of this program?

				#include<stdio.h>

				using namespace std;
				int main()
				{
					try
					{
						throw 20;
					}
					catch(int e)
					{
						cout<<"An exception Occured";
					}
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q1a"  value="twenty">20<br>
				<input type="radio" name ="q1a"  value="exception">An exception Occured.<br>
				<input type="radio" name ="q1a"  value="error">Error<br>
				<input type="radio" name ="q1a"  value="exception20">An exception occured 20<br><br>
				<input type="button" id="next1"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question2 -->
		<div id="div2">
			<xmp>
			What is the output of this program?

				#include<iostream>
				#include<exeception>

				using namespace std;
				class myexception: public exception
				{
					virtual const char* what() const
					{
						return "My exception"; 
					}
				}myex;

				int main()
				{
					try
					{
						throw myex;
					}
					catch(exception& e)
					{
						cout<<e.what()<<endl;
					}
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q2a"  value="Exception">Exception<br>
				<input type="radio" name ="q2a"  value="Error">Error<br>
				<input type="radio" name ="q2a"  value="My exception">My exception<br>
				<input type="radio" name ="q2a"  value="runtime error">runtime error<br><br>
				<input type="button" id="next2"  value="next>>" style="padding:15px">
			</center>
			
		</div>

		<!-- Question3 -->
		<div id="div3">
			<xmp>
			What is the output of this program?

				#include<iostream>
				#include<exception>

				using namespace std;
				int main ()
				{
					try
					{
						int* myarray=new int[1000];
						cout<<"allocated";
					}
					catch(exception& e)
					{
						cout<<"Standard exception:
					}
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q3a"  value="Allocated">Allocated<br>
				<input type="radio" name ="q3a"  value="Standard exception">Standard exception<br>
				<input type="radio" name ="q3a"  value="Depends on the memory">Depends on the memory<br>
				<input type="radio" name ="q3a"  value="error">error<br><br>
				<input type="button" id="next3"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question4 -->
		<div id="div4">
			<xmp>
			Point out the error in the program.
				#include<stdio.h>

				int main()
				{
					char ch;
					int i;
					scanf("%c",&i);
					scanf("%d",&ch);
					printf("%c %d",ch,i);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q4a"  value="wrong conversion">Error:Suspicious char to int conversion in <i>scanf()</i><br>
				<input type="radio" name ="q4a"  value="no input">Error:We may not get input for the second&nbsp;<i>scanf()</i>&nbsp;Statement<br>
				<input type="radio" name ="q4a"  value="no error">No error<br>
				<input type="radio" name ="q4a"  value="none">None of the above<br><br>
				<input type="button" id="next4"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question5 -->
		<div id="div5">
			<xmp>
			Point out the error in the program.

				#include<stdio.h>
				#include<stdlib.h>

				int main()
				{
					unsigned char;
					FILE *fp;
					fp=fopen("trial","r");
					if(!fp)
					{
						printf("unable to open file");
						exit(1);
					}
					fclose(fp);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q5a"  value="wrong char">Error in <i>&nbsp;unsigned char&nbsp;</i>statement<br>
				<input type="radio" name ="q5a"  value="Unknown File Pointer">Error:Unknown File Pointer<br>
				<input type="radio" name ="q5a"  value="no error">No error<br>
				<input type="radio" name ="q5a"  value="none">None of the above<br><br>
				<input type="button" id="next5"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question6 -->
		<div id="div6">
			<xmp>
			Point out the error/warning in the program.

				#include<stdio.h>

				int main()
				{
					unsigned char ch;
					FILE *fp;
					fp=fopen("trial","r");
					while(ch=getc(fp))!=EOF)
						printf("%c",ch);
					fclose(fp);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q6a"  value="wrong char">Error in <i>&nbsp;unsigned char&nbsp;</i>Declaration<br>
				<input type="radio" name ="q6a"  value="while error">Error:While Statement<br>
				<input type="radio" name ="q6a"  value="no error">No error<br>
				<input type="radio" name ="q6a"  value="print all">It prints all characters in file "trial"<br><br>
				<input type="button" id="next6"  value="next>>" style="padding:15px">
			</center>
		</div>
	
	<!-- Question7 -->

		<div id="div7">
			<xmp>
			Point out the error in the program.

				#include<stdio.h>

				/*Assume there is a file called 'file.c' in c:\tc directory.*/
				int main()
				{
					FILE *fp;
					fp=fopen("c:\tc\file.c","r");
					if(!fp)
						printf("Unable to open file.");

					fclose(fp);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q7a"  value="nenc">No Error No Output<br>
				<input type="radio" name ="q7a"  value="crashes">Program Crashes at run time<br>
				<input type="radio" name ="q7a"  value="cant open">Output:Unable to open file<br>
				<input type="radio" name ="q7a"  value="none">None of the above<br><br>
				<input type="button" id="next7"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question8 -->
		<div id="div8">
			<xmp>
			Point out the error in the program.

				#include<stdio.h>

				int main()
				{
					FILE *fp;
					fp=fopen("trial","r");
					fseek(fp,"20",SEEK_SET);
					fclose(fp);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q8a"  value="not recogonised">Error:Unrecogonised keyword SEEK_SET.<br>
				<input type="radio" name ="q8a"  value="fseek">Error:fseek() long offset value.<br>
				<input type="radio" name ="q8a"  value="no error">No Error<br>
				<input type="radio" name ="q8a"  value="none">None of the above<br><br>
				<input type="button" id="next8"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question9 -->
		<div id="div9">
			<xmp>
			What will be the content of 'file.c' after executing the following program?

				#include<stdio.h>

				int main()
				{
					FILE *fp1,*fp2;
					fp1=fopen("file.c","w");
					fp2=fopen("file.c","w");
					fputc('A',fp1);
					fputc('B',fp2);
					fclose(fp1);
					fclose(fp2);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q9a"  value="b">B<br><br>
				<input type="radio" name ="q9a"  value="ab">A<br>&nbsp;&nbsp;&nbsp;&nbsp;B<br><br>
				<input type="radio" name ="q9a"  value="bb">B<br>&nbsp;&nbsp;&nbsp;&nbsp;B<br><br>
				<input type="radio" name ="q9a"  value="error">Error in opening the file 'file1.c'.<br><br>
				<input type="button" id="next9"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question10 -->
		<div id="div10">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>

				int main()
				{
					float a=3.15529;
					printf("%2.1f\n"",a);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q10a"  value="3.0">3.00<br>
				<input type="radio" name ="q10a"  value="3.15">3.15<br>
				<input type="radio" name ="q10a"  value="3.2">3.2<br>
				<input type="radio" name ="q10a"  value="3">3<br><br>
				<input type="button" id="next10"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question11 -->
		<div id="div11">
			<xmp>
			What will be the output of the program if value 25 is given to scanf()?

				#include<stdio.h>

				int main()
				{
					int i;
					printf("%d\n",scanf("%d",&i));
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q11a"  value="25">25<br>
				<input type="radio" name ="q11a"  value="2">2<br>
				<input type="radio" name ="q11a"  value="1">1<br>
				<input type="radio" name ="q11a"  value="5">5<br><br>
				<input type="button" id="next11"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question12 -->
		<div id="div12">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>

				void fun(void *p);
				int i;

				int main()
				{
					void *vptr;
					vptr=&i;
					fun(vptr);
					return 0;
				}
				void fun(void *p)
				{
					int **q;
					q=(int**)&p;
					printf("%d\n",**q);
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q12a"  value="conversion">Error:cannot convert from void** to int**<br>
				<input type="radio" name ="q12a"  value="gv">Garbage Value<br>
				<input type="radio" name ="q12a"  value="0">0<br>
				<input type="radio" name ="q12a"  value="no">No Output<br><br>
				<input type="button" id="next12"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question13 -->
		<div id="div13">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>

				int main()
				{
					int k=1;
					printf("%d==1 is" "%s\n"",k,k==1?"TRUE":"FALSE");
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q13a"  value="ktrue">k = =1 is TRUE<br>
				<input type="radio" name ="q13a"  value="1true">1 = =1 is TRUE<br>
				<input type="radio" name ="q13a"  value="1false">1 = =1 is FALSE<br>
				<input type="radio" name ="q13a"  value="kfalse">k = =1 is FALSE<br><br>
				<input type="button" id="next13"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question14 -->
		<div id="div14">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>
				int *check(static int,static int);

				int main()
				{
					int *c;
					c=check(10,20);
					printf("%d\n",c);
					return 0;
				}
				int *check(static int i,static int j)
				{
					int *p,*q;
					p=&i;
					p=&j;
					if(i>=45)
						return(p);
					else
						return(q);
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q14a"  value="10">10<br>
				<input type="radio" name ="q14a"  value="20">20<br>
				<input type="radio" name ="q14a"  value="ptrconv">Error:Non-portable pointer conversion.<br>
				<input type="radio" name ="q14a"  value="static">Error:cannot use static for function parameters.<br><br>
				<input type="button" id="next14"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question15 -->
		<div id="div15">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>

				int main()
				{
					void *vp;
					char ch=74, *cp="JACK";
					int j=65;
					vp=&ch;
					printf("%c",*(char*)vp);
					vp=&j;
					printf("%c",*(int*)vp);
					vp=cp;
					printf("%s",(char*)vp+2);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q15a"  value="JCK">JCK<br>
				<input type="radio" name ="q15a"  value="J65K">J65K<br>
				<input type="radio" name ="q15a"  value="JAK">JAK<br>
				<input type="radio" name ="q15a"  value="JACK">JACK<br><br>
				<input type="button" id="next15"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question16 -->
		<div id="div16">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>

				int main()
				{
					FILE *ptr;
					char i;
					ptr=fopen("myfile.c","r");
					while((i=fgetc(ptr))!=NULL)
						printf("%c",i);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q16a"  value="printcontent">Prints the content of file 'mylife.c'.<br>
				<input type="radio" name ="q16a"  value="printcontentnull">Prints the content of file 'myfile.c' upto NULL character.<br>
				<input type="radio" name ="q16a"  value="loop">Infinite loop.<br>
				<input type="radio" name ="q16a"  value="error">Error in program.<br><br>
				<input type="button" id="next16"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question17 -->
		<div id="div17">
			<xmp>
			What will be the output of the program?

				#include<stdio.h>
				char *str="char *str =%c%s%c; main(){ printf(str,34,str,34);}";

				int main()
				{
					printf(str,34,str,34);
					return 0;
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q17a"  value="same">char *str="char *str =%c%s%c; main(){ printf(str,34,str,34);}";<br>
				<input type="radio" name ="q17a"  value="reduced">char *str =%c%s%c; main(){ printf(str,34,str,34);}<br>
				<input type="radio" name ="q17a"  value="no"> No Output.<br>
				<input type="radio" name ="q17a"  value="error">Error in program.<br><br>
				<input type="button" id="next17"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question18 -->
		<div id="div18">
			<xmp>
			Does both the loops in the following programs print the correct string lenght?

				#include<stdio.h>

				main()
				{
					int i;
					char s[]="hello";

					for(i=0;s[i]; ++i);
						printf("%d ",i);

					i=0;
					while(s[i++]);
						printf("%d",i);
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q18a"  value="yes">Yes,both the loops prints the correct length.<br>
				<input type="radio" name ="q18a"  value="onlyfor">Only FOR loops prints the correct length.<br>
				<input type="radio" name ="q18a"  value="onlywhile">Only WHILE loops prints the correct length.<br>
				<input type="radio" name ="q18a"  value="error">Compile Error in program.<br><br>
				<input type="button" id="next18"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question19 -->
		<div id="div19">
			<xmp>
			To use the function tolower() which of the following header file should be included?
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q19a"  value="string">string.h<br>
				<input type="radio" name ="q19a"  value="conio">conio.h<br>
				<input type="radio" name ="q19a"  value="ctype">ctype.h<br>
				<input type="radio" name ="q19a"  value="no">Dont need any header file.<br><br>
				<input type="button" id="next19"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question20 -->
		<div id="div20">
			<xmp>
			What is function Overloading?
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q20a"  value="calling">Calling a function from another function.<br>
				<input type="radio" name ="q20a"  value="samename">Having more than one function with same name.<br>
				<input type="radio" name ="q20a"  value="callitself">calling a function from itself<br>
				<input type="radio" name ="q20a"  value="no">There is no such term in c/c++<br><br>
				
				<input type="button" id="next20" name="submit" style="padding:15px" value="submit" 		>
			</center>
		</div>

		<div id="div21">
			<center><b style="font-family: vivaldi;font-size: 50px">Thank you for your participation.</b></center>
		</div><p id="finish" style="color: #181C28">0</p>

		<script type="text/javascript">


		// 10 minutes from now
			var time_in_minutes = 20;
			var current_time = Date.parse(new Date());
			var deadline = new Date(current_time + time_in_minutes*60*1000);
			setTimeout(function(){
				debugger;
				alert("Sesion ended"); 
				var a=document.getElementById('finish').innerHTML;
				$.post("add.php", { name: a} );
				window.location="index.php"
			}, 1200000);


			function time_remaining(endtime){
				var t = Date.parse(endtime) - Date.parse(new Date());
				var seconds = Math.floor( (t/1000) % 60 );
				var minutes = Math.floor( (t/1000/60) % 60 );
				var hours = Math.floor( (t/(1000*60*60)) % 24 );
				var days = Math.floor( t/(1000*60*60*24) );
				return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
			}
			function run_clock(id,endtime){
				var clock = document.getElementById(id);
				function update_clock(){
					var t = time_remaining(endtime);
					clock.innerHTML = t.minutes+':'+t.seconds;
					if(t.total<=0){ clearInterval(timeinterval); }
				}
				update_clock(); // run function once at first to avoid delay
				var timeinterval = setInterval(update_clock,1000);
			}
			run_clock('clockdiv',deadline);
		</script>

</body>
</html>

