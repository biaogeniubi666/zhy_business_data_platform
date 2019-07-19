
<template>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Example Component 2</div>

                        <div class="card-body">
                           {{ title }}  个
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        
        mounted() {
            console.log('Component mounted.')
        },

        props: {
        title: String,
        likes: Number,
        isPublished: Boolean,
        commentIds: Array,
        author: Object,
        callback: Function,
        contactsPromise: Promise // or any other constructor
        },
    }
    
</script>
   



   
