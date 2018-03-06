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
			What will be the output of the following statements? 

			int a[2][2] = { 3,2,5,4 }; 
			printf("%d",*(*(*(a)))); 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q1a"  value="error">error<br>
				<input type="radio" name ="q1a"  value="3">3<br>
				<input type="radio" name ="q1a"  value="garbage value">garbage value<br>
				<input type="radio" name ="q1a"  value="2">2<br><br>
				<input type="button" id="next1"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question2 -->
		<div id="div2">
			<xmp>
			void main() 
			{ 
				int const *p=5; 
				printf("%d",++(*p)); 
			} 

			what is the output? 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q2a"  value="6">6<br>
				<input type="radio" name ="q2a"  value="5">5<br>
				<input type="radio" name ="q2a"  value="compile error">compile error<br>
				<input type="radio" name ="q2a"  value="runtime error">runtime error<br><br>
				<input type="button" id="next2"  value="next>>" style="padding:15px">
			</center>
			
		</div>

		<!-- Question3 -->
		<div id="div3">
			<xmp>
			 Which of the following gives the memory address of a variable pointed to by pointer a? 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q3a"  value="a">a;<br>
				<input type="radio" name ="q3a"  value="*a">*a<br>
				<input type="radio" name ="q3a"  value="&a">&a<br>
				<input type="radio" name ="q3a"  value="address(a)">address(a);<br><br>
				<input type="button" id="next3"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question4 -->
		<div id="div4">
			<xmp>
			what is the output of the following program?
			#include<stdio.h> 
			void main() 
			{ 
				int huge *a=(int huge *)0x59990005; 
				int huge *b=(int huge *)0x59980015; 
				if(a==b) 
					printf("Rajalakshmi Institute of Technology"); 
				else 
					printf("CSE"); 
				getch(); 
			} 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q4a"  value="rit">Rajalakshmi Institute of Technology<br>
				<input type="radio" name ="q4a"  value="cse">CSE<br>
				<input type="radio" name ="q4a"  value="csecse">csecse<br>
				<input type="radio" name ="q4a"  value="none">None of the above<br><br>
				<input type="button" id="next4"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question5 -->
		<div id="div5">
			<xmp>
			What would be the output of the follwing program ?

			#include<stdio.h> 
			#include<string.h> 
			void main() 
			{  
				int register a; 
				scanf("%d",&a); 
				printf(%d",a); 
				getch(); 
			} 
				//if a=25 
 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q5a"  value="25">25<br>
				<input type="radio" name ="q5a"  value="0">0<br>
				<input type="radio" name ="q5a"  value="compilation error">compilation error<br>
				<input type="radio" name ="q5a"  value="none">None of the above<br><br>
				<input type="button" id="next5"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question6 -->
		<div id="div6">
			<xmp>
			What would be the output of the following program?

				#include<stdio.h> 
				#include<string.h> 

				void main() 
				{ 
					int a,b,c,d; 
					char *p=(char*)0; 
					int *q=(int*q)0; 
					float *r=(float*)0; 
					double *s=0; 
					a=(int)(p+1); 
					b=(int)(p+1); 
					c=(int)(p+1); 
					d=(int)(p+1); 
					printf("%d%d%d%d",a,b,c,d); 
				} 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q6a"  value="2222">2222<br>
				<input type="radio" name ="q6a"  value="1248">1248<br>
				<input type="radio" name ="q6a"  value="1224">1224<br>
				<input type="radio" name ="q6a"  value="none">None of the above<br><br>
				<input type="button" id="next6"  value="next>>" style="padding:15px">
			</center>
		</div>
	
	<!-- Question7 -->

		<div id="div7">
			<xmp>
			What will be output of following program? 

				#include<stdio.h> 
				#include<conio.h> 

				void main() 
				{  
		 			void (*p)();   
		 			int (*q)();   
		 			int (*r)();   
		 			p = clrscr;   
		 			q = getch;   
		 			r = puts;  (*p)();  
		 			(*r)("Compileher");  
		 			(*q)(); 
	 			} 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q7a"  value="Null">Null<br>
				<input type="radio" name ="q7a"  value="Compileher">Compileher<br>
				<input type="radio" name ="q7a"  value="compilation error">compilation error<br>
				<input type="radio" name ="q7a"  value="none">None of the above<br><br>
				<input type="button" id="next7"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question8 -->
		<div id="div8">
			<xmp>
			What will be output of following program? 

				#include<stdio.h> 
				#include<string.h> 

				void main()
				{ 
					int a = 5,b = 10,c; 
					int *p = &a,*q = &b; 
					c = p - q; 
					printf("%d" , c); 
					getch(); 
				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q8a"  value="1">1<br>
				<input type="radio" name ="q8a"  value="5">5<br>
				<input type="radio" name ="q8a"  value="compilation error">compilation error<br>
				<input type="radio" name ="q8a"  value="none">None of the above<br><br>
				<input type="button" id="next8"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question9 -->
		<div id="div9">
			<xmp>
			What will be output of following program? 
			main() 
			{ 
				printf("%d, %d", sizeof('c'), sizeof(100)); 
			} 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q9a"  value="4,100">4,100<br><br>
				<input type="radio" name ="q9a"  value="2,100">2,100<br><br>
				<input type="radio" name ="q9a"  value="2,2">2,2<br><br>
				<input type="radio" name ="q9a"  value="4,4">4,4<br><br>
				<input type="button" id="next9"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question10 -->
		<div id="div10">
			<xmp>
			What will be the output of the following statement ?  
			/* /* printf("hello"); */ */
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q10a"  value="hello1">hello<br>
				<input type="radio" name ="q10a"  value="no output">no output<br>
				<input type="radio" name ="q10a"  value="error">error<br>
				<input type="radio" name ="q10a"  value="hello">"hello"<br><br>
				<input type="button" id="next10"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question11 -->
		<div id="div11">
			<xmp>
			  Point out the error in the program 

				#include<stdio.h> 

				int f(int a) 
				{   
					a > 20? return(10): return(20); 
				} 
				int main() 
				{     
					int f(int);     
					int b;     
					b = f(20);     
					printf("%d\n", b);     
					return 0; 
				} 
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q11a"  value="errorpro">Error:prototype declaration <br>
				<input type="radio" name ="q11a"  value="no error">No error<br>
				<input type="radio" name ="q11a"  value="error">Error:return statement cannot be used with conditional opterators<br>
				<input type="radio" name ="q11a"  value="none">None of above<br><br>
				<input type="button" id="next11"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question12 -->
		<div id="div12">
			<xmp>
			Print out the error in the following program.

				#include<stdio.h>
				struct emp
				{
				char name[20];
				int age;

				};
				int main()

				{
				emp int xx;
				int a;

				printf("%d\n", &a);
				return 0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q12a"  value="printf">Error: in printf<br>
				<input type="radio" name ="q12a"  value="emp">Error: in emp int xx;<br>
				<input type="radio" name ="q12a"  value="no">No error<br>
				<input type="radio" name ="q12a"  value="none">None of these<br><br>
				<input type="button" id="next12"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question13 -->
		<div id="div13">
			<xmp>
			Which of the following statements are correct about the program below?

				#include<stdio.h>

				int main()
				{
				char str[20], *s;

				printf("Enter a string\n");
				scanf("%s", str);
				s=str;
				while(*s != '\0')
				{

				if(*s >= 97 && *s <= 122)
				*s = *s-32;
				s++;
				}
				printf("%s",str);

				return 0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q13a"  value="toint">A.The code converts a string in to an integer<br>
				<input type="radio" name ="q13a"  value="toupper">The code converts lower case character to upper case<br>
				<input type="radio" name ="q13a"  value="tolower">The code converts upper case character to lower case<br>
				<input type="radio" name ="q13a"  value="error">Error in code<br><br>
				<input type="button" id="next13"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question14 -->
		<div id="div14">
			<xmp>
			Which of the following statement is correct?

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q14a"  value="less">strcmp(s1, s2) returns a number less than 0 if s1>s2<br>
				<input type="radio" name ="q14a"  value="greater">strcmp(s1, s2) returns a number greater than 0 if s1 is less than s2. <br>
				<input type="radio" name ="q14a"  value="zero">strcmp(s1, s2) returns 0 if s1==s2<br>
				<input type="radio" name ="q14a"  value="one">strcmp(s1, s2) returns 1 if s1==s2<br><br>
				<input type="button" id="next14"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question15 -->
		<div id="div15">
			<xmp>
			Point out the error in the program?

				#include<stdio.h>
				#include<stdlib.h>

				int main()
				{
				unsigned char;

				FILE *fp;
				fp=fopen("trial", "r");

				if(!fp)
				{
				printf("Unable to open file");

				exit(1);
				}
				fclose(fp);
				return 0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q15a"  value="unsigned char">Error: in unsigned char statement<br>
				<input type="radio" name ="q15a"  value="fptr">Error: unknown file pointer<br>
				<input type="radio" name ="q15a"  value="no">No error<br>
				<input type="radio" name ="q15a"  value="none">None of above<br><br>
				<input type="button" id="next15"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question16 -->
		<div id="div16">
			<xmp>
			Point out the error/warning in the program?

				#include<stdio.h>

				int main()
				{
				unsigned char ch;

				FILE *fp;
				fp=fopen("trial", "r");
				while((ch = getc(fp))!=EOF)
				printf("%c", ch);
				fclose(fp);

				return 0;
				}


			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q16a"  value="chara">Error: in unsigned char declaration<br>
				<input type="radio" name ="q16a"  value="while">Error: while statement<br>
				<input type="radio" name ="q16a"  value="no">No error<br>
				<input type="radio" name ="q16a"  value="all">It prints all characters in file "trial"<br><br>
				<input type="button" id="next16"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question17 -->
		<div id="div17">
			<xmp>
			Which of the following statements are correct about the program?

				#include<stdio.h>

				int main()
				{
				unsigned int num;
				int i;
				scanf("%u", &num);

				for(i=0; i<16; i++)
				{
				printf("%d", (num<<i &
				1<<15)?1:0);
				}

				return 0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q17a"  value="even">It prints all even bits from num<br>
				<input type="radio" name ="q17a"  value="odd">It prints all odd bits from num<br>
				<input type="radio" name ="q17a"  value="binary"> It prints binary equivalent num<br>
				<input type="radio" name ="q17a"  value="error">Error<br><br>
				<input type="button" id="next17"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question18 -->
		<div id="div18">
			<xmp>
			Point out the error in the program.

				#include<stdio.h>

				#define MAX 128

				int main()
				{
				char mybuf[] = "India";

				char yourbuf[] = "BIX";
				char const *ptr = mybuf;
				*ptr = 'a';
				ptr = yourbuf;
				return 0;

				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q18a"  value="cannot convert">Error: cannot convert ptr const value<br>
				<input type="radio" name ="q18a"  value="ptr">Error: unknown pointer conversion<br>
				<input type="radio" name ="q18a"  value="no">No error<br>
				<input type="radio" name ="q18a"  value="none">None of above<br><br>
				<input type="button" id="next18"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question19 -->
		<div id="div19">
			<xmp>
			Point out the error in the following program.

				#include<stdio.h>
				#include<stdarg.h>
				fun(...);

				int main()

				{
				fun(3, 7, -11.2, 0.66);
				return 0;
				}
				fun(...)

				{
				va_list ptr;
				int num;
				va_start(ptr, n);
				num = va_arg(ptr, int);

				printf("%d", num);
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q19a"  value="return">Error: fun() needs return type<br>
				<input type="radio" name ="q19a"  value="ptr">Error: ptr Lvalue required<br>
				<input type="radio" name ="q19a"  value="invalid">Error: Invalid declaration of fun(...)<br>
				<input type="radio" name ="q19a"  value="no">No error<br><br>
				<input type="button" id="next19"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question20 -->
		<div id="div20">
			<xmp>
			Which of the following correctly shows the hierarchy of arithmetic operations in C?
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q20a"  value="one"> / + * -<br>
				<input type="radio" name ="q20a"  value="two">* - / +<br>
				<input type="radio" name ="q20a"  value="three">+ - / *<br>
				<input type="radio" name ="q20a"  value="four">/ * + -<br><br>
				
				<input type="button" id="next20" name="submit" style="padding:15px" value="submit">
			</center>
		</div>

		<div id="div21">
			<center><b style="font-family: vivaldi;font-size: 50px">Thank you for your participation</b></center>
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

