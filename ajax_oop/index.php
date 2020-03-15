<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax basic</title>
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container" style="margin-top: 50px;">
    <form>
      <div class="form-group">
        <input type="text" id="name" class="form-control" placeholder="输入名字">
      </div>
      <div class="form-group">
        <button type="button" id="btn" class="btn btn-success">
          确认
        </button>
      </div>
    </form>
    <div class="msg"></div>
  </div>

  <script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // alert("success");
      $("#btn").click(function() {
        var name = $("#name").val();
        // POST 方法
        // $.post("ajax.php", { ajax_name: name }, function(res) {
        //   console.log(res);
        //   $(".msg").html(res);
        // }).fail(function(err){
        //   // + err.status
        //   console.log("error:" + err.statusText);
        // });
        $.ajax({
          type: 'POST',
          url: 'ajax.php',
          data: {
            ajax_name: name
          },
          success: function(res) {
            $(".msg").html(res);
          }
        }).fail(function(err){
          console.log("error:" + err.statusText);
        });
      })
    });
  </script>
</body>

</html>