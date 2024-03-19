<template>
    <div>
        <UnderlinedHeader text="Shipping Details"></UnderlinedHeader>
        <section class="main-section">
            <section class="view-section">
                <div class="detail-row">
                    <select class="shipping-options">
                        <option>Type of Shipping</option>
                        <option value="option-1">Local Post Service</option>
                        <option value="option-2">GLS Delivery Service</option>
                        <option value="option-3">DHL Express</option>
                    </select>

                    <select class="country-options" @change="fetchCities">
                        <option disabled selected value="">Country</option>
                        <option value="AT">Austria</option>
                        <option value="AU">Australia</option>
                        <option value="BE">Belgium</option>
                        <option value="CA">Canada</option>
                        <option value="CN">China</option>
                        <option value="CZ">Czech Rebulic</option>
                        <option value="DK">Denmark</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        <option value="IN">India</option>
                        <option value="IT">Italy</option>
                        <option value="JP">Japan</option>
                        <option value="KR">South Korea</option>
                        <option value="MX">Mexico</option>
                        <option value="NL">Netherlands</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NO">Norway</option>
                        <option value="PT">Portugal</option>
                        <option value="RU">Russia</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="ZA">South Africa</option>
                        <option value="SK">Slovakia</option>
                        <option value="ES">Spain</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TR">Turkey</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <!-- Add more countries here -->
                    </select>
                </div>

                <div class="detail-row">
                    <input class="post-code-input" placeholder="Post Code">
                    <select class="city-options">
                        <option disabled selected value="">City</option>
                        <!-- Cities will be populated dynamically -->
                    </select>
                </div>

                <div class="detail-row">
                    <input class="address-input" placeholder="Address">
                    <input class="phone-input" type="number" placeholder="Phone">
                </div>

                
            </section>
            <div class="control-panel">
                    <div class="back-button-section">
                        <CustomButton class="custom-button" text="Back" :onClick="handleGoBackClick"></CustomButton>
                    </div>
                    <div class="continue-button-section">
                        <CustomButton class="custom-button" text="Continue"></CustomButton>
                    </div>
                </div>
        </section>
    </div>
</template>

<script>
import router from '@/router'; 
import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';
import CustomButton from '../components/SiteSaveButton.vue';
import axios from 'axios';

export default {
    name: "ShippingDetailsView",
    props: {
        max_city_count: {
            type: Number,
            required: false,
            default: 50
        }
    },
    components: {
        UnderlinedHeader,
        CustomButton
    },
    methods: {
        handleGoBackClick() {
            router.push('/cart');
        },
        async fetchCities(event) {
            const countryCode = event.target.value;
            try {
                const response = await axios.get(`http://api.geonames.org/searchJSON?country=${countryCode}&featureClass=P&maxRows=${this.max_city_count}&username=johndym`);
                const cities = response.data.geonames.map(city => city.name);
                const cityOptions = document.querySelector('.city-options');
                cityOptions.innerHTML = ''; // Clear existing options
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    cityOptions.appendChild(option);
                });
            } catch (error) {
                console.error("Error fetching cities:", error);
            }
        }
    }
}
</script>

<style scoped>
.main-section {
    width: 100%;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* padding: 20px; */

}

.view-section {
    width: 80%;
    background-color: rgb(255, 162, 0);
    align-items: center;
    display: flex;
    flex-direction: column;
    max-width: 800px;
}

.control-panel {
    /* background-color: red; */
    width: 80%;
    padding: 5px;
    display: flex;
    flex-direction: row;
    width: 80%;
    max-width: 800px;
}

.detail-row {
    display: flex;
    flex-direction: row;
    padding: 10px;
    width: 90%;
    gap: 15px;
}

/* Select and input elements */
.shipping-options,
.country-options,
.post-code-input,
.city-options,
.address-input,
.phone-input {
    font-size: 16px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%; /* Set width to 100% */
    box-sizing: border-box; 
}

/* Option elements */
.shipping-options option {
    font-size: 16px;
}

/* Selected option style */
.shipping-options option:checked {
    background-color: #f0f0f0;
    color: #333;
    font-weight: bold;
}

/* Hover effect */
.shipping-options option:hover {
    background-color: #eaeaea;
}


.control-button {
    width: 50%;
}

.back-button-section{
    width: 50%;
    justify-content: left;
    display: flex;
    flex-direction: row;
}

.continue-button-section{
    width: 50%;
    justify-content: right;
    display: flex;
    flex-direction: row;
}

/* Responsive adjustments */
@media only screen and (max-width: 600px) {
    .detail-row {
        flex-direction: column; /* Change to column layout on smaller screens */
    }
}

@media only screen and (max-width: 400px) {
    .shipping-options,
    .country-options,
    .post-code-input,
    .city-options,
    .address-input,
    .phone-input {
        width: 100%; /* Set width to 100% on smaller screens */
    }
}
</style>