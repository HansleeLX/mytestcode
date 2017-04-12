// JavaScript Document

function ol_executivejump()
{
	var lis = document.getElementById('target6').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}

function ol_generalmanagerjump()
{
	var lis = document.getElementById('target5').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}

function ol_juniormanagerjump()
{
	var lis = document.getElementById('target4').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}

function ol_seniormanagerjump()
{
	var lis = document.getElementById('target3').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}

function ol_seniorprofessionaljump()
{
	var lis = document.getElementById('target2').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}

function ol_youngprofessionaljump()
{
	var lis = document.getElementById('target1').getElementsByTagName('li');
	//var rst = [];
	for (var i = 0; i < lis.length; i++) 
	{
		//rst.push(lis[i].innerHTML.replace(/<[^>]+>\s/gi, ''));
		var competency = 'competencies'+i;
		document.getElementById(competency).value = lis[i].innerHTML.replace(/<[^>]+>\s/gi, '');
	}
	document.getElementById('competenciesnum').value = lis.length;
	//var val = document.getElementById('competencies0').value;
	//alert(val);
}
