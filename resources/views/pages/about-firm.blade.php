@extends("layout")
@section("content")
@php 
    $title = "About | Firm"
@endphp
<x-hero :image="asset('images/about/hero.png')" text="About Us"></x-hero>
<div class="container px-5 py-3 d-flex flex-column">
    <section class="fade-in mb-5">
        <h3 class="mb-4 fs-2 h3">The Firm</h3>
        <div class="row">
            <div class="col-12 col-lg-6">
                <p>Japan Property Investment Management is a reputable real estate investment firm based in Singapore, committed to
                    delivering attractive returns through strategic investments in high-quality real estate assets across Japan. Our
                    team members have collectively over 50 years of combined experience in banking, wealth and asset management, project
                    financing, deal structuring, project construction management, with a strong focus in the Asia Pacific region. We
                    specialize in identifying premium investment opportunities that align with our clients' goals and aspirations.</p>

                <p>The firm&#39;s investment strategy primarily targets boutique hotels, apartments, serviced residences, and other
                    income-generating properties situated in key urban hubs, with a particular emphasis on the dynamic markets of Tokyo
                    and Osaka. By leveraging our extensive market knowledge and local expertise, we aim to maximize value and generate
                    consistent, sustainable returns for our investors through carefully curated property assets.</p>

                <p>A central component of this strategy is our strong dedication to sustainability and green initiatives. The firm
                    seeks to create enduring value in Japan's dynamic real estate market, benefiting both our investors and the
                    environment.</p>
            </div>
            <img src="{{asset('images/about/sub-hero.png')}}" class="firm-story-img col-lg-6 d-none d-lg-block" alt="">
        </div>
    </section>
    <div class="fade-in my-3">
        <h3 class="h3 fs-2 mb-4">Our Approach</h3>
        <p>At Japan Property Investment Management, we emphasize a strong risk management approach by maintaining a sustainable
            capital structure that supports our investment strategies and effectively mitigates potential downside risks. Our
            deep understanding of the market, complemented by our local market expertise, extensive network and strong
            relationships provide us with access to valuable off-market opportunities. This allows us to identify unique
            investment prospects that others may not be privy to. We also cultivate long-term strategic partnerships built on
            trust and collaboration, which have been instrumental in shaping our successful track record.</p>

        <p>We are also fortunate to benefit from the guidance of an experienced sponsor, who offers invaluable insights into
            the Japanese market and real estate development. This mentorship plays a key role in enhancing our strategic
            decision-making and strengthening our ability to capitalize on high-potential investment opportunities, ensuring
            continued success for our clients.</p>
        <div class="row">
            <img src="{{asset('images/about/team1.png')}}" class="col-6">
            <img src="{{asset('images/about/team2.png')}}" class="col-6">
        </div>
        <div class="row my-5 team-banner p-5 fw-bold" style="height: 30vh;">
            <h2 class="h2">Our Team</h2>
            <a class="nav-link ms-1 fs-6" href="{{route('team')}}"><span class="btn btn-outline-dark">MEET THE TEAM <i class="fa-regular fa-circle-right"></i></span></a>
        </div>
    </div>
</div>
@endsection