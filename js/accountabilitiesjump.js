// JavaScript Document

function acc_org_jump()
{
	var sentence = document.getElementsByClassName("tag-editor-tag");
	
	for(var i=0;i<sentence.length;i++)
	{
		var acc_org = sentence[i].innerHTML;
		var sentence_no = 'acc_org'+i;
		document.getElementById(sentence_no).value = acc_org;
		//alert(sentence_no);
		//alert(document.getElementById(sentence_no).value);
	}		
}

function acc_ana_jump()
{
	var sentence = document.getElementsByClassName("tag-editor-tag");
	
	for(var i=0;i<sentence.length;i++)
	{
		var acc_ana = sentence[i].innerHTML;
		var sentence_no = 'acc_ana'+i;
		document.getElementById(sentence_no).value = acc_ana;
		//alert(sentence_no);
		//alert(document.getElementById(sentence_no).value);
	}		
}

function acc_adh_jump()
{
	var sentence = document.getElementsByClassName("tag-editor-tag");
	
	for(var i=0;i<sentence.length;i++)
	{
		var acc_adh = sentence[i].innerHTML;
		var sentence_no = 'acc_adh'+i;
		document.getElementById(sentence_no).value = acc_adh;
		//alert(sentence_no);
		//alert(document.getElementById(sentence_no).value);
	}		
}

function acc_man_jump()
{
	var sentence = document.getElementsByClassName("tag-editor-tag");
	
	for(var i=0;i<sentence.length;i++)
	{
		var acc_man = sentence[i].innerHTML;
		var sentence_no = 'acc_man'+i;
		document.getElementById(sentence_no).value = acc_man;
		//alert(sentence_no);
		//alert(document.getElementById(sentence_no).value);
	}		
}