<div class="sitecontent">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Post News</div>
      <div class="card-block">
        <div class="output"></div>
        <form action="functions/postnews.php" method="POST" class="myForm">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" id="content"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Send News">
        </form>
      </div>
    </div>
  </div>
</div>
