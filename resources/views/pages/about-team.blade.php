@extends("layout")
@section("content")
@php 
    $title = "About | Team"
@endphp
        <x-hero :image="asset('images/about/hero.png')" text="Our Team"></x-hero>
    <div class="container px-5 py-3">
        <!--About Jonathan Poh-->
        <h3 class="h3">Mr. Jonathan Poh</h3>
        <p>Currently a Senior Partner at a reputable External Asset Management firm in Singapore, Jonathan brings with
            him over 25 years of invaluable banking and finance experience as the Executive Director with Deutsche Bank
            and UBS AG. Prior to his positions in Deutsche Bank and UBS AG, Jonathan&#39;s experiences also include
            senior Client Advisor roles in Citibank and American Express Private Banking.</p>

        <p>In his years as a personal and corporate financial and wealth advisor, Jonathan has formulated plans and
            solutions for numerous Ultra-High Net-Worth clients in the Southeast Asia region. His commitment and
            dedication to his clients have helped him achieve several Service Excellence Awards throughout his career.
        </p>

        <p>Jonathan&#39;s knowledge of financial asset management is demonstrated in his exceptional expertise and
            proficiency in various aspects of the financial industry, both locally and internationally.</p>

        <h4 class="h4">Professional Qualifications:</h4>
        <ul>
            <li>
                Bachelor of Business (Banking & Finance - Honours), Nanyang Business School, Singapore
            </li>

            <li>
                Certified Financial Planner (CFP), Singapore
            </li>
        </ul>


        <!--About Brandon Lye-->
        <h3 class="h3 mt-5">Mr. Brandon Lye</h3>
        <p>Brandon has over 25 years of corporate, consulting and investment experience across Asia, specializing in
            investment, merger and acquisition and strategic planning. Brandon's professional experience includes a role
            as a Director at PricewaterhouseCoopers Singapore (PwC Singapore), where he led engagements in the Deals
            advisory practice. Brandon has gained deep experiences in deals structuring and investment in the real
            estate, infrastructure, financial services and technology sectors.</p>

        <p>Before joining PwC, Brandon was Executive VP at Surbana Jurong, a Temasek-owned urban planning and
            engineering consulting firm, where he led M&A strategy and completed successful deals in China, Singapore,
            and Australia. He also served as CEO of an asset management company tied to a European family office,
            overseeing equity and debt financing with international institutions like the Asia Development Bank (ADB).
        </p>

        <h4 class="h4">Professional Qualifications:</h4>
        <ul>
            <li>
                Executive Master of Business Administration (EMBA), Nanyang Business School, NTU, Singapore

            </li>
            <li>
                Bachelor of Engineering (Honours) from Nanyang Technological University, Singapore

            </li>
            <li>
                Advanced Management Program at Haas School of Business, University of California Berkley, USA

            </li>
            <li>
                Senior Executive Management Program at Tsinghua University, China

            </li>
            <li>
                Strategic Management Program, NUS Business School, Singapore

            </li>
        </ul>

        <!--About Ms. Genevieve Tan-->
        <h3 class="h3 mt-5">Ms. Genevieve Tan</h3>
        <p>Genevieve has a strong background in both corporate operations and education management. In 2015, she
            spearheaded the successful relocation of the company to a custom-built 5-storey facility, overseeing the
            integration of advanced technologies such as ERP, WMS, and specialized software to optimize operational
            efficiency. She also oversees the branding and marketing aspect of the business.
        </p>


        <p>Genevieve played a pivotal role in achieving ISO 9001 and ISO 22000 certifications by designing and
            implementing the necessary systems and processes. Additionally, she led strategic partnerships with
            organizations such as SATS and Geodis Logistics and many overseas suppliers across the world including
            Southeast Asia, South Africa, Mexico, Italy, Spain, Australia and New Zealand.
        </p>
        <p>As the primary contact for audit and governance matters, she ensured compliance with industry standards,
            while managing all aspects of company operations, including staff, financial oversight, facilities, and
            security.
        </p>
        <p>Genevieve&#39;s experience in managing teams, implementing strategic initiatives, and mentoring individuals
            across various sectors showcases her ability to lead diverse teams and deliver impactful results.
        </p>
        <h4 class="h4">Professional Qualifications:</h4>
        <ul>
            <li>Master of Science in Applied Economics, Singapore Management University
            </li>
            <li>Postgraduate Diploma in Education (Secondary), National Institute of Education Singapore
            </li>
            <li>Bachelor of Social Sciences (Honours in Economics), National University of Singapore
            </li>
        </ul>
    </div>
@endsection