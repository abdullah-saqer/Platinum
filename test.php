<head>
<link rel="stylesheet" type="text/css" href="ckeditor/samples/css/samples.css">
<link rel="stylesheet" type="text/css" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/samples/js/sample.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		initSample();

		$("#submit").click(function(){
			var s = CKEDITOR.instances['editor'].getData();
			CKEDITOR.instances['editor'].setData("<h1>Montaser Qasem</h1>");
		});

	});


</script>
<body>

	<div id="editor">
		
	</div>
	<br>
		<button id="submit">Submit</button>
</body>
