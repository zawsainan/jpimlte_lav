@extends("layout")
@section("content")
<div class="w-100 min-vh-100 d-flex flex-column justify-content-end mb-3">
        <video class="flex-grow-1" autoplay loop muted playsinline>
            <source src="{{asset('images/home/hero_vid.mp4')}}" type="video/mp4">
        </video>
        <img src="{{asset('images/hero-pattern.png')}}" class="pattern" alt="Footer pattern">
</div>

<div class="container px-5 py-3 d-flex flex-column">

        <section class="banner row text-center mb-3 px-3 py-5 fade-in">
            <h2 class="h2 banner-text">Boutique Hotel and Premium Residences in Japan</h2>
        </section>

        <section class="row my-5 fade-in">
            <h3>Our Story</h3>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <p>
                        At the intersection of foresight, opportunity, and entrepreneurial legacy, Japan Property
                        Investment Management (JPIM) was born—a Singapore based real estate fund designed to capitalize
                        on Japan&#39;s unfolding hospitality renaissance. Spearheaded by the Sponsor Mr. Peter Kwee, a
                        Singaporean businessman, and fueled by a strategic alliance with seasoned finance professionals,
                        JPIM emerged not just as an investment vehicle , but as a visionary blueprint to redefine
                        Japan&#39;s real estate landscape.
                        <br><br>
                        The story of JPIM begins with the Sponsor had long recognized Japan&#39;s untapped potential. In
                        2023, as Japan&#39;s tourism sector surged toward recovery, the JPIM team saw a perfect storm: a
                        weak yen attracting foreign investment, pent-up post-pandemic travel demand, and a government
                        pushing to double annual tourist arrivals by 2030.Yet, the team noticed a gap—a lack of
                        specialized funds blending hospitality expertise, sustainability, and local-market precision to
                        unlock value in Japan&#39;s boutique hotels and urban residences. As such, the team decided to
                        embark on the journey to establish the Japan Property Hospitality Fund as a Japan market focus
                        real estate fund marrying opportunity with responsibility, delivering returns while elevating
                        communities.<br><br>
                        Japan&#39;s tourism resurgence, regulatory incentives, and undervalued real estate create a rare
                        trifecta for investors. With a weak yen reducing entry costs and the 2025 World Expo poised to
                        spotlight Osaka. The JPIM team invites investors to participate in Japan&#39;s next chapter.
                        Together, we&#39;re not just building a portfolio—we&#39;re crafting destinations that inspire.
                    </p>
                </div>
                <img src="{{asset('images/home/sub-hero.png')}}" alt="" class="object-fit-cover col-xl-4 d-none d-xl-block">
            </div>
        </section>

        <section class="row my-5 fade-in">
            <div class="col-12 mb-3 col-md-6 fade-in">
                <div
                    class="placeholder-img-one d-flex flex-column justify-content-center align-items-start ps-5">
                    <h3 class="mb-4">News & Insights</h3>
                    <a class="text-white" href="">Discover More <i class="fa-sharp fa-solid fa-angles-right"
                            style="color: white;"></i><i class="fa-sharp fa-solid fa-angle-right"
                            style="color: white; margin-left: -5px;"></i> </a>
                </div>
            </div>
            <div class="col-12 col-md-6 fade-in">
                <div
                    class="placeholder-img-two d-flex flex-column justify-content-center align-items-start ps-5">
                    <h3 class="mb-4">About us</h3>
                    <a class="text-white" href="{{route('firm')}}">Discover More <i class="fa-sharp fa-solid fa-angles-right"
                            style="color: white;"></i><i class="fa-sharp fa-solid fa-angle-right"
                            style="color: white; margin-left: -5px;"></i> </a>
                </div>
            </div>
        </section>
</div>
@endsection