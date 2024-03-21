<template>
    <section>
        <div class="password-wrapper">
            
            <img class="icon" src="../assets/icons/show.png" alt="Show Password" @click="togglePasswordVisibility">
            <input type="password" :id="inputId" v-model="password" required :placeholder="placeholder" :class="{ 'valid-password': isPasswordValid, 'invalid-password': !isPasswordValid }">
            
        </div>
    </section>
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
    font-size: 20px;

    /* position: relative; Set position to relative to accommodate absolute positioning of the icon */
}

.password-wrapper {
    /* display: flex;
    flex-direction: row; */
    /* direction: row; */
    /* align-items: center;
    justify-content: center; */
    /* display: flex;
    flex-direction: row; */
    width: 100%;
    position: relative;
    display: inline-block;
    
}

.icon {
    width: 30px;
    height: auto;
    position: absolute;
    top: 22%;
    right: 7%;
    cursor: pointer;

}
.valid-password {
    outline-color: green;
}

.invalid-password {
    outline-color: red;
}
</style>