@include('components.header')
    <body class="defult-home">

        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">
            <div class="page-error">
                <div class="container">
                    <div class="error-not-found">
                        <div class="error-content">
                            <h2 class="title"><span>404</span>oops! page not found</h2>
                            <div class="btn-part">
                                <a href="index.html" class="readon learn-more">Back To Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content End -->

         <!-- modernizr js -->
        @include('components.scripts')
    </body>
</html>
