<template>
    <div>
        <div class="password-wrapper">
            <input type="password" :id="inputId" v-model="password" required :placeholder="placeholder" :class="{ 'valid-password': isPasswordValid, 'invalid-password': !isPasswordValid }">
            <img class="icon" src="../assets/show.png" alt="Show Password" @click="togglePasswordVisibility">
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
    width: calc(100% - 30px); /* Adjusted width to accommodate the icon */
    height: 35px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    position: relative; /* Set position to relative to accommodate absolute positioning of the icon */
}

.password-wrapper {
    position: relative;
}

.icon {
    position: absolute;
    top: 45%; /* Center vertically */
    right: 20px; /* Adjusted right position */
    transform: translateY(-50%);
    cursor: pointer;
    width: 20px; /* Set width of the image */
    height: 20px; /* Set height of the image */
    z-index: 1; /* Ensure the icon appears above the input field */
}

.valid-password {
    outline-color: green;
}

.invalid-password {
    outline-color: red;
}
</style>