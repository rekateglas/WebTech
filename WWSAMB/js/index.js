
var cup=["asdre2","kjht5","93k5m6","910b3m","pym865"];


function loading(obj)
{
	$(document).ready(function(){
       var file = $(obj).attr('value');
	   if(file=="Kezdőlap")
	   {
		   file="index"
		   $('#loader').load(file+".html");
		   	   $("#loader").html("");
	   }
	   if(file=="idopont")
	   {
		   file="src/idopont"
		    $('#loader').load(file+".php");
	   }
	   else
	   {
		   $("#loader").html("");
   $('#loader').load("src/"+file+".html");
   
	   }
   });
}



function coupon()
{
var rand=Math.floor(Math.random() * 5); 

document.getElementById("kupon").value=cup[rand];
alert(cup[rand]);

}
function validcup()
{
var i;
var cupk=document.getElementById("kupon").value;
for(i=0; i<5; i++)

{
if(cupk == cup[i])
{
alert("Kupon elfogadva, a szolgáltatás ára változott");
return true;
break;
}
}
return false;

}

var rowt;
var cellt;
function table()
{
var sel = document.getElementById("tablesp");
var selected = sel.value;
document.getElementById("ar").value=selected;
}
var Fname;
var Lname;
function fillT()
{
var Fullname=document.getElementById("frist-name").value;
	if(document.getElementById('timetable').rows[rowt].cells[cellt].style.backgroundColor === "Bisque")
	{
	alert("Ez az időpont már foglalt");
	}
	else
	{
	
var fill= document.getElementById("timetable").rows[rowt].cells;
	fill[cellt].innerHTML= Fullname;
	document.getElementById('timetable').rows[rowt].cells[cellt].style.backgroundColor = "Bisque";
	var sel = document.getElementById("tablesp");
	var selected = sel.value;
	var val=validcup();
	document.getElementById("valid").value = validcup();
	
	if(val == true)
	{
			document.getElementById("ar").value=selected*0.9;
	}
	else
	{
	document.getElementById("ar").value=selected;
	}
	
}

}
function clickRow(row)
{
rowt=row.rowIndex;
document.getElementById("time").value=rowt;



}
function clickcell(cell)
{
cellt=cell.cellIndex;
document.getElementById("day").value=cellt;

}
