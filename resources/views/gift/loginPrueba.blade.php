<x-template titulo="Login">
    <div id="intro">
        <div class="mask d-flex align-items-center h-100 bg-">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form class="bg-light  rounded-5 shadow-5-strong p-5 border my-2">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control input-dark" />
                                <label class="form-label" for="form1Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" />
                                <label class="form-label" for="form1Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">

                                </div>

                                <div class="col text-center">
                                    <!-- Simple link -->
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
