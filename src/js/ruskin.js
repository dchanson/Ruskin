$(function(){

    // highlight current hash
    (function (){
      var hash = window.location.hash;
      $(hash).show()
          .find('p').css('background', '#ffff75');
    })();

    // open glosses in popup
    (function(){
      $(".gloss-inline a").off().click(function(){
        this.search = "?show_navbar=0";

        var height = parseInt(window.innerHeight / 2);
        var width = parseInt(window.innerWidth / 2);

        window.open(this.href, '_blank', "height=" + height + "px,width=" + width + "px");
        return false;
      });
    })();

});
