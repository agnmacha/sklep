function cmp(a, b){
	return a>b;
}
onl=(window.onload||new Function);
onload=function(){
	onl();
	for(var i=0, e, tds=document.getElementsByTagName('td'); td=tds[i]; i++){
		if(/\s?sort\s?/.test(td.className)){
			td.n=i;
			td.onclick=function(){sort(this.n,this);}
		}
	}
}
function sort(v,d){
	d.o=d.o>0?-1:1;
	var tbody=d.parentNode.parentNode.parentNode.getElementsByTagName('tbody')[0];
	for(var i=0, c=[], tr, trs=tbody.getElementsByTagName('tr'); tr=trs[i]; i++){c[i]=tr} // just make an array from trs
	c.sort(function(a,b){return cmp(a.getElementsByTagName('td')[v].firstChild.data,b.getElementsByTagName('td')[v].firstChild.data)>0?d.o:-d.o});
	for(var i=0; i<c.length; i++){
		tbody.appendChild(c[i]);
	}
}

