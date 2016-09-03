<?php
  require("../functions/connect.php");
  require("../functions/engine.php");
?>
  <script type="text/javascript" src="../javascript/addtopic.js"></script>
  <script type="text/javascript" src="../javascript/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../wysiwyg/css/froala_editor.css">
  <link rel="stylesheet" href="../wysiwyg/css/froala_style.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/code_view.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/colors.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/image.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/table.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/video.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/file.css">
  <link rel="stylesheet" href="../wysiwyg/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" type="text/css" href="../css/addtopic.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate_css.css">

  <style>
      div#editor {
          width: 75%;
          margin-left:5%;
          text-align: left;
          z-index: 1;
          position: relative;
      }
      .ss {
        background-color: red;
      }
  </style>

  <div id="paragraph_box">
  <p id="heads_up">Create a new topic</p>
  </div>
<form id="usr" class="pure-form pure-form-stacked">
  <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name" id="topic_name_label">Topic Name</label>
                <input id="first-name" placeholder="Type something" class="pure-u-23-24" type="text">
            </div>
</div>

</form>
  <div id="editor">
      <div id='edit' style="margin-top: 30px;"></div>
  </div>

<button id="submit_button" class="pure-button pure-button-primary">Submit</button>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/quick_insert.min.js"></script>
  
  <script type="text/javascript" src="../wysiwyg/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../wysiwyg/js/plugins/quote.min.js"></script>
  <script>
  
    $(function(){
      $('#edit').froalaEditor();
    });


  </script>

<br><br><br><br><br><br>

 <div id="paragraph_box">
  <p id="heads_up">Your topics</p>
</div>

<?php
  print_all_topics();
?>