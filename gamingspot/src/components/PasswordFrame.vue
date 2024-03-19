<template>
    <div>
        <div class="password-wrapper">
            <input type="password" :id="inputId" v-model="password" required :placeholder="placeholder" :class="{ 'valid-password': isPasswordValid, 'invalid-password': !isPasswordValid }">
            <i class="icon fas fa-eye" @click="togglePasswordVisibility"></i>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        placeholder: {
            type: String,
            default: 'Password' // Default placeholder value
        },
        inputId: String // Unique identifier for the input element
    },
    data() {
        return {
            isPasswordValid: false,
            password: '',
            passwordVisible: false // Add a flag to track password visibility
        };
    },
    methods: {
        checkPasswordValidity(event) {
            // Regular expression to check password format
            const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            this.isPasswordValid = passwordRegex.test(event.target.value);
        },
        togglePasswordVisibility() {
            this.passwordVisible = !this.passwordVisible; // Toggle the flag
            const input = document.getElementById(this.inputId);
            if (this.passwordVisible) {
                input.type = 'text'; // Show password
            } else {
                input.type = 'password'; // Hide password
            }
        }
    }
}
</script>

<style scoped>
input {
    width: 92%;
    height: 35px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.password-wrapper {
    position: relative;
}

.icon {
    position: absolute;
    top: 43%;
    right: 20px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 20px; /* Increase the size of the icon */
}

.valid-password {
    outline-color: green;
}

.invalid-password {
    outline-color: red;
}

</style>