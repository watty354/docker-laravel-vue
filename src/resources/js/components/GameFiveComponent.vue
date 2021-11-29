<template>
<div class="deleteEvent">
    <div class="container-fluid mb-3">
        <div class="container">

    <div class="qiuz">
        <p>質問5</p>
    </div>
    <div class="quiz_content">
        <p>？</p>
    </div>



                    <router-link v-bind:to="{name: 'task.list'}">   
                        <button class="btn btn-success" onclick="clickBtn2()">はい</button>
                        <button class="btn btn-success" onclick="clickBtn2()">いいえ</button>
                    </router-link>
              </div>
        </div>
    </div>
</div>
</template>


<script>
    export default {}
</script>


