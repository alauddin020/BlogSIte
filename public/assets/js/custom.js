$(function(){
  
  $('#text').each(function () 
  {
    this.setAttribute('style', 'overflow-y:hidden;');
	}).on('input', function () {
	    this.style.height = 'auto';
	    this.style.height = (this.scrollHeight) + 'px';
	});
});