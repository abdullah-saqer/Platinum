$(document).ready(function(){
	var index_flag=[];
	for(var i=0;i<1000;i++)
		index_flag[i]=false;

	$("#table_box*").click(function(){
		var index=$("#table_box*").index(this);
		if(!index_flag[index])
			$("#Content_Box*:eq("+index+")").slideDown();
		else
			$("#Content_Box*:eq("+index+")").slideUp();
		index_flag[index]=!index_flag[index];
	});

});