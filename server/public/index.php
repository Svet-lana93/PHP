<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="ajax.js"></script>
    </head>
    <body>
        <div id="container">
            <form method="post" action="/action_ajax_form.php" id="ajaxForm" style="margin: calc(50vh - 133px) auto auto;width: 300px;">
                <div class="row gy-2">
                    <div class="form-group">
                        <label for="user" class="form-label">Your name</label>
                        <div id="user" >
                            <input name="user" class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review" class="form-label">Comments</label>
                        <div id="review" >
                            <textarea name="review" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div>
                        <button id="formSend" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
