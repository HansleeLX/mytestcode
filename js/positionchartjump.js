// JavaScript Document

function positionchartjump()
{
	var h2_dtl = document.getElementsByTagName("h2");
	
	var upper_info = '1'+','+h2_dtl[0].innerHTML+','+'0';	
	document.getElementById('position1').value = upper_info;
	
	var curr_info = '2'+','+h2_dtl[1].innerHTML+','+'1';	
	document.getElementById('position2').value = curr_info;
	
	var curr_info = '3'+','+h2_dtl[2].innerHTML+','+'2';	
	document.getElementById('position3').value = curr_info;
	
	document.getElementById('positionnum').value = h2_dtl.length;

	//alert(document.getElementById('position3').value);
}