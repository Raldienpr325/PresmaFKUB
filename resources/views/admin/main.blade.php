<!DOCTYPE html>
<html>
@include('app-layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        @include('app-layout.navbar')
        @include('app-layout.sidebar')

        <div class="content-wrapper">
            @include('app-layout.breadcrump')

            <section class="content">
                <div class="container-fluid">

                </div>
            </section>
        </div>
        @include('app-layout.footer')


    </div>

    @include('app-layout.script')
</body>

</html>
