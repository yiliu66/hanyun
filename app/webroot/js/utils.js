function addLoadEvent(func){
 var oldonload = window.onload;
 if (typeof window.onload != 'function') {
  window.onload = func;
 } else {
  window.onload = function(){
   oldonload();
   func();
  }
 }
}

function trim(str) { 
	if (str!=null) return str.replace(/(^\s*)|(\s*$)/g, ""); 
} 
