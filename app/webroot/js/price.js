function setIndexInfo (obj) {
	var item_name_tag = document.getElementById("item_name_" + obj);
	var item_cpu_tag = document.getElementById("cpu_" + obj);
	var item_mem_tag = document.getElementById("mem_" + obj);
	var item_disk_tag = document.getElementById("disk_" + obj);
	var item_price_tag = document.getElementById("price_" + obj);
	document.getElementById("item_info_name").innerHTML = "";
	document.getElementById("item_info_cpu").innerHTML = "";
	document.getElementById("item_info_mem").innerHTML = "";
	document.getElementById("item_info_disk").innerHTML = "";
	document.getElementById("item_info_price").innerHTML = "";
	if (item_name_tag != null) {
		var item_name = item_name_tag.value;
		document.getElementById("item_info_name").innerHTML=item_name;
		document.getElementById("OrderItemName").value=item_name;
	}
	if (item_cpu_tag != null) {
		var item_cpu = item_cpu_tag.innerHTML;
		document.getElementById("item_info_cpu").innerHTML="CPU：" + item_cpu;
		document.getElementById("OrderProcesserName").value=item_cpu;
	}
	if (item_mem_tag != null) {
		var item_mem = item_mem_tag.innerHTML;
		document.getElementById("item_info_mem").innerHTML="内存：" + item_mem;
		document.getElementById("OrderMemName").value=item_mem;
	}
	if (item_disk_tag != null) {
		var item_disk = item_disk_tag.innerHTML;
		document.getElementById("item_info_disk").innerHTML="硬盘：" + item_disk;
		document.getElementById("OrderDiskName").value=item_disk;
	}
	if (item_price_tag != null) {
		var item_price = item_price_tag.innerHTML;
		document.getElementById("item_info_price").innerHTML="价格：￥" + item_price + "元";
		document.getElementById("OrderPrice").value=item_price;
	}	
}

function setReadInfo(i) {
	var item_name_tag = "item_name_" + i;
	var cpu_price_tag = "cpu_" + i;
	var mem_price_tag = "mem_" + i;
	var disk_price_tag = "disk_" + i;
	var price_tag = "price_" + i;
	document.getElementById("item_info_name").innerHTML = "";
	document.getElementById("item_info_cpu").innerHTML = "";
	document.getElementById("item_info_mem").innerHTML = "";
	document.getElementById("item_info_disk").innerHTML = "";
	document.getElementById("item_info_price").innerHTML = "";
	var item_name_tag_obj = document.getElementById(item_name_tag);
	if (item_name_tag_obj != null) {
		var item_name = item_name_tag_obj.value;
		document.getElementById("item_info_name").innerHTML=item_name;
		document.getElementById("OrderItemName").value=item_name;
	}
	var cpu_price_tag_obj = document.getElementsByName(cpu_price_tag);
	for(i=0;i<cpu_price_tag_obj.length;i++){
		if(cpu_price_tag_obj[i].checked) {
			var item_cpu = trim(cpu_price_tag_obj[i].attributes["t-name"].value);
			document.getElementById("item_info_cpu").innerHTML="CPU：" + item_cpu;
			document.getElementById("OrderProcesserName").value=item_cpu;
			break;
		}
	}
	
	var mem_price_tag_obj = document.getElementsByName(mem_price_tag);
	for(i=0;i<mem_price_tag_obj.length;i++){
		if(mem_price_tag_obj[i].checked) {
			var item_mem = trim(mem_price_tag_obj[i].attributes["t-name"].value);
			document.getElementById("item_info_mem").innerHTML="内存：" + item_mem;
			document.getElementById("OrderMemName").value=item_mem;
			break;
		}
	}
	
	var disk_price_tag_obj = document.getElementsByName(disk_price_tag);
	for(i=0;i<disk_price_tag_obj.length;i++){
		if(disk_price_tag_obj[i].checked) {
			var item_disk = trim(disk_price_tag_obj[i].attributes["t-name"].value);
			document.getElementById("item_info_disk").innerHTML="硬盘：" + item_disk;
			document.getElementById("OrderDiskName").value=item_disk;
			break;
		}
	}
	
	var price_tag_obj = document.getElementById(price_tag);
	if (price_tag_obj != null) {
		var price = price_tag_obj.innerHTML;
		document.getElementById("item_info_price").innerHTML="价格：￥" + price + "元/年";
		document.getElementById("OrderPrice").value=price;
	}
}

function setCloudInfo(i) {
	var item_name_tag = "yunzhuji_menu_" + i;
	var cpu_price_tag = "cpu_" + i;
	var mem_price_tag = "mem_" + i;
	var disk_price_tag = "disk_" + i;
	var price_tag = "price_" + i;
	document.getElementById("item_info_name").innerHTML = "";
	document.getElementById("item_info_cpu").innerHTML = "";
	document.getElementById("item_info_mem").innerHTML = "";
	document.getElementById("item_info_disk").innerHTML = "";
	document.getElementById("item_info_price").innerHTML = "";
	var item_name_tag_obj = document.getElementById(item_name_tag);
	if (item_name_tag_obj != null) {
		var item_name = trim(item_name_tag_obj.innerHTML) + "云主机";
		document.getElementById("item_info_name").innerHTML=item_name;
		document.getElementById("OrderItemName").value=item_name;
	}
	var cpu_price_tag_obj = document.getElementsByName(cpu_price_tag);
	for(i=0;i<cpu_price_tag_obj.length;i++){
		if(cpu_price_tag_obj[i].parentNode.className == "select") {
			var item_cpu = cpu_price_tag_obj[i].attributes["t-name"].value;
			document.getElementById("item_info_cpu").innerHTML="CPU：" + item_cpu;
			document.getElementById("OrderProcesserName").value=item_cpu;
			break;
		}
	}
	
	var mem_price_tag_obj = document.getElementsByName(mem_price_tag);
	for(i=0;i<mem_price_tag_obj.length;i++){
		if(mem_price_tag_obj[i].parentNode.className == "select") {
			var item_mem = mem_price_tag_obj[i].attributes["t-name"].value;
			document.getElementById("item_info_mem").innerHTML="内存：" + item_mem;
			document.getElementById("OrderMemName").value=item_mem;
			break;
		}
	}
	
	var disk_price_tag_obj = document.getElementsByName(disk_price_tag);
	for(i=0;i<disk_price_tag_obj.length;i++){
		if(disk_price_tag_obj[i].parentNode.className == "select") {
			var item_disk = disk_price_tag_obj[i].attributes["t-name"].value;
			document.getElementById("item_info_disk").innerHTML="硬盘：" + item_disk;
			document.getElementById("OrderDiskName").value=item_disk;
			break;
		}
	}
	
	var price_tag_obj = document.getElementById(price_tag);
	if (price_tag_obj != null) {
		var price = price_tag_obj.innerHTML;
		document.getElementById("item_info_price").innerHTML="价格：￥" + price + "元/年";
		document.getElementById("OrderPrice").value=price;
	}
}

