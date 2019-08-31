function myFunction()
{	
totalvalue=0;
obj=document.myform.chkbox
//obj1=document.myform.a;
//var txt="";
for(i=0;i<obj.length;i++)
{
if(obj[i].checked)
{
var x = document.getElementById(i);
var y = (x.options[x.selectedIndex].value);
totalvalue=(totalvalue)+((obj[i].value) * (y));
}
}
//alert("Please select atleast one product!!" + " "+txt);
if(totalvalue==0) 
{
alert("Please select atleast one product!!");
document.myform.totalsum.value=""
}
else
{
document.myform.totalsum.value=totalvalue;
}
}

