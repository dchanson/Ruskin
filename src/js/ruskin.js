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

    

});
