$(function () {
  // highlight current hash
  (function () {
    var hash = window.location.hash;
    if (window.location.pathname.indexOf("/glosses/") > 0) {
      if (hash) {
        $(hash).show().find(".p").css("background", "#3a578533");
      }
    }
  })();

  $("a").click(function () {
    // if (window.location.)
    if (window.location.search.indexOf("show_navbar=0") > 0) {
      this.search = "?show_navbar=0";

      window.location.href = this.href;
      // window.location.href =
      return false;
    }
  });
});
