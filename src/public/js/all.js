$(document)(function() {
    $(".title").lettering();
    $(".button").lettering();
});





$(document)(function() {
    animation();
}, 1000);

$('.button').click(function() {
    animation();
});


function animation() {
    var title1 = new TimelineMax();
    title1.to(".button", 0, { visibility: 'hidden', opacity: 0 })
    title1.staggerFromTo(".title span", 0.5, { ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80 }, { ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0 }, 0.05);
    title1.to(".button", 0.2, { visibility: 'visible', opacity: 1 })
}


$(document).on("click", ".deleteEvent", function(e) {
    // $(this)でイベントが発生した要素を取得して削除する
    $(this).remove();
});

const btn = document.querySelector('.btn');

btn.addEventListener('click', function() {
    this.classList.add('hide');
});




function clickBtn1() {
    const div1 = document.getElementById("div1");
    div1.removeChild(div2);
}

function clickBtn2() {
    const qs1 = document.querySelector("#box1");
    qs1.classList.remove("hide");
    qs1.classList.add("show");
}