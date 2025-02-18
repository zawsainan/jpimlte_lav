@extends("layout")
@section("content")
<div class="w-100 min-vh-100 d-flex flex-column justify-content-end mb-3">
    <video class="flex-grow-1" autoplay loop muted playsinline>
        <source src="{{asset('images/home/hero_vid.mp4')}}" type="video/mp4">
    </video>
    <img src="{{asset('images/hero-pattern.png')}}" class="pattern" alt="Footer pattern">
</div>

<div class="container px-5 py-3 d-flex flex-column">
    <section class="row my-3 fade-in">
        <div class="col-12 col-xl-8">
            <p>Japan Property Investment Management (JPIM) was founded at the crossroads of vision, opportunity and
                entrepreneurship. We are a Singapore-based real estate investment firm designed to tap into Japan&#39;s emerging
                hospitality renaissance. With a team of seasoned professionals in wealth, finance and real estate investment, we
                set out to create not just an investment vehicle, but a visionary blueprint to take advantage of the
                transformation of Japan&#39;s real estate landscape.</p>

            <p>Our JPIM journey began with frequent trips to Japan, where we saw the immense potential in the country&#39;s
                tourism sector. In 2023, we recognized several unique opportunities as Japan&#39;s tourism industry rebounded
                from the COVID-19 pandemic:</p>
            <ul>
                <li>
                    A weak yen - drawing foreign investment;
                </li>
                <li>
                    Pent-up post-pandemic travel demand;
                </li>
                <li>
                    A government aiming to double annual tourist arrivals by 2030.

                </li>
            </ul>

            <p>We also saw a gap - the lack of a specialized fund that blends deep local-market knowledge, hospitality expertise
                and a commitment to sustainability to unlock the potential value in Japan&#39;s boutique hotels and urban
                residences.</p>

            <p>This realization led us to establish the Japan Property Hospitality Fund, our first Japan-focused real estate fund
                that combines opportunity with responsibility, delivering returns while elevating communities. </p>

            <p>With Japan&#39;s tourism resurgence, favourable regulatory incentives and undervalued real estate, we&#39;re facing
                a rare trifecta for investors. We invite you to join us in this exciting opportunity to reap the benefits of
                Japan&#39;s next chapter. Together, we&#39;re not just building a portfolio, but crafting destinations that inspire.
            </p>
        </div>
        <img src="{{asset('images/home/sub-hero.png')}}" alt="" class="object-fit-cover col-xl-4 d-none d-xl-block">
    </section>

    <section class="row banner text-center my-5 px-3 py-5 fade-in" style="margin-left: -10px; margin-right: -10px">
        <h2 class="h2 banner-text">Boutique Hotel and Premium Residences in Japan</h2>
    </section>

    <section class="row my-3  fade-in">
        <div class="col-12 col-md-6 fade-in">
            <div
                class="placeholder-img-two d-flex flex-column justify-content-center align-items-start ps-5">
                <h3 class="mb-4">About Us</h3>
                <a class="text-white" href="{{route('firm')}}">Discover More <i class="fa-sharp fa-solid fa-angles-right"
                        style="color: white;"></i><i class="fa-sharp fa-solid fa-angle-right"
                        style="color: white; margin-left: -5px;"></i> </a>
            </div>
        </div>
        <div class="col-12 mb-3 col-md-6 fade-in">
            <div
                class="placeholder-img-one d-flex flex-column justify-content-center align-items-start ps-5">
                <h3 class="mb-4">Our Team</h3>
                <a class="text-white" href="{{route('team')}}">Discover More <i class="fa-sharp fa-solid fa-angles-right"
                        style="color: white;"></i><i class="fa-sharp fa-solid fa-angle-right"
                        style="color: white; margin-left: -5px;"></i> </a>
            </div>
        </div>
    </section>
</div>
@endsection