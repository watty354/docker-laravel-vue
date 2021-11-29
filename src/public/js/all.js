function animation() {
    var title1 = new TimelineMax();
    title1.to(".button", 0, { visibility: 'hidden', opacity: 0 })
    title1.staggerFromTo(".title span", 0.5, { ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80 }, { ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0 }, 0.05);
    title1.to(".button", 0.2, { visibility: 'visible', opacity: 1 })
}





function clickBtn1() {
    const div1 = document.getElementById("div1");
    div1.removeChild(div2);
}

function clickBtn2() {
    const qs1 = document.querySelector("#box1");
    qs1.classList.remove("hide");
    qs1.classList.add("show");
}

function clickBtn3() {
    const spinner = document.getElementById('loading');
    spinner.classList.remove("loaded");
}


//ロード中
window.onload = function() {
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
}

// 戻ってきたときのロード中を削除
window.addEventListener('pageshow', function() {
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
});