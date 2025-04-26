@extends('frontend.layouts.app')

@section('title')
    {{ __('refund_policy') }}
@endsection

@section('main')
    <div class="breadcrumbs breadcrumbs-height">
        <div class="container">
            <div class="row align-items-center breadcrumbs-height">
                <div class="col-12 justify-content-center text-center">
                    <div class="breadcrumb-title rt-mb-10"> {{ __('refund_policy') }}</div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ __('refund_policy') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="terms-condition ">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 order-1 order-lg-0 rt-mb-lg-20">
                    <div>
                        <div class="rt-spacer-50"></div>
                        <div class="privacy-page body-font-3 text-gray-500 rt-mb-24">
                            <h3>Refund Policy</h3>
                            <p>At Jobrecruita, we strive to provide quality services to all our users. Please read our refund policy carefully to understand your rights and obligations regarding payments and refunds.</p>
                            
                            <h5>1. General Policy</h5>
                            <ul>
                                <li>All purchases and payments made on Jobrecruita are non-refundable unless otherwise stated in this policy or required by law.</li>
                                <li>By making a payment, you agree to this refund policy.</li>
                            </ul>
                            
                            <h5>2. Eligibility for Refunds</h5>
                            <ul>
                                <li>Refunds may be considered only in the following cases:
                                    <ul>
                                        <li>Duplicate payment due to a technical error.</li>
                                        <li>Payment for a service that was not provided due to a fault on our side.</li>
                                        <li>Unauthorized transaction (subject to investigation).</li>
                                    </ul>
                                </li>
                                <li>Refund requests must be submitted within 7 days of the transaction date.</li>
                            </ul>
                            
                            <h5>3. Non-Refundable Items</h5>
                            <ul>
                                <li>Fees for services that have already been delivered or accessed.</li>
                                <li>Promotional or discounted offers.</li>
                                <li>Any third-party services purchased through Jobrecruita.</li>
                            </ul>
                            
                            <h5>4. Refund Process</h5>
                            <ul>
                                <li>To request a refund, please contact our support team at <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a> with your payment details and reason for the request.</li>
                                <li>We will review your request and notify you of the outcome within 10 business days.</li>
                                <li>If approved, refunds will be processed to your original payment method. Processing times may vary depending on your payment provider.</li>
                            </ul>
                            
                            <h5>5. Changes to This Policy</h5>
                            <p>Jobrecruita reserves the right to modify this refund policy at any time. Changes will be posted on this page. Continued use of our services after changes means you accept the updated policy.</p>
                            
                            <h5>6. Contact Us</h5>
                            <p>If you have any questions about our refund policy, please <a href="{{ route('website.contact') }}">contact us</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Subscribe Newsletter --}}
    <x-website.subscribe-newsletter />
@endsection
