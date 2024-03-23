<template>
    <section>
        <div>
            <input type="email" id="email_frame" placeholder="Email" :class="{ 'valid-email': isEmailValid, 'invalid-email': !isEmailValid }" v-model="email" @input="checkEmailValidity($event)">
        </div>
    </section>
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
            // Regular expression to check email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isEmailValid = emailRegex.test(event.target.value);
        }
    }
}
</script>

<style scoped>
#email_frame {
    font-size: 17px;
    width: 92%;
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