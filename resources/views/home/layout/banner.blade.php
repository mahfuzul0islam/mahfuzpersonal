<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay"
        style="background-image: url('{{ asset(!empty($image->banner_image) ? 'upload/images/' . $image->banner_image : 'default/no_image.jpg')}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <h1 class="mb-4 text-white">@yield('banner-title')</h1>
                    <p class="mb-4">@yield('banner-text')</p>
                    @yield('banner-button')
                </div>
            </div>
        </div>
    </div>
</div>

