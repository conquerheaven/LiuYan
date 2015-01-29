/**
 * 
 */
	var xmlobj;
	var message;
	var div;
	function CreateXMLHttpRequest(){
		if(window.ActiveXObject){
			xmlobj = new ActiveXObject("Microsoft.XMLHTTP");
		}
		else if(window.XMLHttpRequest){
			xmlobj = new XMLHttpRequest();
		}
	}
	function Reply(id){//获取客户下拉菜单
		//alert(id);
		var content = document.getElementById(id).value;
		message = "content="+content;
		if(message == "content="){
			alert("请填写内容");
			return;
		}
		div = id;
		message += "&id="+id;
		CreateXMLHttpRequest();
		xmlobj.onreadystatechange = StarHandlerReply;
		xmlobj.open("GET","admin/addre.php?"+message,true);
		xmlobj.send(null);
	}
	function StarHandlerReply(){
		if(xmlobj.readyState == 4 && xmlobj.status == 200){
			//alert(div);
			document.getElementById(div).value = "";
			document.getElementById("re"+div).innerHTML += xmlobj.responseText;
		}
	}
	