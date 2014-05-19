<div id="login-wrapper" class="container">
  <form role="form" action="javascript:login();">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="passwd" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <button id="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<script type="text/javascript">
  function login() {
    require(["jquery"], function($) {
      if($("#email").val() != "" && $("#passwd").val() != "") {
        $.post("cms/login.php", {
          Email:  $("#email").val(),
          Passwd: $("#passwd").val()
        }, function() {
          window.location = "/?view=app";
        });
      } else {
        alert("Bitte ausfüllen!");
      }
    });
  }
</script>

