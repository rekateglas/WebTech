<script>
 $( document ).ready(function() {
     $.get( "src/select.php", function( data ) {
         $( "#select" ).html( data );
		 console.log(data);
     });
 });
 </script>
<style>
td{
border:2px solid white;
}

</style>
<center>
	
	<div id="sp">
	<h2>Válassz szolgáltatást</h2>
  <select name="tables" id="tablesp" style="margin-bottom:30px">
    <option value="2500">Köröm építés 2500 Ft</option>
    <option value="3000">Szemöldök igazítás 3000 Ft</option>
    <option value="10000">Esküvői smink készítés 10.000 Ft</option>
    <option value="8000">Esküvői Frizura 8000 Ft</option>
  </select>
  <br>
  <input type="submit" value="Kiválasztom" onclick="table(),coupon()"></center>
  </div>
  </center>

<center>

<form method="post" id="ordering"action="src/db.php">
<h2>Kérem Töltse ki az adatokat</h2>
<label style="text-align:left">Név : </label>
<input class="forminput"id="frist-name" name="frist-name" type="text" />
<label style="text-align:left">Idő : </label>
<input class="forminput" id="time" name="time" type="text" /><br>
<label style="text-align:left">Nap : </label>
<input class="forminput" id="day" name="day"type="text" />
<label style="text-align:left">Kupon kod : </label>
<input class="forminput" id="kupon" type="text" /><br>
<label style="text-align:left">Valid? : </label>
<input class="forminput" id="valid" type="text" />
<label style="text-align:left">Ár : </label>
<input class="forminput" id="ar" name="ar"type="text" /><br>
<input type="button" value="Kupon érvényesítés" onclick="fillTable()" />
<input type="submit" name="submit"value="Foglalás" />
</form>

<center>


 


<div id="timetablediv">
<table id="timetable">
<tr>
<th></th>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
</tr>
<tr>
<th></th>
<th></th>
<th>Hétfő</th>
<th>Kedd</th>
<th>Szerda</th>
<th>Csütörtök</th>
<th>Péntek</th>
</tr>
<tbody>
<tr onclick="clickRow(this)">
<td>1</td>
<td>8-9</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>2</td>
<td>9-10</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>3</td>
<td>10-11</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>4</td>
<td>11-12</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>5</td>
<td>12-13</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>6</td>
<td>13-14</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>7</td>
<td>14-15</td>

<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
<tr onclick="clickRow(this)">
<td>8</td>
<td>15-16</td>

<td onclick="clickcell(this)" class="foglalt" style="background-color:Bisque">Magdi néni</td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>
<td onclick="clickcell(this)"></td>

</tr>
</tbody>

</table>
<h2 style="margin-top:50px;">Eddig foglalt időpontok</h2>
<div id="select">


</div>
</div>
