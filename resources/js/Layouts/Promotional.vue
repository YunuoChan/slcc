<script scoped>
import ALink from '@/Components/ALinkButton.vue';
import NavLink from '@/Components/NavLink.vue';
</script>
<template>
    <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                    class="block w-full"
                    alt="..."/>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Wedding</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a class="btn btn-outline-light btn-lg m-2" href="/login" target="_blank" role="button">Schedule Now</a>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                    class="block w-full"
                    alt="..."/>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Baptismal and Birthdays</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <a class="btn btn-outline-light btn-lg m-2"
                    href="/login" target="_blank" role="button">Schedule Now</a>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                    class="block w-full"
                    alt="..."/>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Funeral</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <a class="btn btn-outline-light btn-lg m-2" href="/login" target="_blank" role="button">Schedule Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>
    </div>

    <main class="mt-5">
        <div class="container">
        <!--Section: Content-->
            <section>
                <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                    <h4><strong>Saint Rose of Lima</strong></h4>
                    <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                    eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                    sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                    </p>
                    <p><strong>Saint Rose of Lima Parish Sta. Rosa Nueva Ecija</strong></p>
                    <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                    nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                    alias, unde optio accusantium soluta, iusto molestiae adipisci et?
                    </p>
                </div>
                </div>
            </section>
        
            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Our Services</strong></h4>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                eligendi quisquam doloremque.
                            </p>
                            <a href="#!" class="btn btn-primary">More info..</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                eligendi quisquam doloremque.
                            </p>
                            <a href="#!" class="btn btn-primary">More info..</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                eligendi quisquam doloremque.
                            </p>
                            <a href="#!" class="btn btn-primary">More info..</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Service 4</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                eligendi quisquam doloremque.
                            </p>
                            <a href="#!" class="btn btn-primary">More info..</a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5"/>
            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center"><strong>Got Any Questions?</strong></h4>

                <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Last name</label>
                        </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <div class="flex justify-start">
                            <div class="mb-3 w-100">
                                <select class="form-select appearance-none
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                    <option selected disabled>Select the purpose</option>
                                    <option value="1">Purpose One</option>
                                    <option value="2">Purpose Two</option>
                                    <option value="3">Purpose Three</option>
                                </select>
                            </div>
                        </div> 
                    </div>

                    <!-- Checkbox -->
                    <!-- <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
                        <label class="form-check-label" for="form2Example3">
                        Subscribe to our newsletter
                        </label>
                    </div> -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Submit inquiry
                    </button>
                    </form>
                </div>
                </div>
            </section>
            <!--Section: Content-->
            </div>
      </main>
</template>
