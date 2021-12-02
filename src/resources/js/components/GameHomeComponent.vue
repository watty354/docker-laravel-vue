<template>
        <div class="vue_home">


        <div class="main mt-5 mb-5">
            <h1 class="main-heading">
              <span class="main-heading-primary">性格診断</span>
              <span class="main-heading-secondary">
                めちゃくちゃ当たります</span>
            </h1>
          </div>
                <div>
                    <router-link v-bind:to="{name: 'game.one'}">   
                        <button type="button" class="button mb-5 mt-5" onclick="clickBtn1()">スタート</button>
                    </router-link>   
                </div>

                <p class="error">※精密なので戻ってしまうと不具合が起きるためお控えください</p>


        </div>
</template>

<script>
export default {
    data: {
        active01: false

    }
}
</script>

<style module>
.hide {
display: none;
}
.show {
   display: block; 
}
</style>
