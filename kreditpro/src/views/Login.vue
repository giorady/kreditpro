<template>
    <div class="container">
        <br />
        <br />

        <h1>Login to Kreditpro</h1>

        <br />

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form @submit.prevent="handleSubmit">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" v-model="email" aria-describedby="emailHelp"
                            placeholder="email@email.com" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" v-model="password" placeholder="Enter password" />
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</template>

<script>
import axios from "axios"
export default {
    name: "Login",

    data() {
        return {
            email: "",
            password: "",
        }
    },

    methods: {
        handleSubmit(){
            const data = {
                email: this.email,
                password: this.password,
            };

            axios.post("https://localhost:8000/login", data)
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

<style scoped></style>
