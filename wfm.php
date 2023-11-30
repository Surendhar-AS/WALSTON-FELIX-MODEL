<html>
<title>WALSTON-FELIX MODEL</title>
<head>
<link rel="stylesheet" href="style\style5.css">
<script>
function fun()
{
  p=parseInt(document.getElementById("r").value);
  m=p*12;
  ls=(m/1.4)**(1/.93);
  ls1=Number((ls).toFixed(3));
  lw=(m/5.2)**(1/.91);
  lw1=Number((lw).toFixed(3));
  ds=4.6*(ls**0.26);
  ds1=Math.round(ds);
  dw=4.1*(lw**0.36);
  dw1=Math.round(dw);
  ps=ls1/p;
  ps1=Number((ps).toFixed(3));
  pw=lw/p;
  pw1=Number((pw).toFixed(3));
  ms=m/ds1;
  ms1=Number((ms).toFixed(1));
  mw=m/dw1;
  mw1=Number((mw).toFixed(1));
  document.getElementById("m").value =m+" "+"Persons-months";
  document.getElementById("ls").value =ls1+" "+"LOC";
  document.getElementById("lw").value =lw1+" "+"LOC"; 
  document.getElementById("ds").value =ds1+" "+"months";
  document.getElementById("dw").value =dw1+" "+"months";
  document.getElementById("ps").value =ps1+" "+"LOC/PY";
  document.getElementById("pw").value =pw1+" "+"LOC/PY";
  document.getElementById("ms").value =ms1+" "+"Persons";
  document.getElementById("mw").value =mw1+" "+"Persons"; 
  document.getElementById("as").innerHTML  ="ohm";     
}
</script>
</head>
<body>
<div class="box1"><br>
<p class="p1">WALSTON-FELIX MODEL</p>
&nbsp Enter the person-years of effort:<input id="r"><br/><br/>
<button onclick="fun()" class="submit-btn">Calculate</button><br/>
&nbsp &nbsp Amount of manpower involved: <input id="m">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<a href="<?php echo 'fo.php' ?>"><button onclick="fun()" class="submit-btn"> <<< home </button></a>
</div>
<div class="box2"><br>
<p class="p1">Number of lines of source code can be obtained by reversing equation to give: (L=1/5.2)E-0.91,Then</p>
&nbsp L (SEL) :  <input id="ls"><br/><br/>
&nbsp L (W-F) :  <input id="lw"><br/><br/>
</div>
<div class="box3"><br>
<p class="p1">Duration in months is calculated by means of equation:</p>
&nbsp D (SEL) :  <input id="ds"><br/><br/>
&nbsp D (W-F) :  <input id="dw"><br/><br/>
</div>
<div class="box4"><br>
<p class="p1">Productivity is the lines of code produced per persons/month(year):</p>
&nbsp p (SEL) :  <input id="ps"><br/><br/>
&nbsp p (W-F) :  <input id="pw"><br/><br/>
</div>
<div class="box5"><br>
<p class="p1"> Average manning is the average number of persons required per month in the project:</p>
&nbsp M (SEL) :  <input id="ms"><br/><br/>
&nbsp M (W-F) :  <input id="mw"><br/><br/>
</div>


</body>
</html>