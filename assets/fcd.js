(function($){
  adjust_selected();
  var menu_open = false;
  function toggle_menu(){
    if(!menu_open){
      $('.sm-nav').animate({'right':0},'fast');
      menu_open = true;
    }else{
      $('.sm-nav').animate({'right':'-300px'},'fast');
      menu_open = false;
    }
  }
  $('.sm-toggle').on('click',function(){
    toggle_menu();
  });
  $('.close-menu').on('click',function(){
    toggle_menu();
  });

  $(document).mouseup(function(e)
  {
    var sm_nav = $('.sm-nav');
    if(!sm_nav.is(e.target) && sm_nav.has(e.target).length === 0){
      if(menu_open){
        toggle_menu();
      }
    }
  });
  function adjust_selected(){
    var anchors = $('a');
    anchors.removeClass('selected');
    for(var i = 0; i < anchors.length;i++){
      if(anchors[i].hash == window.location.hash && ! $(anchors[i]).hasClass('button')){
        $(anchors[i]).addClass('selected');
      }
    }
  }
  $("a").on('click', function(event) {
    var _this = this;
    if (this.hash !== "") {
      var hash = this.hash;
      if($(hash).length !== 0){
        event.preventDefault();
      }

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 300, function(){
        window.location.hash = hash;
        adjust_selected();
      });
    }
  });

  /*var _anchors = $('.sm-nav a');
  var hash_array = [];
  for(var i = 0; i < _anchors.length;i++){
    if(_anchors[i].hash !== ""){
      hash_array.push(_anchors[i].hash);
    }
  }
  console.log(hash_array);
  $(window).scroll(function(e){
    for(var i = 0; i < hash_array.length;i++){
      console.log($(hash_array[i]));
      if($(this).scrollTop() == $(hash_array[i]).scrollTop()){
        window.location.hash = hash_array[i];
        adjust_selected();
        console.log(hash_array[i]);
      }
    }
  });*/
}(jQuery));
