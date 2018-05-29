$(document)
  .ready(function() {


    $("#iframeModal")
      .on("show.bs.modal", function(event) {
        let footerText = $(event.relatedTarget)
          .find(".card-text")
          .text();
        var headerText = $(event.relatedTarget)
          .find(".card-title")
          .text();
        var frameSrc = $(event.relatedTarget)
          .data("frame");
        $("#iframeModal")
          .css("overflow-y", "hidden")



          .find("iframe")
          .attr('src', frameSrc);

        $("#iframeModal")
          .find(".modal-header h3")
          .text(headerText);
        $("#iframeModal")
          .find(".modal-footer")
          .text(footerText);


        $("#iframeModal")
          .modal("handleUpdate");

        var iframeDocument = $("#iframeModal iframe")
          .get()[0].contentWindow;
        //  iframeDocument.style.position = "fixed";
        setTimeout(function() {
          iframeDocument.document.focus();
        }, 100);
        //console.log($(iframeDocument));

      });

    $("#iframeModal")
      .on("hide.bs.modal", function(event) {
        $(this)
          .find("iframe")
          .attr("src", "");

      });

    $("#collapsableP")
      .on("show.bs.collapse hide.bs.collapse", function(event) {
        $("span#seeMore")
          .toggle();
      });
  });