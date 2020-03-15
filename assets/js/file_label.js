$(document).ready(function() {
  $(document).on("change", "#file", function() {
    // alert("上传图片");
    var image_name = $("#file").val();
    $("#file-label").html(image_name);
  });
});