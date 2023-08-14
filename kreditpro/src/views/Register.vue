<template>
    <div class="container">
        <br />
        <br />

        <h1>Register to Kreditpro</h1>

        <br />

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form @submit.prevent="handleSubmit">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" v-model="firstName" placeholder="John" />
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" v-model="lastName" placeholder="Doe" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" v-model="email" aria-describedby="emailHelp" placeholder="email@email.com" />
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile number</label>
                        <input type="text" class="form-control" id="mobile" v-model="mobile" placeholder="0812345679" />
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of birth</label>
                        <input type="text" class="form-control" id="dob" v-model="dob" placeholder="dd/mm/yyyy" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" v-model="password" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Re-enter password</label>
                        <input type="password" class="form-control" id="passwordConfirm" v-model="passwordConfirm" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>

            <div class="col-md-3"></div>
        </div>
        <br />
    </div>
</template>

<script>
import axios from "axios"

export default {
    name: "Register",

    data() {
        return {
            firstName: "",
            lastName: "",
            email: "",
            mobile: "",
            dob: "",
            password: "",
            passwordConfirm: "",
        }
    },

    methods: {
        handleSubmit(){
            const data = {
                firstName: this.firstName,
                lastName: this.lastName,
                email: this.email,
                mobile: this.mobile,
                dob: this.dob,
                password: this.password,
                passwordConfirm: this.passwordConfirm
            };

            axios.post("http://localhost:8080/register", data)
                .then(
                    res => {
                        console.log(res)
                    }
                ).catch(
                    err => {
                        console.log(err)
                    }
                )

        }
    }
};


</script>

<style></style>
