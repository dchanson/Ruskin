$(function(){

    // highlight current hash
    (function (){
      var hash = window.location.hash;
      if(window.location.pathname.indexOf('/glosses/') > 0){
        if(hash){
          $(hash).show()
              .find('p').css('background', '#3a578533');
        }
      }
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
