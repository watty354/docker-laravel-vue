function animation() {
    var title1 = new TimelineMax();
    title1.to(".button", 0, { visibility: 'hidden', opacity: 0 })
    title1.staggerFromTo(".title span", 0.5, { ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80 }, { ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0 }, 0.05);
    title1.to(".button", 0.2, { visibility: 'visible', opacity: 1 })
}





function clickBtn1() {
    const div1 = document.getElementById("div1");
    div1.removeChild(div2);
    const qs2 = document.querySelector("vue_home");
    qs2.classList.remove("fadein");
}

function clickBtn2() {
    const qs1 = document.querySelector("#box1");
    qs1.classList.remove("hide");
    qs1.classList.add("show");

    const qs2 = document.querySelector("#vue_button");
    qs2.classList.add("hide");

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



function coloeSet(argObj) {
    // ==============================================
    //	入力済み時の背景色設定
    // ==============================================
    if (argObj.value == "") {
        argObj.style.backgroundColor = "";
    } else {
        argObj.style.backgroundColor = "rgba(30, 107, 185, 0.20)";
    }
}

function colorReset(argObj) {
    // ==============================================
    //	フォーカス時の背景色リセット
    // ==============================================
    argObj.style.backgroundColor = "";
}

function textAreaHeightSet(argObj) {
    // ==============================================
    //	フォーカス時の背景色リセット
    // ==============================================
    // 一旦テキストエリアを小さくしてスクロールバー（縦の長さを取得）
    argObj.style.height = "10px";
    var wSclollHeight = parseInt(argObj.scrollHeight);
    // 1行の長さを取得する
    var wLineH = parseInt(argObj.style.lineHeight.replace(/px/, ''));
    // 最低2行の表示エリアにする
    if (wSclollHeight < (wLineH * 2)) { wSclollHeight = (wLineH * 2); }
    // テキストエリアの高さを設定する
    argObj.style.height = wSclollHeight + "px";
}

function copy() {


    const copy = document.getElementById('copy');
    navigator.clipboard.writeText(copy.value);
    const qs1 = document.getElementById("info");
    qs1.classList.remove("hide");
    qs1.classList.add("show");
    setTimeout(() => {
        // Execution 1sec
        qs1.classList.remove("show");
        qs1.classList.add("hide");
    }, 1000);

}