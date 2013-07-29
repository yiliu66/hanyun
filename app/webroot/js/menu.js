function findA(obj){
	//主菜单
	var mm=document.getElementById("m_"+obj);
	mm.className="m_li_a";
}

var def="1";
function mover(object){

	var li_objs = document.getElementById("menu").getElementsByTagName("li");

	//主菜单
	var mm=document.getElementById("m_"+object);
	mm.className="m_li_a";
	
	//初始主菜单先隐藏效果
	/*
	if(def!=0){
		var mdef=document.getElementById("m_"+def);
		mdef.className="m_li";
	}*/
	
	//子菜单
	var ss=document.getElementById("s_"+object);
	ss.style.display="block";
	
	//初始子菜单先隐藏效果
	for (var i=1; i<=li_objs.length; i++) {
		if (i!=object) {
			var ss=document.getElementById("s_"+i);
			var mm=document.getElementById("m_"+i);
			ss.style.display="none";
			mm.className="m_li";		
		}
	}
}

function mover_menu(object, len){

	//主菜单
	var mm=document.getElementById("yunzhuji_menu_"+object);
	mm.className="menu_a";
	
	//初始主菜单先隐藏效果
	/*
	if(def!=0){
		var mdef=document.getElementById("m_"+def);
		mdef.className="m_li";
	}*/
	
	//子菜单
	var ss=document.getElementById("yunzhuji_left_"+object);
	ss.style.display="block";
	
	//初始子菜单先隐藏效果
	for (var i=2; i<=len+1; i++) {
		if (i!=object) {
			var ss=document.getElementById("yunzhuji_left_"+i);
			var mm=document.getElementById("yunzhuji_menu_"+i);
			ss.style.display="none";
			mm.className="";		
		}
	}
}