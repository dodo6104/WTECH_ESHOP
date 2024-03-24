<template>

    <div class="password-wrapper">
        <img class="icon" src="../../assets/icons/show.png" alt="Show Password" @click="togglePasswordVisibility">
        <input type="password" :placeholder="placeholder" :class="{ 'valid-password': isPasswordValid, 'invalid-password': !isPasswordValid}" @input="checkPasswordValidity($event)" :id="inputId">
    </div>

</template>

<script>    
export default {
    props: {
        placeholder: {
            type: String,
            default: 'Password' // Default placeholder value
        },
        inputId: {
            type: String,
            required: true
        } 
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
            this.passwordVisible = !this.passwordVisible; // Toggles the flag
            const input = document.getElementById(this.inputId); // Here we get the element
                                                                // by its ID
            if (this.passwordVisible) {
                input.type = 'text'; // Shows password
            } else {
                input.type = 'password'; // Hides password
            }
        }
    }
}
</script>

<style scoped>

.password-wrapper {
    width: 100%;
    position: relative;
    display: flex;
}


.password-input, .valid-password, .invalid-password {
    font-size: 17px;
    width: 100%;
    height: 35px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 17px;
}


.icon {
    width: 27px;
    height: auto;
    position: absolute;
    top: 22%;
    right: 6%;
    cursor: pointer;
}

.valid-password {
    outline-color: green;
}

.invalid-password {
    outline-color: red;
}
</style>