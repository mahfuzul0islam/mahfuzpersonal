@extends('home.index')
@section('title')
    &mdash; Terms Of Service
@endsection
@section('banner-title')
    Terms Of Service
@endsection

@section('banner-text')
"I keep my terms short and clear. Take a moment to read them, and feel free to share your thoughts!"
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')

        <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 mx-auto text-center">
            <h2 class="heading-29190">Terms of Service</h2>
          </div>
        </div>
        <div class="">
          <p>Welcome to Mahfuz, a premier web development company owned and operated by Mahfuzul Islam. By accessing our
            website or utilizing our services, you agree to comply with and be bound by the following terms and
            conditions.
          </p>
          <p>
            <span class="fw-bold">1. Data Security:</span>
            At Mahfuz, we prioritize the security and confidentiality of our clients' data. We implement robust security
            measures to protect against unauthorized access, disclosure, or alteration of information.
          </p>
          <p>
            <span class="fw-bold">2. Client Satisfaction:</span>
            Our primary goal is to ensure that our clients receive exceptional service and achieve their desired
            outcomes. We are committed to delivering high-quality solutions that meet or exceed our clients'
            expectations.
          </p>
          <p>
            <span class="fw-bold">3. Intellectual Property: </span>
            All content, materials, and intellectual property provided by Mahfuz remain the exclusive property of
            Mahfuzul Islam. Clients may not reproduce, distribute, or use any content without prior written consent.
          </p>
          <p>
            <span class="fw-bold">4. Confidentiality:</span>
            We respect the privacy and confidentiality of our clients' information. Any data shared with us, including
            personal or proprietary information, will be treated with the utmost confidentiality and used solely for the
            purpose of fulfilling our services.
          </p>
          <p>
            <span class="fw-bold">5. Communication:</span>
            Effective communication is key to successful collaboration. We encourage open and transparent communication
            with our clients to ensure clarity, understanding, and alignment throughout the project lifecycle.
          </p>
          <p>
            <span class="fw-bold">6. Payment Terms: </span>
            Payment terms will be outlined in the project proposal or agreement. Clients are required to adhere to the
            agreed-upon payment schedule and terms. Failure to make timely payments may result in project delays or
            termination of services.
          </p>
          <p>
            <span class="fw-bold">7. Dispute Resolution: </span>
            In the event of any disputes or disagreements, both parties agree to engage in good faith negotiations to
            resolve the issue amicably. If a resolution cannot be reached, the matter may be escalated to arbitration or
            legal proceedings as necessary.
          </p>
          <p>
            <span class="fw-bold">8. Amendments: </span>
            Mahfuz reserves the right to amend or modify these terms of service at any time without prior notice. Any
            changes will be effective immediately upon posting on our website.
          </p>
          <p>
            By using our website or engaging our services, you acknowledge that you have read, understood, and agreed to
            these terms and conditions.</p>
          <p>
            If you have any questions or concerns regarding our Terms of Service, please contact us at

           <a href="contact.html"> contact@mahfuz.com.</a>

          </p>
        </div>
      </div>
    </div>



        @include('home.layout.footer')



    </div>
@endsection
