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
	<!-- <div style="text-align: right;font-size: 30px;padding-right: 3em">Time Remaining
	</div>
	<div id="clockdiv" style="text-align: right;font-size: 30px;padding-right: 5em"></div> -->


	<!--questions-->

	<!-- Question1 -->
		<div id="div1">
			<xmp>
			What is the output of this program?

				#include <iostream.h>

				usingnamespacestd;
				int array1[]={1200, 200, 2300, 1230, 1543};
				int array2[]={12, 14, 16, 18, 20};	int temp, result =0;
				intmain()
				{
					for(temp =0; temp <5; temp++);
					{
					    result += array1[temp];
					}

					for(temp =0; temp <4; temp++)
					{
					    result += array2[temp];
					}	cout<< result;
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q1a"  value="1280">1280<br>
				<input type="radio" name ="q1a"  value="6533">6533<br>
				<input type="radio" name ="q1a"  value="1200">1200<br>
				<input type="radio" name ="q1a"  value="1543">1543<br><br>
				<input type="button" id="next1"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question2 -->
		<div id="div2">
			<xmp>
			Find the error.

				#include <iostream.h>

				usingnamespacestd;
				intmain()
				{
					int a =5, b =10, c =15;	
					intarr[3]={&a, &b, &c};
					cout<<*arr[*arr[1]-8];
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q2a"  value="it returns address of a">it returns address of a<br>
				<input type="radio" name ="q2a"  value="it returns address of b">it returns address of b<br>
				<input type="radio" name ="q2a"  value="garbage value">garbage value<br>
				<input type="radio" name ="q2a"  value="compile time error">compile time error<br><br>
				<input type="button" id="next2"  value="next>>" style="padding:15px">
			</center>
			
		</div>


		<!-- Question3 -->
		<div id="div3">
			<xmp>
			What is the output of this program?

				#include <iostream.h>

				usingnamespacestd;
				intmain()
				{
					intarray[]={10, 20, 30};
					cout<<-3[array];
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q3a"  value="-10">-10<br>
				<input type="radio" name ="q3a"  value="-30">-30<br>
				<input type="radio" name ="q3a"  value="compile time error">compile time error<br>
				<input type="radio" name ="q3a"  value="garbage value">garbage value<br><br>
				<input type="button" id="next3"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question4 -->
		<div id="div4">
			<xmp>
				What is the output of this program?

					#include <iostream.h>

					usingnamespaces std;
					intmain()
					{
						int a =5, b =10, c =15;
						int*arr[]={&a, &b, &c};
						cout<<arr[1];
						return0;
					}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q4a"  value="it returns address of b">It returns address of b<br>
				<input type="radio" name ="q4a"  value="10">10<br>
				<input type="radio" name ="q4a"  value="syntax error">Syntax error<br>
				<input type="radio" name ="q4a"  value="it will return some random number"<br>It will return some random number<br>
				<input type="button" id="next4"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question5 -->
		<div id="div5">
			<xmp>
				What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				intmain()
				{
					chararr;
					inti;
					for(i=0;i<10;i++)
					*(arr+i)=65+i;
					*(arr+i)='\0';
					cout<<arr;
					return(0);
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q5a"  value="Run Time Error">Run Time Error<br>
				<input type="radio" name ="q5a"  value="cannot point to the index">cannot point to the index<br>
				<input type="radio" name ="q5a"  value="pointer undeclared">pointer undeclared<br>
				<input type="radio" name ="q5a"  value="None of the mentioned">None of the mentioned<br><br>
				<input type="button" id="next5"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question6 -->
		<div id="div6">
			<xmp>
				What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				int main ()
				{
					int length;
					char* buffer;
					ifstream is;
					is.open("sample.txt", ios::binary);
					is.seekg(0, ios::end);
					        length =is.tellg();
					is.seekg(0, ios::beg);
					        buffer =newchar[length];
					is.read(buffer, length);
					is.close();
					cout.write(buffer, length);
					delete[] buffer;
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q6a"  value="This is sample">This is sample<br>
				<input type="radio" name ="q6a"  value="sample">sample<br>
				<input type="radio" name ="q6a"  value="undefined function used">undefined function used<br>
				<input type="radio" name ="q6a"  value="Runtime error">Runtime error<br><br>
				<input type="button" id="next6"  value="next>>" style="padding:15px">
			</center>
		</div>
	
	<!-- Question7 -->

		<div id="div7">
			<xmp>
				What is the output of this program?

					#include<iostream>
					#include <fstream>

					usingnamespacestd;
					float main ()
					{
						ofstreamoutfile("test.txt");
						for(int n =0; n <100; n++)
						{
							outfile<< n;
							outfile.flush();
						}
						cout<<"Done";
						outfile.close();
						return0;
					}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q7a"  value="Done">Done<br>
				<input type="radio" name ="q7a"  value="Compile Time Error">Compile Time Error<br>
				<input type="radio" name ="q7a"  value="Runtime error">Runtime error<br>
				<input type="radio" name ="q7a"  value="None of the mentioned">None of the mentioned<br><br>
				<input type="button" id="next7"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question8 -->
		<div id="div8">
			<xmp>
			By seeing which operator thus this program stops getting the input?

					#include <iostream>
					#include <fstream>

					usingnamespacestd;
					int main ()
					{
						charch;
						streambuf* p;
						ofstreamos("test.txt");
						pbuf=os.rdbuf();
						do{
							ch=cin.get();
							p ->sputc(ch);
						}
						os.clo¬¬¬¬se();
						return0;
					}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q8a"  value="dot operator">dot operator<br>
				<input type="radio" name ="q8a"  value="insertion operator">insertion operator<br>
				<input type="radio" name ="q8a"  value="syntax error">syntax error<br>
				<input type="radio" name ="q8a"  value="none of the mentioned">none of the mentioned<br><br>
				<input type="button" id="next8"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question9 -->
		<div id="div9">
			<xmp>
			What is the output of this program?

				#include <iostream>

				Usingnamespacestd;
				#define MIN(a,b) (((a)<(b)) ? a : b)
				int main ()
				{
					floati, j;
					i=100.1;
					j =100.01;
					cout<<"The minimum is "<<MIN(i, k)<<endl;
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q9a"  value="100.01">100.01<br><br>
				<input type="radio" name ="q9a"  value="undefined variable">undefined variable<br><br>
				<input type="radio" name ="q9a"  value="compile time error">compile time error<br><br>
				<input type="radio" name ="q9a"  value="none of the mentioned">none of the mentioned<br><br>
				<input type="button" id="next9"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question10 -->
		<div id="div10">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				#define SquareOf(x) x * x
				intmain()
				{
					int x;
					cout<<SquareOf(x +4);
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q10a"  value="16">16<br>
				<input type="radio" name ="q10a"  value="64">64<br>
				<input type="radio" name ="q10a"  value="compile time error">compile time error<br>
				<input type="radio" name ="q10a"  value="none of the mentioned">none of the mentioned<br><br>
				<input type="button" id="next10"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question11 -->
		<div id="div11">
			<xmp>
				What is the output of this program?

					#include <iostream>
					#include <string>

					usingnamespacestd;
					int main ()
					{
				        string name (“Jobs”);
				        string family (‘Steve’);
				        name +=" Apple ";
				        name += family;
					    name +='\n';
						cout<< name;
						return0;
					}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q11a"  value="Steve Jobs">Steve Jobs<br>
				<input type="radio" name ="q11a"  value="Apple Steve">Apple Steve<br>
				<input type="radio" name ="q11a"  value="Jobs Apple">Jobs Apple <br>
				<input type="radio" name ="q11a"  value="None of the mentioned">None of the mentioned<br><br>
				<input type="button" id="next11"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question12 -->
		<div id="div12">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				intmain()
				{
					int age =-6;
					try
					{
						if(age <0)
						{
							throw"Positive Number Required";
						}
						cout<< age;
					}
					catch(constchar*Message)
					{
						cout<<"Error: "<< Message;
					}
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q12a"  value="0">0<br>
				<input type="radio" name ="q12a"  value="error:Positive Number Required">error:Positive Number Required<br>
				<input type="radio" name ="q12a"  value="compile time error">compile time error<br>
				<input type="radio" name ="q12a"  value="none of the mentioned">none of the mentioned<br><br>
				<input type="button" id="next12"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question13 -->
		<div id="div13">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				voidPrintSequence(intStopNum)
				{
					intNum;
					Num=1;
					while(true)
					{
						if(Num>=StopNum)
						throwNum;
						cout<<Num;
						Num++;
					}
				}
				int main(void)
				{
					try
					{
						PrintSequence(20);
					}
					catch(intExNum)
					{
						cout<<"Caught an exception with value: "<<ExNum;
					}
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q13a"  value="compile time error">compile time error<br>
				<input type="radio" name ="q13a"  value="prints first 19 numbers">prints first 19 numbers<br>
				<input type="radio" name ="q13a"  value="prints first 19 numbers and throws exception at 20">prints first 19 numbers and throws exception at 20<br>
				<input type="radio" name ="q13a"  value="none of the mentioned">none of the mentioned<br><br>
				<input type="button" id="next13"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question14 -->
		<div id="div14">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				intmain()
				{
					char* buff;
					try
					{
						buff =newchar[1024];
						if(buff ==0)
							throw"Memory allocation failure!";
						else
							cout<<sizeof(buff)<<"Byte successfully allocated!"<<endl;
					}
					catch(char*strg)
					{
						cout<<"Exception raised: "<<strg<<endl;
					}
					return0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q14a"  value="4 Bytes allocated successfully">4 Bytes allocated successfully<br>
				<input type="radio" name ="q14a"  value="8 Bytes allocated successfully">prints first 19 numbers<br>
				<input type="radio" name ="q14a"  value="Memory allocation failure">Memory allocation failure<br>
				<input type="radio" name ="q14a"  value="Depends on the size of data type">Depends on the size of data type<br><br>
				<input type="button" id="next14"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question15 -->
		<div id="div15">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				voidFunct();
				intmain()
				{
					try
					{
						Funct();
					}
					catch(double)
					{
						cerr<<"caught a double type..."<<endl;
					}
					return0;
				}
				voidFunct()
				{
					throw3;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q15a"  value="caught a double type">caught a double type<br>
				<input type="radio" name ="q15a"  value="compile time error">compile time error<br>
				<input type="radio" name ="q15a"  value="abnormal program termination">abnormal program termination<br>
				<input type="radio" name ="q15a"  value=" none of the mentioned"> none of the mentioned<br><br>
				<input type="button" id="next15"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question16 -->
		<div id="div16">
			<xmp>
			What is the output of this program?

				#include <iostream>

				usingnamespacestd;
				int main()
				{
					int i=3;
					int *j;
					int **k;
					j=&i;
					k=&j;
					cout<<k<<","<<*k<<","<<**k;

				}
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q16a"  value="ADDRESS, ADDRESS, 3">ADDRESS, ADDRESS, 3<br>
				<input type="radio" name ="q16a"  value="ADDRESS, 3, 3">ADDRESS, 3, 3<br>
				<input type="radio" name ="q16a"  value="compilation error">compilation error<br>
				<input type="radio" name ="q16a"  value="none of above">none of above<br><br>
				<input type="button" id="next16"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question17 -->
		<div id="div17">
			<xmp>
			Point out the error in the program?

				#include<stdio.h>

				int main()
				{
				    char ch;
				    int i;
				    scanf("%c", &i);
				    scanf("%d", &ch);
				    printf("%c %d", ch, i);
				    return 0;
				}


			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q17a"  value="Error: suspicious char to in conversion in scanf()">Error: suspicious char to in conversion in scanf()<br>
				<input type="radio" name ="q17a"  value="Error: we may not get input for second scanf() statement">Error: we may not get input for second scanf() statement<br>
				<input type="radio" name ="q17a"  value="No error"> No error<br>
				<input type="radio" name ="q17a"  value="None of above">None of above<br><br>
				<input type="button" id="next17"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question18 -->
		<div id="div18">
			<xmp>
				Point out the error in the program?

					#include<stdio.h>

					/* Assume there is a file called 'file.c' in c:\tc directory. */
					int main()
					{
					    FILE *fp;
					    fp=fopen("c:\tc\file.c", "r");    
					    if(!fp) 
					      printf("Unable to open file.");        

					    fclose(fp);
					    return 0;
					}

			
			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q18a"  value="No error, No output." >No error, No output.<br>
				<input type="radio" name ="q18a"  value="Program crashes at run time.">Program crashes at run time.<br>
				<input type="radio" name ="q18a"  value="Output: Unable to open file">Output: Unable to open file<br>
				<input type="radio" name ="q18a"  value="None of above">None of above<br><br>
				<input type="button" id="next18"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question19 -->
		<div id="div19">
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
				<input type="radio" name ="q19a"  value="Error: in unsigned char declaration">Error: in unsigned char declaration<br>
				<input type="radio" name ="q19a"  value="Error: while statement">Error: while statement<br>
				<input type="radio" name ="q19a"  value="No error">No error<br>
				<input type="radio" name ="q19a"  value="It prints all characters in file 'trial'">It prints all characters in file "trial"<br><br>
				<input type="button" id="next19"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!-- Question20 -->
		<div id="div20">
			<xmp>
			Point out the error in the program?
			
				#include<stdio.h>

				int main()
				{
				    FILE *fp;
				    fp=fopen("trial", "r");
				    fseek(fp, "20", SEEK_SET);
				    fclose(fp);
				    return 0;
				}

			</xmp>
			<center><u>
				Answer</u><br>
				<input type="radio" name ="q20a"  value="Error: unrecognised Keyword SEEK_SET">Error: unrecognised Keyword SEEK_SET<br>
				<input type="radio" name ="q20a"  value="Error: fseek() long offset value">Error: fseek() long offset value<br>
				<input type="radio" name ="q20a"  value="No error">No error<br>
				<input type="radio" name ="q20a"  value="None of above">None of above<br><br>
				<input type="button" id="next20" name="submit" style="padding:15px" value="next>>" onclick="go()">
			</center>
		</div>

		<!--Question21-->
		<div id="div21">
			<xmp>
			DEBUG THE FOLLOWING CODE </>

				#include <iostream>
				using namespace std;
				class X
				{
				   public: int *i,j=NULL;
				   X(int ia)
				   {
						*i = ia; 
						cout<<"\ni= "<<i;
				   };
				   X(int ib, int jb)
				   {
				      j = ib + jb;
				   };
				   void myfunc()
				   {
				   	   	if(j!=NULL){			  
							cout<<&j;
							j&=2;
							cout<<j;     
						}
						else{	   
				    		i*= 2; 
				    		cout<<i;     
				    	}
				   };
				   ~X()
				   {
				      int id = i/2; 
				      if (id < 7 || id > 10)
				      cout<<"\nError - Out of range";
				   };
				};
				void main()
				{

					X *x1 = new X(4);
					X *x2 = new X(6,2);
					X x3 = new X(9); 
					X *x4 = new X(4,1);
					x1->myfunc();
					x2->myfunc();
					x3.myfunc(); 
					x4->myfunc();
					cout<<x3->*i; 
					delete x1;
					delete x2;
					delete x4;
					return 0;
				}

			</xmp>
			<center><input type="button" id="next21"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!--Question22-->
		<div id="div22">
			<xmp>
			DEBUG THE FOLLOWING CODE </>

				#include <iostream>
				#include <fistream>
				 
				using namespace std
				 
				class student
				{
				    private
				        char name[30];
				        int age;
				    public
				       void getData(void)
				        { cout<<"Enter name:"; cin.getline(name,30);
				          cout<<"Enter age:"; cin>>age;
				        }
				 
				        void showData(void)
				        {
				        cout<<"Name:"<<name<<",Age:"<<age<<endl;
				        }
				};
				 
				int main()
				{
				    student s;
				     
				    ofstream file;
				 
				    
				    fileopen("aaa.txt",ios::out);
				    if(!file)
				    {
				      cout<<"Error in creating file.."<<endl;
				      return 0;
				    }
				    cout<<"\nFile created successfully."<<endl;
				 
				   
				    file.write((char*)&s,sizeof(s));    //write into file
				 
				    file.close();   //close the file
				    cout<<"\nFile saved and closed succesfully."<<endl;
				 
				       ifstream file1;
				    
				    file1.open("aaa.txt",ios::in);
				    if(!file1){
				        cout<<"Error in opening file..";
				        return ();
				    }
				    
				   file1.read((char*)&s,Size of(s));
				 
				    
				    s.showData();
				    
				    file1.close();
				     
				    return ()
				}

			</xmp>
			<center>
				<input type="button" id="next22"  value="next>>" style="padding:15px">
			</center>
		</div>

		<!--Question23-->
		<div id="div23">
			<xmp>
			DEBUG THE FOLLOWING CODE </>

				#include <stdio.h>
				typedef struct complex
				{
				    float real;
				    float imag;
				} complex;
				complex add(complex n1,complex n2);

				int main()
				{
				    complex n1, n2, temp;

				    printf("For 1st complex number \n");
				    printf("Enter real and imaginary part respectively:\n");
				    scanf("%f %f", &n1.real, &n1.imag);

				    printf("\nFor 2nd complex number \n");
				    printf("Enter real and imaginary part respectively:\n");
				    scanf("%f %f", &n2.real, &n2.imag);

				    temp = add(n1, n2);
				    printf("Sum = %.1f + %.1fi", temp.real, temp.imag);

				    return 0;
				}

				complex add(complex n1, complex n2)
				{
				      complex temp;

				      temp.real = n1.real + n2.real;
				      temp.imag = n1.imag + n2.imag;

				      return(temp);
				}



			</xmp>
			<center>
				<input type="button" id="next23"  value="Submit" style="padding:15px">
			</center>
		</div>

		<div id="div24">
			<center><b style="font-family: vivaldi;font-size: 50px">Thank you for your participation.</b></center>
		</div><p id="finish" style="color: #181C28" >0</p>

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
			}, 18000000);


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

