var l = '100';
var c = $('.c-inner').children().length;
$('.c-inner').scrollTop(l*c);
$('.refresh').click(function(){location.href='';});
$('.setup').click(function(){$('.setup-root').addClass('d');})
$('.setup-x-close').click(function(){$('.setup-root').removeClass('d');})
$('.apply').click(function(){$('.apply-root').addClass('d');})
$('.apply-x-close').click(function(){$('.apply-root').removeClass('d');})
$('.t-co-pyv').click(function(){$('.apply-s-youtube').addClass('d');})
$('.pyv-x-close').click(function(){$('.apply-s-youtube').removeClass('d');})
$('.cb-x-comment').click(function(){var u = $(this).parent().children('.cb-x-name').text();var c = $(this).text();var t = $(this).parent().children('.cb-x-time').text();$('.textview').addClass('d');$('.textview .tv-cont span.comment-textview-all').text(c);$('.textview .tv-cont span.username-textview-all').text(u);$('.time-textview-all').text(t);});
$('.closeTextview').click(function(){$('.textview').removeClass('d');});
$('.tv-cont').scroll(function () {	
var i = $('.innerText').text();
$('.textview-tv-t-blank-innerText').text(i);
var h = $('.tv-cont').scrollTop();
  if (h > 30) {
    $('.textview-tv-t-blank-innerText').addClass('d');
  } else if (h < 30) {
    $('.textview-tv-t-blank-innerText').removeClass('d');
  }
});