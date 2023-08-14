<template>
    <div class="container">
        <br />
        <br />

        <h1>Register to Kreditpro</h1>

        <br />

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="John" />
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Doe" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email@email.com" />
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile number</label>
                        <input type="text" class="form-control" id="mobile" placeholder="0812345679" />
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of birth</label>
                        <input type="text" class="form-control" id="dob" placeholder="dd/mm/yyyy" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Re-enter password</label>
                        <input type="password" class="form-control" id="password2"
                            placeholder="Password" />
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
export default {};
</script>

<style></style>
