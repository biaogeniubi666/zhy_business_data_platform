
<template>
    <div class="card" style="height: 500px; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px;">
        <div style="padding-top:20%;"></div>
        <div class="card-body-sytle1 border-bottom-primary  shadow text-gray-200">
            A值：{{ title1 }}万 / B值：{{ title2 }}万
        </div>
        <div class="card-body-sytle1 border-bottom-primary  shadow  text-gray-200">
            收支差：
        </div>
        <div id="mainbar1" class="card-body-sytle-bar border-bottom-primary"> </div>
    </div>   
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            title1: String,
            title2: String,
            likes: Number,
            isPublished: Boolean,
            commentIds: Array,
            author: Object,
            callback: Function,
            contactsPromise: Promise // or any other constructor
        }
        
    }
</script>

