
var kupon=["asdre2","kjht5","93k5m6","910b3m","pym865"];


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

document.getElementById("kupon").value=kupon[rand];
alert(kupon[rand]);

}
function validkupon()
{
var i;
var kuponkod=document.getElementById("kupon").value;
for(i=0; i<5; i++)

{
if(kuponkod == kupon[i])
{
alert("Kupon elfogadva, a szolgáltatás ára változott");
return true;
break;
}
}
return false;

}

var tablerow;
var tablecell;
function table()
{
var sel = document.getElementById("tablesp");
var selected = sel.value;
document.getElementById("ar").value=selected;
}


function fillTable()
{
var Fullname=document.getElementById("frist-name").value;
	if(document.getElementById('timetable').rows[tablerow].cells[tablecell].style.backgroundColor === "Bisque")
	{
	alert("Ez az időpont már foglalt");
	}
	else
	{
	
var fill= document.getElementById("timetable").rows[tablerow].cells;
	fill[tablecell].innerHTML= Fullname;
	document.getElementById('timetable').rows[tablerow].cells[tablecell].style.backgroundColor = "Bisque";
	var sel = document.getElementById("tablesp");
	var selected = sel.value;
	var val=validkupon();
	document.getElementById("valid").value = validkupon();
	
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
tablerow=row.rowIndex;
document.getElementById("time").value=tablerow;



}
function clickcell(cell)
{
tablecell=cell.cellIndex;
document.getElementById("day").value=tablecell;

}
