<template>
<div class="deleteEvent">
    <div class="container-fluid mb-3">
        <div class="container">

    <div class="qiuz">
        <p>質問4</p>
    </div>
    <div class="quiz_content">
        <p>？</p>
    </div>



                <div>
                    <router-link v-bind:to="{name: 'game.five'}">   
                        <button class="btn btn-success">はい</button>
                        <button class="btn btn-success">いいえ</button>
                    </router-link>       
                </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {}
</script>
