function a()
		{
			
			var b=document.getElementById("f").value;
			var c=parseInt(b)+(14.5*100);
			var d=document.getElementById("ttf");
			d.value=c;
		}
function use()
	{
		var a=document.getElementById('user').value;
		var b=document.getElementById('p1');
		var l=/^[a-zA-Z]+$/;
		if(a==null || a=="")
			{
				b.innerHTML="Required";
			}
		else if(a.match(l))
			{
				
				b.innerHTML="";
			}
		else
			{
				b.innerHTML="Alphabets only";
			}
	}
function orga()
	{
		var a=document.getElementById('or').value;
		var b=document.getElementById('p2');
		if(a==null || a=="")
			{
				b.innerHTML="Required";
			}
		else 
			{
				
				b.innerHTML="";
			}
	}
function phon()
	{
		
		var a=document.getElementById('ph').value;
		var b=document.getElementById('p3');
		var l=/^[0-9]+$/;
		if(a==null || a=="")
			{
				b.innerHTML="Required";
			}
		else if(a.match(l))
			{
				
				b.innerHTML="";
			}
		else
			{
				b.innerHTML="Numbers only";
			}
	}
	
function aphon()
	{
		
		var a=document.getElementById('aph').value;
		var b=document.getElementById('p4');
		var l=/^[0-9]+$/;
		if(a==null || a=="")
			{
				b.innerHTML="Required";
			}
		else if(a.match(l))
			{
				
				b.innerHTML="";
			}
		else
			{
				b.innerHTML="Numbers only";
			}
	}
function ema()
			{
				var g=document.getElementById("em").value;
				var f=document.getElementById("p5");
				var l=/^[a-zA-Z]+@[a-zA-Z]+.[a-zA-Z]+$/;
				if(g==null || g=="")
				{
								 
					f.innerHTML="Required";
					
				}
					else if(g.match(l))
					{
							
						f.innerHTML="";					
												
					}
						else
							{
												
								f.innerHTML="Email address must be valid";
							
							}
				}
function aema()
			{
				var g=document.getElementById("aem").value;
				var f=document.getElementById("p6");
				var l=/^[a-zA-Z]+@[a-zA-Z]+.[a-zA-Z]+$/;
				if(g==null || g=="")
				{
								 
					f.innerHTML="Required";
					
				}
					else if(g.match(l))
					{
							
						f.innerHTML="";					
												
					}
						else
							{
												
								f.innerHTML="Email address must be valid";
							
							}
				}	
