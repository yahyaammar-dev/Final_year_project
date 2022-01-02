<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>




<h1 class="adddestinationform__heading">Write Your Story</h1>



<div class="item ">



    <div id="form-container" class="container">
        <form id="discussionForm" class="qilljs" method="post" action="discussionsEditor.php" role="form">
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" placeholder="Title">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <input name="discussionContent" type="hidden">
                <div id="editor-container">
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary addblog" type="submit">Add Blog</button>
            </div>
        </form>
    </div>






    <script>
    var quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }]
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });



    var qilljs = document.querySelector(".qilljs");
    var addblog = document.querySelector(".addblog");
    addblog.addEventListener("click", function() {
 
        event.preventDefault()
        var discussionContent = document.querySelector('input[name=discussionContent]');
        discussionContent.value = JSON.stringify(quill.getContents());

        var data = JSON.stringify(quill.root.innerHTML.trim());
     
        $.ajax({
            type: "POST",
            url : "http://localhost:8001/saveblog",
            data: {editorContent : data, name : "abc"},
            success: function (data,status, xhr)
            {
            if(xhr.status == 200) {
                alert("Successfully sent to database");
            }
            },error: function() {
            alert("Could not send to database");
            }       
        });


    });
    </script>


