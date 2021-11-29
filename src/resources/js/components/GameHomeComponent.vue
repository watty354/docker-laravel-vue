<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                <div>
                <h3>性格診断</h3>
                </div>
                <div>
                    <router-link v-bind:to="{name: 'game.one'}">   
                        <button type="button" class="btn btn-success" onclick="clickBtn1()">スタート</button>
                    </router-link>   
                </div>
  </div>
            </div>
        </div>
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
