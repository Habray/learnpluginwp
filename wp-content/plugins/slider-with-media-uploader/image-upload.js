jQuery(document).ready(function ($) {
    $(document).on("click", ".img1", function (e) {
      e.preventDefault();
   
      var $button = $(this);
   
      var file_frame = (wp.media.frames.file_frame = wp.media({
        title: "Select or Upload an Image",
        library: {
          type: "image",
        },
        button: {
          text: "Select Image",
        },
        multiple: false,
      }));
   
      file_frame.on("select", function () {
        var attachment = file_frame.state().get("selection").first().toJSON();
        $button.siblings(".image-upload").val(attachment.url);
        jQuery(".img1").attr("src", attachment.url);
      });
   
      file_frame.open();
    });
  });
   
  // 2
   
  jQuery(document).ready(function ($) {
    $(document).on("click", ".img2", function (e) {
      e.preventDefault();
   
      var $button = $(this);
   
      var file_frame = (wp.media.frames.file_frame = wp.media({
        title: "Select or Upload an Image",
        library: {
          type: "image",
        },
        button: {
          text: "Select Image",
        },
        multiple: false,
      }));
   
      file_frame.on("select", function () {
        var attachment = file_frame.state().get("selection").first().toJSON();
        $button.siblings(".image-upload").val(attachment.url);
        jQuery(".img2").attr("src", attachment.url);
      });
   
      file_frame.open();
    });
  });
   
  // 3
  jQuery(document).ready(function ($) {
    $(document).on("click", ".img3", function (e) {
      e.preventDefault();
   
      var $button = $(this);
   
      var file_frame = (wp.media.frames.file_frame = wp.media({
        title: "Select or Upload an Image",
        library: {
          type: "image",
        },
        button: {
          text: "Select Image",
        },
        multiple: false,
      }));
   
      file_frame.on("select", function () {
        var attachment = file_frame.state().get("selection").first().toJSON();
        $button.siblings(".image-upload").val(attachment.url);
        jQuery(".img3").attr("src", attachment.url);
      });
   
      file_frame.open();
    });
  });
   
  //4
  jQuery(document).ready(function ($) {
    $(document).on("click", ".img4", function (e) {
      e.preventDefault();
   
      var $button = $(this);
   
      var file_frame = (wp.media.frames.file_frame = wp.media({
        title: "Select or Upload an Image",
        library: {
          type: "image",
        },
        button: {
          text: "Select Image",
        },
        multiple: false,
      }));
   
      file_frame.on("select", function () {
        var attachment = file_frame.state().get("selection").first().toJSON();
        $button.siblings(".image-upload").val(attachment.url);
        jQuery(".img4").attr("src", attachment.url);
      });
   
      file_frame.open();
    });
  });
   
  // 5
  jQuery(document).ready(function ($) {
    $(document).on("click", ".img5", function (e) {
      e.preventDefault();
   
      var $button = $(this);
   
      var file_frame = (wp.media.frames.file_frame = wp.media({
        title: "Select or Upload an Image",
        library: {
          type: "image",
        },
        button: {
          text: "Select Image",
        },
        multiple: false,
      }));
   
      file_frame.on("select", function () {
        var attachment = file_frame.state().get("selection").first().toJSON();
        $button.siblings(".image-upload").val(attachment.url);
        jQuery(".img5").attr("src", attachment.url);
      });
   
      file_frame.open();
    });
  });
  