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
                        <input type="text" class="form-control" id="first_name" v-model="first_name" placeholder="John" />
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="last_name" v-model="last_name" placeholder="Doe" />
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
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" v-model="password" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Re-enter password</label>
                        <input type="password" class="form-control" id="password_confirm" v-model="password_confirm" placeholder="Password" />
                    </div>
                  <div class="mb-3">
                      <label for="KTP" class="form-label">KTP:</label>
                      <input type="file" class="form-control" id="selectedKtp" ref="selectedKtp" @change="handleFileUpload">
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
axios.defaults.withCredentials = true;

export default {
    name: "Register",

    data() {
        return {
            first_name: "",
            last_name: "",
            email: "",
            mobile: "",
            password: "",
            password_confirm: "",
            selectedKtp: null,
        }
    },

    methods: {
      handleFileUpload(e){
        this.selectedKtp = e.target.files[0];
      },
        handleSubmit(){
            const data = {
                first_name: this.first_name,
                last_name: this.last_name,
                email: this.email,
                mobile: this.mobile,
                password: this.password,
                password_confirm: this.password_confirm,
                selectedKtp: this.selectedKtp
            };

            const formData = new FormData();
            formData.append('selectedKtp', this.selectedKtp);

            for (let key in data) {
              formData.append(key, data[key]);
            }

            axios.post('http://localhost:8000/register', formData)
                .then(
                    res => {
                        console.log(res)
                    }
                ).catch(
                    err => {
                        console.log(err)
                    }
                )

            axios.get('http://localhost:8000/register', {withCredentials: true})
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