function show(boxid, closeid, obj, type) {
	if (type == undefined) {
		setIndexInfo(obj);
	} else if (type == 'read') {
		setReadInfo(obj);	
	} else {
		setCloudInfo(obj);
	}
    var oBox = document.getElementById(boxid)
    var oClose = document.getElementById(closeid)
    oBox.style.display = 'block'
    oBox.style.zIndex = '4';
    var oMark = document.createElement('div');
    oMark.id = 'mark';
    document.body.appendChild(oMark);
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    oBox.style.left = (document.documentElement.clientWidth - oBox.offsetWidth) / 2 + 'px';
    oBox.style.top = ((document.documentElement.clientHeight - oBox.offsetHeight)  / 2  + scrollTop)+ 'px';
    window.onscroll = function() {
        document.documentElement.scrollTop = document.body.scrollTop = scrollTop;
    }
    var iMarkW = Math.max( document.documentElement.clientWidth, document.body.offsetWidth);
    var iMarkH = Math.max( document.documentElement.clientHeight, document.body.offsetHeight);
    oMark.style.width = iMarkW + 'px';
    oMark.style.height = iMarkH + 'px';
}

function hide(boxid){
    var mark = document.getElementById('mark')
    document.body.removeChild(mark);
    document.getElementById(boxid).style.display = 'none';
    window.onscroll = function(){}
}

function siblings(elm) {
	var a = [];
	var p = elm.parentNode.children;
	for(var i =0,pl= p.length;i<pl;i++) {
		if(p[i] !== elm) a.push(p[i]);
	}
	return a;
}

function resetPrice(radio) {
	var i = radio.name.substr(radio.name.length-1, 1);
	var base_price_tag = "base_price_" + i;
	var cpu_price_tag = "cpu_" + i;
	var mem_price_tag = "mem_" + i;
	var disk_price_tag = "disk_" + i;
	var price_tag = "price_" + i;
	var base_price = document.getElementById(base_price_tag).value;
	var cpu_price_tag_obj = document.getElementsByName(cpu_price_tag);
	var price = parseInt(base_price);
	for(i=0;i<cpu_price_tag_obj.length;i++){
		if(cpu_price_tag_obj[i].checked) {
			price += parseInt(cpu_price_tag_obj[i].value);
			break;
		}
	}
	
	var mem_price_tag_obj = document.getElementsByName(mem_price_tag);
	for(i=0;i<mem_price_tag_obj.length;i++){
		if(mem_price_tag_obj[i].checked) {
			price += parseInt(mem_price_tag_obj[i].value);
			break;
		}
	}
	
	var disk_price_tag_obj = document.getElementsByName(disk_price_tag);
	for(i=0;i<disk_price_tag_obj.length;i++){
		if(disk_price_tag_obj[i].checked) {
			price += parseInt(disk_price_tag_obj[i].value);
			break;
		}
	}
	document.getElementById(price_tag).innerHTML = price;
}

function resetPriceCloud(li) {
	li.className="select";
	sib = siblings(li);
	for (i=0; i<sib.length; i++) {
		sib[i].className="";
	}
	var inputs = li.getElementsByTagName("input");
	var j = inputs[0].name.substr(inputs[0].name.length-1);
	var base_price_tag = "base_price_" + j;
	var cpu_price_tag = "cpu_" + j;
	var mem_price_tag = "mem_" + j;
	var disk_price_tag = "disk_" + j;
	var price_tag = "price_" + j;
	var base_price = document.getElementById(base_price_tag).value;
	var cpu_price_tag_obj = document.getElementsByName(cpu_price_tag);
	var price = parseInt(base_price);
	for(i=0;i<cpu_price_tag_obj.length;i++){
		if(cpu_price_tag_obj[i].parentNode.className=="select") {
			price += parseInt(cpu_price_tag_obj[i].value);
			break;
		}
	}
	
	var mem_price_tag_obj = document.getElementsByName(mem_price_tag);
	for(i=0;i<mem_price_tag_obj.length;i++){
		if(mem_price_tag_obj[i].parentNode.className=="select") {
			price += parseInt(mem_price_tag_obj[i].value);
			break;
		}
	}
	
	var disk_price_tag_obj = document.getElementsByName(disk_price_tag);
	for(i=0;i<disk_price_tag_obj.length;i++){
		if(disk_price_tag_obj[i].parentNode.className=="select") {
			price += parseInt(disk_price_tag_obj[i].value);
			break;
		}
	}
	document.getElementById(price_tag).innerHTML = price;
}