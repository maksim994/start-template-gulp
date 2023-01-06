window.addEventListener("load", function(event) {
  /*----------------------------------------------------*/
  /*	Scroll Anchor
  /*----------------------------------------------------*/
  
  var maskClick = "#anchor-";//"#anchor-";
  $('[href*="' + maskClick + '"]').on('click', function() {
  var itemId = $(this).attr("href"),
      strName = itemId.replace('#',''),
      itemName = '[name=' + strName + ']';
      if ( $('*').is(itemId) || $('*').is(itemName) ) {
          var item = $('*').is(itemId) ? itemId : itemName,
              itemTop = $(item).offset().top,
              blockFixed = $(document).width() >= 768 ? ".header-clone" : ".header-mobile",
              heightHeader = $(blockFixed).outerHeight(),
              destination = itemTop - heightHeader;                
          $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 100);
      }
          return false;
      });

});
