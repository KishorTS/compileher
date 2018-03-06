$(document).ready(function()
{

	var score=0;
	$("#div2").hide();
	$("#div3").hide();
	$("#div4").hide();
	$("#div5").hide();	
	$("#div6").hide();	
	$("#div7").hide();	
	$("#div8").hide();
	$("#div9").hide();		
	$("#div10").hide();
	$("#div11").hide();
	$("#div12").hide();
	$("#div13").hide();
	$("#div14").hide();
	$("#div15").hide();
	$("#div16").hide();
	$("#div17").hide();
	$("#div18").hide();
	$("#div19").hide();
	$("#div20").hide();
	$("#div21").hide();


	//DISABLING INSPECT AND F12
	$(document).bind("contextmenu",function(e){
        return false;
    });
    $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
    else if ((e.ctrlKey && e.shiftKey && e.keyCode == 73) || (e.ctrlKey && e.shiftKey && e.keyCode == 74)) {
                return false;
    }
});

    //Question1
	$('#next1').click(function()
	{
		var radioValue = $("input[name='q1a']:checked").val();
        if (radioValue=="error") 
	        {
	        	score=score+1;
	        }
	        if (radioValue!=null)
	        {
        		$("#div1").hide();
        		$("#div2").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question2
    $('#next2').click(function()
	{
		var radioValue = $("input[name='q2a']:checked").val();
        if (radioValue=="compile error") 
	        {
	        	score=score+1;	

	        }
	        if (radioValue!=null)
	        {
        		$("#div2").hide();
        		$("#div3").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question3
    $('#next3').click(function()
	{
		var radioValue = $("input[name='q3a']:checked").val();
        if (radioValue=="a") 
	        {
	        	score=score+1;	

	        }
	        if (radioValue!=null)
	        {
        		$("#div3").hide();
        		$("#div4").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question4
    $('#next4').click(function()
	{
		var radioValue = $("input[name='q4a']:checked").val();
        if (radioValue=="rit") 
	        {
	        	score=score+1;        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div4").hide();
        		$("#div5").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

     //Question5
    $('#next5').click(function()
	{
		var radioValue = $("input[name='q5a']:checked").val();
        if (radioValue=="compilation error") 
	        {
	        	score=score+1;        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div5").hide();
        		$("#div6").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question6
    $('#next6').click(function()
	{
		var radioValue = $("input[name='q6a']:checked").val();
        if (radioValue=="1248") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div6").hide();
        		$("#div7").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question7
    $('#next7').click(function()
	{
		var radioValue = $("input[name='q7a']:checked").val();
        if (radioValue=="Compileher") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div7").hide();
        		$("#div8").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question8
    $('#next8').click(function()
	{
		var radioValue = $("input[name='q8a']:checked").val();
        if (radioValue=="1") 
	        {
	        	score=score+1;


	        }
	        if (radioValue!=null)
	        {
        		$("#div8").hide();
        		$("#div9").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question9
    $('#next9').click(function()
	{
		var radioValue = $("input[name='q9a']:checked").val();
        if (radioValue=="2,2") 
	        {
	        	score=score+1;        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div9").hide();
        		$("#div10").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question10
    $('#next10').click(function()
	{
		var radioValue = $("input[name='q10a']:checked").val();
        if (radioValue=="error") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div10").hide();
        		$("#div11").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question11
    $('#next11').click(function()
	{
		var radioValue = $("input[name='q11a']:checked").val();
        if (radioValue=="error") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div11").hide();
        		$("#div12").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question12
    $('#next12').click(function()
	{
		var radioValue = $("input[name='q12a']:checked").val();
        if (radioValue=="emp") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div12").hide();
        		$("#div13").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question13
    $('#next13').click(function()
	{
		var radioValue = $("input[name='q13a']:checked").val();
        if (radioValue=="toupper") 
	        {
	        	score=score+1;
	        }
	        if (radioValue!=null)
	        {
        		$("#div13").hide();
        		$("#div14").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question14
    $('#next14').click(function()
	{
		var radioValue = $("input[name='q14a']:checked").val();
        if (radioValue=="zero") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div14").hide();
        		$("#div15").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question15
    $('#next15').click(function()
	{
		var radioValue = $("input[name='q15a']:checked").val();
        if (radioValue=="no") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div15").hide();
        		$("#div16").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });
     //Question16
    $('#next16').click(function()
	{
		var radioValue = $("input[name='q16a']:checked").val();
        if (radioValue=="chara") 
	        {
	        	score=score+1;	

	        }
	        if (radioValue!=null)
	        {
        		$("#div16").hide();
        		$("#div17").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question17
    $('#next17').click(function()
	{
		var radioValue = $("input[name='q17a']:checked").val();
        if (radioValue=="binary") 
	        {
	        	score=score+1;
	        }
	        if (radioValue!=null)
	        {
        		$("#div17").hide();
        		$("#div18").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

    //Question18
    $('#next18').click(function()
	{
		var radioValue = $("input[name='q18a']:checked").val();
        if (radioValue=="cannot convert") 
	        {
	        	score=score+1;
	        }
	        if (radioValue!=null)
	        {
        		$("#div18").hide();
        		$("#div19").show();
        	}
        	document.getElementById('finish').innerHTML=score;
    });

     //Question19
    $('#next19').click(function()
	{
		var radioValue = $("input[name='q19a']:checked").val();
        if (radioValue=="invalid") 
	        {
	        	score=score+1;	        	
	        }
	        if (radioValue!=null)
	        {
        		$("#div19").hide();
        		$("#div20").show();
        	}document.getElementById('finish').innerHTML=score;
    });

    //Question20
    $('#next20').click(function()
	{
        	debugger;
		var radioValue = $("input[name='q20a']:checked").val();
        if (radioValue=="four") 
	        {
	        	score=score+1;	
	        }
	        if (radioValue!=null)
	        {
        		$("#div20").hide();
        		$("#div21").show();
        	}
        	
			$.post("add.php", { name: score} ); 
            document.getElementById('finish').innerHTML=score;
            setTimeout(
              function() 
              {
                window.location.href="index.php";
              }, 5000);
            });



    
});