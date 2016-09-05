$(document).ready(function(){
	


    $("#submit_button").click(function(){
	var content=CKEDITOR.instances['editor'].getData();
	var subject=$("#first-name").val();
	if(content.length>0 && subject.length>0){
		console.log(content);
		$.ajax({
			type:'POST',
			url:'../functions/responder.php',
			data:'add_topic=1&subject='+subject+"&body="+content,
			success:function(result){
				alert(result);
				getPage("add_topic.php");
			}
		});
	}
	 else
		alert("Please make sure you filled all the fields");

});

var flag=[];
for(var i=0;i<1000;i++)
flag[i]=0;
$("#view_token #subject").click(function(){
	var index=$("#view_token #subject").index(this);
		if(!flag[index])
			$("#token_body*:eq("+index+")").slideDown();

		else $("#token_body*:eq("+index+")").slideUp();
	flag[index]=!flag[index];
});

$("#trash_can*").click(function(){
	var flag=confirm("Are you sure that you want to delete this topic ?");
	if(flag){
	var index=$("#trash_can*").index(this);
	var key=$("#primary*:eq("+index+")").text();
	$.ajax({type:'POST',
		url:'../functions/responder.php',
		data:"delete_topic=1&key="+key,
		success:function(result){
			alert(result);
			getPage("add_topic.php");
		}
	});
}

});
	


});


