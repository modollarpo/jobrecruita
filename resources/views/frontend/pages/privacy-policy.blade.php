@extends('frontend.layouts.app')

@section('title')
    {{ __('privacy_policy') }}
@endsection

@section('main')
    <div class="breadcrumbs breadcrumbs-height">
        <div class="container">
            <div class="row align-items-center breadcrumbs-height">
                <div class="col-12 justify-content-center text-center">
                    <div class="breadcrumb-title rt-mb-10"> {{ __('privacy_policy') }}</div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.home') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> {{ __('privacy_policy') }}</li>
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
                            <h3>Privacy Policy</h3>
                            <p>At Jobrecruita, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our website and services.</p>
                            
                            <h5>1. Information We Collect</h5>
                            <ul>
                                <li><strong>Personal Information:</strong> Name, email address, phone number, resume, and other information you provide when registering or applying for jobs.</li>
                                <li><strong>Account Information:</strong> Username, password, and other credentials.</li>
                                <li><strong>Usage Data:</strong> Information about how you use our website, including IP address, browser type, device information, and pages visited.</li>
                                <li><strong>Cookies:</strong> We use cookies and similar technologies to enhance your experience and analyze site usage.</li>
                            </ul>
                            
                            <h5>2. How We Use Your Information</h5>
                            <ul>
                                <li>To provide and manage our services.</li>
                                <li>To process job applications and connect candidates with employers.</li>
                                <li>To communicate with you about your account, job opportunities, and updates.</li>
                                <li>To improve our website and services.</li>
                                <li>To comply with legal obligations.</li>
                            </ul>
                            
                            <h5>3. Sharing Your Information</h5>
                            <ul>
                                <li>With employers when you apply for jobs.</li>
                                <li>With service providers who help us operate our website and services.</li>
                                <li>When required by law or to protect our rights and safety.</li>
                                <li>With your consent or at your direction.</li>
                            </ul>
                            
                            <h5>4. Data Security</h5>
                            <p>We use reasonable administrative, technical, and physical safeguards to protect your information. However, no method of transmission over the Internet or electronic storage is 100% secure.</p>
                            
                            <h5>5. Your Choices</h5>
                            <ul>
                                <li>You can update or delete your account information at any time by logging into your account.</li>
                                <li>You may opt out of receiving promotional emails by following the unsubscribe instructions in those emails.</li>
                                <li>You can manage cookie preferences through your browser settings.</li>
                            </ul>
                            
                            <h5>6. Children’s Privacy</h5>
                            <p>Jobrecruita is not intended for children under 18. We do not knowingly collect personal information from children under 18.</p>
                            
                            <h5>7. Third-Party Links</h5>
                            <p>Our website may contain links to third-party sites. We are not responsible for the privacy practices or content of those sites.</p>
                            
                            <h5>8. Changes to This Policy</h5>
                            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page. Your continued use of the site after changes are posted means you accept those changes.</p>
                            
                            <h5>9. Contact Us</h5>
                            <p>If you have any questions about this Privacy Policy, please <a href="{{ route('website.contact') }}">contact us</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Subscribe Newsletter --}}
    <x-website.subscribe-newsletter />
@endsection

