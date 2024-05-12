<template>
    <div class="email-wrapper">
        <input type="email" class="email-entry" placeholder="Email" :class="{ 'valid-email': isEmailValid, 'invalid-email': !isEmailValid }" v-model="email" @input="checkEmailValidity($event)">
    </div>

</template>



<script>
export default {
    data() {
        return {
            isEmailValid: false,
            email: ''
        };
    },
    methods: {
        checkEmailValidity(event) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isEmailValid = emailRegex.test(event.target.value);
        }
    }
}
</script>



<style scoped>

    .email-wrapper{
        width: 100%;
        display: flex;
    }

    .email-entry {
        font-size: 17px;
        width: 100%;
        height: 35px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .valid-email {
        outline-color: green;
    }

    .invalid-email {
        outline-color: red;
    }
    
</style>