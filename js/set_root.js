(function(){
	var calc = function(){
		var docElement = document.documentElement;
		var clinetWidthValue = docElement.clinetWidth > 750 ? 750 : docElement.clinet
		docElement.style.fontSize = 20*(clinetWidthValue/375) + 'px';
	}
	calc();
	window.addEventListener('resize',calc);
})();
