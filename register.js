function saveData(){
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
	}
	else{
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xml.onreadystatechange = function(){
		if(xml.readyState == 4 && xml.status == 200){
			document.getElementById("")
		}
	}
}