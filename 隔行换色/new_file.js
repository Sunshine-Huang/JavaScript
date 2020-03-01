var newsBox=document.getElementById("newsBox");
var newslist=newsBox.getElementsByTagName('li');
for(var i=0;i<newslist.length;i++){
	if(i%2===1){
		newslist[i].style.backgroundColor="blue"
	}
}