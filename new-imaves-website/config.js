var eButton = document.querySelector('.eButton');
eButton.onclick = function(e) {
  e.preventDefault(), $(this).next("ul").slideToggle(), $(this).toggleClass("expanded")
}

var rButton = document.querySelector('.rButton');
rButton.onclick = function(e) {
    e.preventDefault(),
    "yes" == $(this).data("expanded") ? ($(".izbornik").slideUp(),
        $("body").removeClass("noscroll"),
        $("nav").removeClass("active"),
        $(this).removeClass("active"),
        mybutton.style.display = "block",
    $(this).data("expanded", "no")) : ($(".izbornik").slideDown(),
        $("body").addClass("noscroll"),
        $("nav").addClass("active"),
        $(this).addClass("active"),
        mybutton.style.display = "none",
    $(this).data("expanded", "yes"))
}

var mybutton = document.getElementById("tButton");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

$('#tButton').click(function(){
    window.scroll({top: 0, behavior: "smooth"})
});

$(".dropbtn").on('click mouseover',function() {
    $(this).next("div").css("display","block");
});
$("html").on('click mouseout',function() {
    if ($(event.target).closest('.dropbtn, .dropdown-content').length === 0) {
        $(".dropdown-content").css("display","none");
    }
});

var stop = $("#brojilo").offset().top;
$(window).scroll(function() {
    if ($(window).scrollTop() > stop ) {
        $(window).off("scroll");
        $('.broj').each(function () {
            var $this = $(this);
            $({ Counter: $this.attr("data-decimal") }).animate({ Counter: $this.attr("data-number") }, {
                duration: 4000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
});
