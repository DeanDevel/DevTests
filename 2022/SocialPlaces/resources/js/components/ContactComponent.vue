<template>
</template>

<script>
import Form from './Form.vue';
export default {
    name: 'contact-component',
    mixins: [Form],
    data(){
        return{
            formData: {
                name: null,
                email: null,
                gender: null,
                content: null
            }
        }
    },
    methods:{
        storeContact(){
            this.post('/contact', this.formData);
            
         },   
    },

}
</script>